<?php

return [
    'default' => env('LOGGING_DEFAULT', 'file'),
    'email' => env('LOGGING_EMAIL', 'admin@example.com'),
    'kibana' => [
        'host' => env('KIBANA_HOST', 'http://localhost:9200'),
        'index' => env('KIBANA_INDEX', 'logs'),
    ],
];
