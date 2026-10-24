<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Class Csrf
 * Quản lý tạo và xác thực mã chống tấn công CSRF.
 */
class Csrf
{
    /**
     * Tạo hoặc lấy CSRF token hiện tại trong session
     *
     * @return string
     */
    public static function getToken(): string
    {
        // TODO: Sinh hoặc lấy token từ session
        return '';
    }

    /**
     * Xác thực CSRF token từ header hoặc request body
     *
     * @param string|null $token
     * @return bool
     */
    public static function validate(?string $token): bool
    {
        // TODO: Xác thực token hợp lệ
        return false;
    }
}

