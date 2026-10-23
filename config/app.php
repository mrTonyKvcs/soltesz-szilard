<?php

return [
    'name' => env('APP_NAME', 'Soltész Szilárd'),
    'env' => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),
    'timezone' => 'Europe/Budapest',
    'locale' => 'hu',
    'fallback_locale' => 'hu',
    'faker_locale' => 'hu_HU',
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',
    'previous_keys' => array_filter(explode(',', (string) env('APP_PREVIOUS_KEYS', ''))),
    'maintenance' => ['driver' => 'file'],
    'aliases' => Illuminate\Support\Facades\Facade::defaultAliases()->merge([
        'LaravelLocalization' => Mcamara\LaravelLocalization\Facades\LaravelLocalization::class,
    ])->toArray(),
];
