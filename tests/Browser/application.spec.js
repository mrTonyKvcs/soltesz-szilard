import { test, expect } from '@playwright/test';
import { readFileSync } from 'node:fs';
const fixture = () => JSON.parse(readFileSync('test-results/fixtures.json', 'utf8'));
const png = Buffer.from('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+/5xkAAAAASUVORK5CYII=', 'base64');

async function login(page) {
    const { email, password } = fixture();
    await page.goto('/login');
    await page.locator('[name=email]').fill(email);
    await page.locator('[name=password]').fill(password);
    await page.locator('form[action$="/login"] label').filter({ hasText: 'Remember Me' }).click();
    await expect(page.locator('[name=remember]')).toBeChecked();
    await page.locator('form button[type=submit]').click();
    await expect(page).toHaveURL(/\/admin(?:\/.*)?$/);
}
async function setDescription(page, html) {
    await page.waitForFunction(() => window.tinymce?.activeEditor?.initialized);
    await page.evaluate(html => { tinymce.activeEditor.setContent(html); tinymce.activeEditor.save(); }, html);
}
async function assertPage(page, url) {
    const errors = [];
    const listener = error => errors.push(error.message);
    page.on('pageerror', listener);
    const response = await page.goto(url);
    expect(response.status(), url).toBe(200);
    await expect(page.locator('body')).not.toContainText('Internal Server Error');
    await expect(page.locator('body')).not.toContainText('Undefined variable');
    await expect(page.locator('#ms-preload')).toBeHidden({ timeout: 15000 });
    page.off('pageerror', listener);
    expect(errors, url).toEqual([]);
    const broken = await page.locator('img').evaluateAll(images => images.filter(image => image.currentSrc && image.complete && image.naturalWidth === 0).map(image => image.src));
    expect(broken, `Broken images on ${url}`).toEqual([]);
}

test('public pages and every imported article/event render in Chromium', async ({ page }) => {
    test.setTimeout(180_000);
    const pages = ['/', '/hu/soltesz-szilard', '/hu/kapcsolat', '/hu/selfness-coaching', '/hu/szervezet-es-munkalelektan',
        '/hu/egyeni-coaching-segito-beszelgetes', '/hu/ertekesites-strategia-tanacsadas',
        '/hu/eloadas-trening-muhely-munka-csoportos-coaching', '/hu/asszertiv-erdekkepviseleti-kommunikacios-technikak',
        '/hu/vezetoi-kompetenciak-fejlesztese', '/hu/stresszben-ragadas', '/hu/eletkozepi-valsag-krizis', '/hu/reziliencia',
        '/hu/temakozpont', '/hu/esemenyek', '/login', '/password/reset', '/en', '/en/contact'];
    const internalLinks = new Set();
    for (const url of pages) {
        await assertPage(page, url);
        for (const href of await page.locator('a[href]').evaluateAll(links => links.map(link => link.href).filter(href => href.startsWith(location.origin) && !href.includes('#')))) internalLinks.add(href);
    }
    for (const href of internalLinks) expect((await page.request.get(href)).status(), href).toBe(200);
    for (const blog of fixture().blogs) await assertPage(page, `/hu/temakozpont/${blog.slug}`);
    for (const id of fixture().trainings) await assertPage(page, `/hu/esemenyek/${id}`);
    const xml = await page.request.get('/sitemap.xml');
    expect(xml.status()).toBe(200);
    const urls = [...(await xml.text()).matchAll(/<loc>(.*?)<\/loc>/g)].map(match => match[1]);
    for (const url of urls) expect((await page.request.get(url)).status(), url).toBe(200);
    await page.goto('/hu');
    await expect(page.locator('#ms-preload')).toBeHidden();
    await page.screenshot({ path: 'test-results/home-desktop.png', fullPage: true, animations: 'disabled' });
});

test('mobile menu, public navigation, contact validation and real SMTP capture', async ({ page, request }) => {
    const rejected = await page.request.post('/hu/contact', { form: { name: 'No token', email: fixture().email, message: 'CSRF test' } });
    expect(rejected.status()).toBe(419);
    await page.setViewportSize({ width: 390, height: 844 });
    await page.goto('/hu/kapcsolat');
    await expect(page.locator('#ms-preload')).toBeHidden();
    await page.locator('a.sb-toggle-left').filter({ visible: true }).first().click();
    await expect(page.locator('.sb-slidebar')).toBeVisible();
    await page.locator('.sb-slidebar a[href$="/kapcsolat"]').click();
    await expect(page).toHaveURL(/\/hu\/kapcsolat$/);
    await expect(page.locator('.sb-slidebar.sb-active')).toHaveCount(0);
    await expect(page.locator('form[action$="/contact"]')).toBeVisible();
    const form = page.locator('form[action$="/contact"]');
    await form.locator('[name=name]').fill(fixture().run);
    await form.locator('[name=email]').fill(fixture().email);
    await form.locator('[name=message]').fill('Böngészős kapcsolatfelvételi teszt');
    await form.locator('button[type=submit]').click();
    await expect(page.locator('.alert-success')).toContainText('Sikeresen');
    const result = await request.get('http://localhost:8029/api/v1/search?query='+encodeURIComponent('subject:"Weblap: Kapcsolat"'));
    expect(result.ok()).toBeTruthy();
    expect((await result.json()).messages.length).toBeGreaterThan(0);
    await page.screenshot({ path: 'test-results/contact-mobile.png', fullPage: true });
    await expect(page.locator('body')).not.toContainText('Internal Server Error');
});

test('guests cannot access admin, invalid login fails, session survives reload, logout works', async ({ page }) => {
    for (const url of ['/admin', '/admin/olvasmanyok', '/admin/esemenyek', '/admin/jelentkezok']) {
        await page.goto(url);
        await expect(page).toHaveURL(/\/login$/);
    }
    await page.locator('[name=email]').fill(fixture().email);
    await page.locator('[name=password]').fill('incorrect-password');
    await page.locator('form button[type=submit]').click();
    await expect(page.locator('.help-block')).toContainText('Hibás');
    await login(page);
    await page.reload();
    await expect(page.locator('body')).toContainText(fixture().run);
    const cookies = await page.context().cookies();
    expect(cookies.some(cookie => cookie.name.startsWith('remember_web_'))).toBeTruthy();
    await page.context().clearCookies({ name: fixture().session_cookie });
    await page.goto('/admin');
    await expect(page).toHaveURL(/\/admin$/);
    await expect(page.locator('body')).toContainText(fixture().run);
    await page.locator('.dropdown-toggle').click();
    await page.getByText('Kijelentkezés', { exact: true }).click();
    await expect(page).toHaveURL(/\/login$/);
    await page.goto('/admin');
    await expect(page).toHaveURL(/\/login$/);
});

test('admin article creation, rich text, image upload, editing and deletion', async ({ page }) => {
    const title = fixture().run+' olvasmány';
    await login(page);
    await page.getByRole('link', { name: 'Olvasmányok', exact: true }).click();
    for (const blog of fixture().blogs) {
        expect((await page.goto(`/admin/olvasmanyok/${blog.id}/edit`)).status()).toBe(200);
        await expect(page.locator('[name=title]')).not.toHaveValue('');
    }
    await page.goto('/admin/olvasmanyok');
    await page.locator('[name=title]').fill(title);
    await page.locator('[name=published_at]').fill('2026-10-23');
    await setDescription(page, '<p><strong>Böngészőből létrehozott tartalom</strong></p>');
    await page.locator('[name=img_path]').setInputFiles({ name: 'test.png', mimeType: 'image/png', buffer: Buffer.concat([png, Buffer.alloc(3 * 1024 * 1024)]) });
    await page.locator('form button[type=submit]').first().click();
    await expect(page.locator('.alert-success')).toContainText('Sikeresen');
    let row = page.locator('tr').filter({ hasText: title });
    await row.locator('a').click();
    await expect(page.locator('[name=title]')).toHaveValue(title);
    const imageUrl = await page.locator('img.img-fluid').getAttribute('src');
    expect((await page.request.get(imageUrl)).status()).toBe(200);
    await page.locator('[name=title]').fill(title+' módosítva');
    await setDescription(page, '<p>Módosított tartalom</p>');
    await page.locator('form button[type=submit]').click();
    await expect(page.locator('.alert-success')).toContainText('Sikeresen');
    row = page.locator('tr').filter({ hasText: title+' módosítva' });
    await row.locator('a').click();
    await expect(page.locator('img.img-fluid')).toHaveAttribute('src', imageUrl);
    await page.screenshot({ path: 'test-results/admin-editor.png', fullPage: true });
    await page.getByRole('link', { name: 'Olvasmányok', exact: true }).click();
    await page.locator('tr').filter({ hasText: title+' módosítva' }).locator('button[type=submit]').click();
    await expect(page.locator('tr').filter({ hasText: title })).toHaveCount(0);
});

test('admin event without date gains a date, registration sends mail, applicants and soft deletion work', async ({ page, request }) => {
    const title = fixture().run+' esemény';
    await login(page);
    await page.getByRole('link', { name: 'Események', exact: true }).click();
    for (const id of fixture().trainings) {
        expect((await page.goto(`/admin/esemenyek/${id}/edit`)).status()).toBe(200);
        await expect(page.locator('[name=title]')).not.toHaveValue('');
    }
    await page.goto('/admin/esemenyek');
    await page.locator('[name=title]').fill(title);
    await page.locator('[name=locale]').fill('Budapest');
    await page.locator('[name=type]').fill('Tréning');
    await page.locator('[name=max_person]').fill('12');
    await page.locator('[name=price]').fill('10000');
    await setDescription(page, '<p>Böngészős eseményteszt</p>');
    await page.locator('[name=image_path]').setInputFiles({ name: 'event.png', mimeType: 'image/png', buffer: png });
    await page.locator('form button[type=submit]').first().click();
    await expect(page.locator('.alert-success')).toContainText('Sikeresen');
    await page.locator('tr').filter({ hasText: title }).locator('a').click();
    const id = page.url().match(/esemenyek\/(\d+)\/edit/)[1];
    await page.locator('[name=started_at]').fill('2027-02-03');
    await page.locator('[name=hour]').fill('10:30');
    await setDescription(page, '<p>Módosított esemény</p>');
    await page.locator('form button[type=submit]').click();
    await expect(page.locator('tr').filter({ hasText: title })).toContainText('2027-02-03');
    await page.goto(`/hu/esemenyek/${id}`);
    await expect(page.locator('body')).toContainText('2027-02-03');
    await page.locator('[name=name]').fill(fixture().run);
    await page.locator('[name=email]').fill(fixture().email);
    await page.locator('[name=phone_number]').fill('+361234567');
    await page.locator('textarea[name=description]').fill('Böngészős jelentkezés');
    await page.getByRole('button', { name: 'Jelentkezem', exact: true }).click();
    await expect(page.locator('.alert-success')).toContainText('Sikeresen');
    const mail = await request.get('http://localhost:8029/api/v1/search?query='+encodeURIComponent(`subject:"Jelentkezés: ${title}"`));
    expect((await mail.json()).messages.length).toBeGreaterThan(0);
    await page.goto('/admin/jelentkezok');
    await expect(page.locator('tr').filter({ hasText: fixture().email })).toContainText(title);
    await page.goto('/admin/esemenyek');
    await page.locator('tr').filter({ hasText: title }).locator('button[type=submit]').click();
    await page.goto('/admin/jelentkezok');
    await expect(page.locator('tr').filter({ hasText: fixture().email })).toContainText(title);
    await page.locator('tr').filter({ hasText: fixture().email }).locator('button[type=submit]').click();
    await expect(page.locator('tr').filter({ hasText: fixture().email })).toHaveCount(0);
    expect((await page.request.get(`/hu/esemenyek/${id}`)).status()).toBe(404);
});

test('password reset email link works in the browser', async ({ page, request }) => {
    await page.goto('/password/reset');
    await page.locator('[name=email]').fill(fixture().email);
    await page.locator('form button[type=submit]').click();
    await expect(page.locator('.alert-success')).toBeVisible();
    const search = await request.get('http://localhost:8029/api/v1/search?query='+encodeURIComponent(`to:${fixture().email}`));
    const messages = (await search.json()).messages;
    expect(messages.length).toBeGreaterThan(0);
    const detail = await request.get(`http://localhost:8029/api/v1/message/${messages[0].ID}`);
    const message = await detail.json();
    const link = (message.Text || '').match(/https?:\/\/[^\s<>]+\/password\/reset\/[^\s<>]+/)[0];
    await page.goto(link);
    await expect(page.locator('[name=email]')).toHaveValue(fixture().email);
    await page.locator('[name=password]').fill('new-browser-password-123');
    await page.locator('[name=password_confirmation]').fill('new-browser-password-123');
    await page.locator('form button[type=submit]').click();
    await expect(page).toHaveURL(/\/login$/);
    await page.locator('[name=email]').fill(fixture().email);
    await page.locator('[name=password]').fill('new-browser-password-123');
    await page.locator('form button[type=submit]').click();
    await expect(page).toHaveURL(/\/admin(?:\/.*)?$/);
});
