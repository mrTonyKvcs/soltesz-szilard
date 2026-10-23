<?php

return [
    'default' => env('MAIL_MAILER', env('MAIL_DRIVER', 'log')),
    'mailers' => [
        'mailgun' => [
            'transport' => 'mailgun',
            'client' => ['timeout' => 10],
        ],
        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 587),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => 10,
        ],
        'log' => ['transport' => 'log'],
        'array' => ['transport' => 'array'],
        'sendmail' => ['transport' => 'sendmail', 'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i')],
    ],
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'noreply@solteszszilard.hu'),
        'name' => env('MAIL_FROM_NAME', 'Soltész Szilárd'),
    ],
    'support_address' => env('MAIL_SUPPORT_ADDRESS', env('MAILGUN_TO', 'szilard.soltesz@gmail.com')),
];
