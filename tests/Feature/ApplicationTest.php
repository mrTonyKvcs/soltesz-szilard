<?php

namespace Tests\Feature;

use App\Applicant;
use App\Blog;
use App\Training;
use App\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class ApplicationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        config(['mail.default' => 'array']);
        // Locale redirects depend on a fresh request bootstrap, covered by Playwright.
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
    }

    private function admin(): User
    {
        return User::create(['name' => 'Admin', 'email' => 'admin@example.test', 'password' => Hash::make('test-password-123')]);
    }

    private function training(array $attributes = []): Training
    {
        return Training::create($attributes + ['slug' => 'teszt-esemeny', 'title' => 'Teszt esemény', 'description' => '<p>Leírás</p>', 'type' => 'Tréning', 'locale' => 'Budapest']);
    }

    private function blog(): Blog
    {
        return Blog::create(['title' => 'Olvasmány', 'slug' => 'olvasmany', 'description' => '<p>Tartalom</p>', 'published_at' => '2026-01-01', 'img_path' => 'images/blogs/existing.jpg']);
    }

    public static function publicPages(): array
    {
        return array_map(fn ($url) => [$url], [
            '/', '/soltesz-szilard', '/kapcsolat', '/selfness-coaching', '/szervezet-es-munkalelektan',
            '/egyeni-coaching-segito-beszelgetes', '/ertekesites-strategia-tanacsadas',
            '/eloadas-trening-muhely-munka-csoportos-coaching',
            '/asszertiv-erdekkepviseleti-kommunikacios-technikak', '/vezetoi-kompetenciak-fejlesztese',
            '/stresszben-ragadas', '/eletkozepi-valsag-krizis', '/reziliencia',
            '/temakozpont', '/esemenyek', '/sitemap.xml', '/login', '/password/reset',
        ]);
    }

    #[DataProvider('publicPages')]
    public function test_public_pages_render_with_an_empty_database(string $url): void
    {
        $this->get($url)->assertOk();
    }

    public function test_detail_pages_dates_and_sitemap_links(): void
    {
        $training = $this->training();
        $training->dates()->create(['started_at' => '2027-02-01', 'hour' => '10:00']);
        $blog = $this->blog();
        $this->get('/esemenyek/'.$training->id)->assertOk()->assertSee('2027-02-01');
        $this->get('/temakozpont/'.$blog->slug)->assertOk()->assertSee('Tartalom');
        $xml = $this->get('/sitemap.xml')->assertOk()->assertHeader('Content-Type', 'application/xml');
        $xml->assertSee('/esemenyek/'.$training->id)->assertDontSee('/esemenyek/'.$training->slug);
        $this->get('/esemenyek/999999')->assertNotFound();
        $this->get('/temakozpont/missing')->assertNotFound();
        $this->get('/missing')->assertNotFound();
    }

    public function test_admin_pages_and_every_mutation_require_authentication(): void
    {
        foreach (['/admin', '/admin/olvasmanyok', '/admin/esemenyek', '/admin/jelentkezok', '/admin/olvasmanyok/1/edit', '/admin/esemenyek/1/edit'] as $url) {
            $this->get($url)->assertRedirect('/login');
        }
        foreach (['/admin/olvasmanyok', '/admin/esemenyek'] as $url) {
            $this->post($url, [])->assertRedirect('/login');
            $this->put($url.'/1', [])->assertRedirect('/login');
            $this->delete($url.'/1')->assertRedirect('/login');
        }
        $this->delete('/admin/jelentkezok/1')->assertRedirect('/login');
        $this->get('/register')->assertNotFound();
    }

    public function test_login_failure_success_session_and_logout(): void
    {
        $user = $this->admin();
        $this->post('/login', ['email' => $user->email, 'password' => 'wrong'])->assertSessionHasErrors('email');
        $this->assertGuest();
        $this->post('/login', ['email' => $user->email, 'password' => 'test-password-123', 'remember' => 'on'])->assertRedirect('/admin');
        $this->assertAuthenticatedAs($user);
        foreach (['/admin', '/admin/olvasmanyok', '/admin/esemenyek', '/admin/jelentkezok'] as $url) {
            $this->get($url)->assertOk();
        }
        $this->post('/logout')->assertRedirect('/login');
        $this->assertGuest();
        $this->get('/admin')->assertRedirect('/login');
    }

    public function test_blog_create_edit_image_preservation_replacement_and_soft_delete(): void
    {
        Storage::fake('public');
        $this->actingAs($this->admin());
        $data = ['title' => 'Új olvasmány', 'description' => '<p>Új tartalom</p>', 'published_at' => '2026-10-23'];
        $this->post('/admin/olvasmanyok', $data + ['img_path' => UploadedFile::fake()->image('photo.png')])->assertSessionHasNoErrors()->assertRedirect();
        $blog = Blog::firstOrFail();
        $image = $blog->img_path;
        Storage::disk('public')->assertExists($image);
        $this->get('/admin/olvasmanyok/'.$blog->id.'/edit')->assertOk();
        $data['title'] = 'Átírt olvasmány';
        $this->put('/admin/olvasmanyok/'.$blog->id, $data)->assertRedirect('/admin/olvasmanyok')->assertSessionHasNoErrors();
        $this->assertSame($image, $blog->fresh()->img_path);
        $this->assertSame('atirt-olvasmany', $blog->fresh()->slug);
        $this->put('/admin/olvasmanyok/'.$blog->id, $data + ['img_path' => UploadedFile::fake()->image('new.png')])->assertSessionHasNoErrors();
        $this->assertNotSame($image, $blog->fresh()->img_path);
        $this->delete('/admin/olvasmanyok/'.$blog->id)->assertRedirect();
        $this->assertSoftDeleted($blog);
        $this->get('/temakozpont/atirt-olvasmany')->assertNotFound();
    }

    public function test_blog_validation_rejects_non_images_and_missing_date(): void
    {
        $this->actingAs($this->admin())->post('/admin/olvasmanyok', [
            'title' => 'Test', 'description' => 'Test', 'img_path' => UploadedFile::fake()->create('payload.php', 1, 'application/x-php'),
        ])->assertSessionHasErrors(['published_at', 'img_path']);
        $this->assertDatabaseCount('blogs', 0);
    }

    public function test_training_without_date_can_get_a_date_and_preserve_its_image(): void
    {
        Storage::fake('public');
        $this->actingAs($this->admin());
        $data = ['title' => 'Új tréning', 'description' => '<p>Leírás</p>', 'type' => 'Csoport', 'locale' => 'Kecskemét', 'price' => '10000', 'max_person' => '12'];
        $this->post('/admin/esemenyek', $data + ['image_path' => UploadedFile::fake()->image('event.png')])->assertSessionHasNoErrors();
        $training = Training::firstOrFail();
        $image = $training->image_path;
        $this->assertSame(0, $training->dates()->count());
        $this->get('/admin/esemenyek/'.$training->id.'/edit')->assertOk()->assertSee('name="started_at"', false);
        $this->put('/admin/esemenyek/'.$training->id, $data + ['started_at' => '2027-02-02', 'hour' => '10:30'])->assertSessionHasNoErrors();
        $this->assertSame($image, $training->fresh()->image_path);
        $this->assertSame('2027-02-02', $training->dates()->first()->started_at->format('Y-m-d'));
        $this->put('/admin/esemenyek/'.$training->id, $data + ['started_at' => '2027-02-03', 'hour' => '11:00:00', 'image_path' => UploadedFile::fake()->image('new.png')])->assertSessionHasNoErrors();
        $this->assertSame(1, $training->dates()->count());
        $this->assertNotSame($image, $training->fresh()->image_path);
        $this->delete('/admin/esemenyek/'.$training->id)->assertRedirect();
        $this->assertSoftDeleted($training);
        $this->assertSame(0, $training->dates()->count());
    }

    public function test_training_partial_dates_are_rejected(): void
    {
        $this->actingAs($this->admin())->post('/admin/esemenyek', [
            'title' => 'Teszt', 'description' => 'Leírás', 'type' => 'Típus', 'locale' => 'Helyszín', 'started_at' => '2027-01-01',
        ])->assertSessionHasErrors('hour');
        $this->assertDatabaseCount('trainings', 0);
    }

    public function test_contact_mail_uses_configured_sender_and_reply_to(): void
    {
        $this->post('/contact', ['name' => 'Érdeklődő', 'email' => 'visitor@example.test', 'message' => 'Kapcsolat teszt'])->assertSessionHasNoErrors();
        $messages = Mail::mailer('array')->getSymfonyTransport()->messages();
        $this->assertCount(1, $messages);
        $mail = $messages->first()->getOriginalMessage();
        $this->assertSame('visitor@example.test', $mail->getReplyTo()[0]->getAddress());
        $this->assertSame(config('mail.from.address'), $mail->getFrom()[0]->getAddress());
        $this->assertStringContainsString('Kapcsolat teszt', $mail->getHtmlBody());
        $this->post('/contact', ['name' => 'Test', 'email' => 'invalid', 'message' => 'Text'])->assertSessionHasErrors('email');
    }

    public function test_registration_mail_applicant_list_deleted_parent_and_deletion(): void
    {
        $training = $this->training();
        $data = ['training_id' => $training->id, 'title' => 'Forged title', 'name' => 'Jelentkező', 'email' => 'applicant@example.test', 'phone_number' => '+361234567', 'description' => 'Jelentkezés teszt'];
        $this->post('/tender', $data)->assertSessionHasNoErrors();
        $applicant = Applicant::firstOrFail();
        $mail = Mail::mailer('array')->getSymfonyTransport()->messages()->first()->getOriginalMessage();
        $this->assertSame('Jelentkezés: '.$training->title, $mail->getSubject());
        $training->delete();
        $this->actingAs($this->admin())->get('/admin/jelentkezok')->assertOk()->assertSee($training->title);
        $this->delete('/admin/jelentkezok/'.$applicant->id)->assertRedirect();
        $this->assertSoftDeleted($applicant);
    }

    public function test_application_is_rolled_back_if_mail_fails(): void
    {
        $training = $this->training();
        Mail::shouldReceive('send')->once()->andThrow(new \RuntimeException('Mail unavailable'));
        $this->post('/tender', ['training_id' => $training->id, 'name' => 'Teszt', 'email' => 'test@example.test', 'phone_number' => '123', 'description' => 'Test'])->assertStatus(500);
        $this->assertDatabaseCount('applicants', 0);
    }

    public function test_password_reset_notification_and_token_flow(): void
    {
        Notification::fake();
        $user = $this->admin();
        $this->post('/password/email', ['email' => $user->email])->assertSessionHas('status');
        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $this->get('/password/reset/'.$notification->token.'?email='.urlencode($user->email))->assertOk();
            $this->post('/password/reset', ['email' => $user->email, 'token' => $notification->token, 'password' => 'new-password-123', 'password_confirmation' => 'new-password-123'])->assertRedirect('/login');
            return true;
        });
        $this->assertTrue(Hash::check('new-password-123', $user->fresh()->password));
    }
}
