<?php

use App\Applicant;
use App\Blog;
use App\Training;
use App\User;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

if (! $app->environment('local') || config('database.connections.mysql.host') !== 'database' || config('database.connections.mysql.database') !== 'soltesz') {
    throw new RuntimeException('Browser fixtures are restricted to the isolated Compose development database.');
}
$path = base_path('test-results/fixtures.json');
$action = $argv[1] ?? 'prepare';

if ($action === 'prepare') {
    $run = 'E2E-'.Str::random(12);
    $email = strtolower($run).'@example.test';
    $password = Str::random(32);
    $user = User::create(['name' => $run, 'email' => $email, 'password' => Hash::make($password)]);
    $fixture = [
        'session_cookie' => config('session.cookie'),
        'run' => $run, 'email' => $email, 'password' => $password, 'user_id' => $user->id,
        'blogs' => Blog::orderBy('id')->get(['id', 'slug'])->toArray(),
        'trainings' => Training::orderBy('id')->pluck('id')->toArray(),
    ];
    @mkdir(dirname($path), 0775, true);
    file_put_contents($path, json_encode($fixture, JSON_PRETTY_PRINT));
    chmod($path, 0600);
    echo 'Prepared browser fixture; original users unchanged.'.PHP_EOL;
} elseif ($action === 'cleanup') {
    if (! file_exists($path)) {
        exit(0);
    }
    $fixture = json_decode(file_get_contents($path), true, flags: JSON_THROW_ON_ERROR);
    DB::transaction(function () use ($fixture) {
        foreach (Blog::withTrashed()->where('title', 'like', $fixture['run'].'%')->get() as $blog) {
            if ($blog->img_path) Storage::disk('public')->delete($blog->img_path);
            $blog->forceDelete();
        }
        foreach (Training::withTrashed()->where('title', 'like', $fixture['run'].'%')->get() as $training) {
            if ($training->image_path) Storage::disk('public')->delete($training->image_path);
            $training->dates()->withTrashed()->forceDelete();
            $training->applicants()->withTrashed()->forceDelete();
            $training->forceDelete();
        }
        Applicant::withTrashed()->where('email', $fixture['email'])->forceDelete();
        DB::table('password_resets')->where('email', $fixture['email'])->delete();
        DB::table('sessions')->where('user_id', $fixture['user_id'])->delete();
        User::whereKey($fixture['user_id'])->where('email', $fixture['email'])->delete();
    });
    unlink($path);
    echo 'Browser fixtures removed; imported records preserved.'.PHP_EOL;
}
