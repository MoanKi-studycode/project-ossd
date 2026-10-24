<?php

declare(strict_types=1);

// Cấu hình kết nối PDO MySQL/MariaDB (Mục 7 & 9)
return [
    'host' => '127.0.0.1',
    'port' => 3306,
    'dbname' => 'dinh_tuyen_spx',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ],
];

