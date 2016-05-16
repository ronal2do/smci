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

    // 'facebook' => [
    //     'client_id' => '1601517086754436',
    //     'client_secret' => 'bdd729cbba84376cf0cd08cdfa90be14',
    //     'redirect' => 'http://localhost:8000/callback',
    // ],

    'facebook' => [
        'client_id' => '439578256137914',
        'client_secret' => '6cd9106829b0df302c99ff7fe4e220d5',
        'redirect' => 'http://www.smci.com.br/callback',
    ],

];
