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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],
    'turbosms' => [
        'wsdlEndpoint' => env('TURBOSMS_WSDLENDPOINT', 'http://turbosms.in.ua/api/wsdl.html'),
        'login' => env('TURBOSMS_LOGIN'),
        'password' => env('TURBOSMS_PASSWORD'),
        'sender' => env('TURBOSMS_SENDER'),
        'debug' => env('TURBOSMS_DEBUG', false), //will log sending attempts and results
        'sandboxMode' => env('TURBOSMS_SANDBOX_MODE', false) //will not invoke API call
    ],
];
