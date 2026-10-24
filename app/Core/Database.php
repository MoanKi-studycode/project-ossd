<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use RuntimeException;

/**
 * Class Database
 * Quản lý kết nối CSDL PDO dạng Singleton dùng chung cho toàn bộ dự án.
 * [DO THÀNH VIÊN 1 SỞ HỮU VÀ KHỞI TẠO TỪ BƯỚC 0]
 */
class Database
{
    /**
     * @var PDO|null Instance kết nối duy nhất
     */
    private static ?PDO $instance = null;

    /**
     * Khởi tạo private để ngăn chặn new trực tiếp từ bên ngoài
     */
    private function __construct()
    {
    }

    /**
     * Lấy kết nối PDO Singleton dùng chung
     *
     * @return PDO
     * @throws RuntimeException
     */
    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            $configFile = __DIR__ . '/../../config/database.php';
            $exampleFile = __DIR__ . '/../../config/database.example.php';

            $config = [
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

            if (file_exists($configFile)) {
                $loaded = require $configFile;
                if (is_array($loaded)) {
                    $config = array_merge($config, $loaded);
                }
            } elseif (file_exists($exampleFile)) {
                $loaded = require $exampleFile;
                if (is_array($loaded)) {
                    $config = array_merge($config, $loaded);
                }
            }

            $dsn = sprintf(
                'mysql:host=%s;port=%d;dbname=%s;charset=%s',
                $config['host'],
                (int) $config['port'],
                $config['dbname'],
                $config['charset']
            );

            $user = (string) ($config['username'] ?? $config['user'] ?? 'root');
            $pass = (string) ($config['password'] ?? '');
            $options = $config['options'] ?? [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            self::$instance = new PDO($dsn, $user, $pass, $options);
        }

        return self::$instance;
    }
}

