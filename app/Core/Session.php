<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Class Session
 * Quản lý phiên làm việc, lưu trữ và bảo mật session.
 */
class Session
{
    /**
     * Bắt đầu session an toàn
     *
     * @return void
     */
    public static function start(): void
    {
        // TODO: Khởi tạo và thiết lập bảo mật session
    }

    /**
     * Lấy giá trị từ session
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        // TODO: Lấy dữ liệu session theo key
        return $default;
    }

    /**
     * Đặt giá trị vào session
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set(string $key, mixed $value): void
    {
        // TODO: Gán dữ liệu vào session theo key
    }

    /**
     * Xóa session theo key
     *
     * @param string $key
     * @return void
     */
    public static function remove(string $key): void
    {
        // TODO: Xóa key khỏi session
    }

    /**
     * Tái tạo Session ID chống Session Fixation
     *
     * @return void
     */
    public static function regenerate(): void
    {
        // TODO: Gọi session_regenerate_id(true)
    }

    /**
     * Hủy toàn bộ session
     *
     * @return void
     */
    public static function destroy(): void
    {
        // TODO: Xóa toàn bộ dữ liệu session
    }
}

