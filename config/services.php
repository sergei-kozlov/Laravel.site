<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


//Авторизация новых пользователей через социальные сети необходимо получить что обозначенно как (1) и (2)

    'google' => [
        'client_id' => 'идентификатор клиента (1)',
        'client_secret' => 'Секретный ключ (2)',
        'redirect' => 'http://socialite.dev/socialite/google/callback', // Ссылка на перенаправление при удачной авторизации (3)
    ],

    'facebook' => [
        'client_id' => 'идентификатор клиента (1)', // App ID
        'client_secret' => 'Секретный ключ (2)', // App Secret
        'redirect' => 'http://socialite.dev/socialite/facebook/callback', //Ссылка на перенаправление при удачной авторизации (3)
    ],

    'twitter' => [
        'client_id' => 'идентификатор клиента (1)', // значение Consumer Key (API Key)
        'client_secret' => 'Секретный ключ (2)', // значение Consumer Secret (API Secret)
        'redirect' => 'http://socialite.dev/socialite/twitter/callback', //Ссылка на перенаправление при удачной авторизации (3)
    ],


];
