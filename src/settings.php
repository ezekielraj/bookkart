<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // DB settings
        'db' => [
            'host' => 'localhost',
            'user'=>'root',
            'pass'=>'angelEAR2',
            'dbname'=>'bookkart',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];