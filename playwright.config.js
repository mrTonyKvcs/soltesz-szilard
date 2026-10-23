import { defineConfig, devices } from '@playwright/test';
export default defineConfig({
    testDir: './tests/Browser',
    globalSetup: './tests/Browser/setup.js',
    globalTeardown: './tests/Browser/teardown.js',
    fullyParallel: false,
    workers: 1,
    timeout: 90_000,
    expect: { timeout: 10_000 },
    reporter: [['list'], ['html', { open: 'never' }]],
    use: {
        baseURL: process.env.E2E_BASE_URL || 'http://localhost:8186',
        locale: 'hu-HU',
        trace: 'retain-on-failure',
        screenshot: 'only-on-failure',
    },
    projects: [{ name: 'chromium', use: { ...devices['Desktop Chrome'] } }],
});
