<?php

return [
    'Second_mysql' => [
        'driver' => 'mysql',
        'url' => env('DATABASE_URL'),
        'host' => env('DB_second_HOST', '127.0.0.1'),
        'port' => env('DB_second_PORT', '3307'),
        'database' => env('DB_second_DATABASE', 'forge'),
        'username' => env('DB_second_USERNAME', 'forge'),
        'password' => env('DB_second_PASSWORD', ''),
        'unix_socket' => env('DB_second_SOCKET', ''),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        ]) : [],
    ]
];
