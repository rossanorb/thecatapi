<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        'db' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'database' => 'thecatapi',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],

        'api' => 'https://api.thecatapi.com',

        'secretKey' => 'lJEeFAWNJ6kiHDvpou9iu7kjJXy7GWwOAvPZCUXBNhlG8IOIZNyQXimwxT5hLLjGuUbJFo9dNN2tiE9RwCarcIxUy+iInif6e4'
    ],
];
