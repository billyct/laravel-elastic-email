<?php

return [
    'api_url' => env('ELASTIC_EMAIL_API_URL', 'https://api.elasticemail.com/v2/'),
    'api_key' => env('ELASTIC_EMAIL_API_KEY', ''),
    'public_account_id' => env('ELASTIC_EMAIL_PUBLIC_ACCOUNT_ID', ''),
];
