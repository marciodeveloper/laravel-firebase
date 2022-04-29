<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyAhdi_rFiy4Wyeh4ZTQlek_YBqpYHI0gCE',
        'auth_domain' => 'blogs-2bfc4.firebaseapp.com',
        'database_url' => 'https://blogs-2bfc4-default-rtdb.firebaseio.com/',
        'project_id' => 'blogs-2bfc4',
        'storage_bucket' => 'blogs-2bfc4.appspot.com',
        'messaging_sender_id' => '903574735268',
        'app_id' => '1:903574735268:web:0dbd0109f0b5a982651931',
        'measurement_id' => 'G-7RVLJZD301',
    ],

];
