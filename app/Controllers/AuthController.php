<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Class AuthController
 * Xử lý đăng nhập, đăng xuất và quản lý phiên làm việc theo vai trò và bưu cục.
 */
class AuthController
{
    /**
     * Hiển thị trang đăng nhập
     *
     * @return void
     */
    public function showLogin(): void
    {
        // TODO: Render view auth/login
    }

    /**
     * Xử lý xác thực đăng nhập
     *
     * @return void
     */
    public function login(): void
    {
        // TODO: Kiểm tra CSRF, xác thực username/password Bcrypt, lưu user_id, vai_tro, buu_cuc_id vào session và regenerate session
    }

    /**
     * Đăng xuất khỏi hệ thống
     *
     * @return void
     */
    public function logout(): void
    {
        // TODO: Hủy session và chuyển hướng về /login
    }
}
