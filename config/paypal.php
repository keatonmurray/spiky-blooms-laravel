<?php

    return [
        'api_endpoint' => env('PAYPAL_API_ENDPOINT', 'https://api.sandbox.paypal.com'), // Change to live URL for production
        'client_id' => env('PAYPAL_CLIENT_ID'),
        'client_secret' => env('PAYPAL_CLIENT_SECRET'),
    ];