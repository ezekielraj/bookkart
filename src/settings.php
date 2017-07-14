<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // DB settings
        'db' => [
            'host' => 'sql12.freemysqlhosting.net',
            'user'=>'sql12185320',
            'pass'=>'RlUAWqRc16',
            'dbname'=>'sql12185320',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
