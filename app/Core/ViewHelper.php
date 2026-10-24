<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Class ViewHelper
 * Hỗ trợ hiển thị giao diện, escape dữ liệu XSS và render layout/view.
 */
class ViewHelper
{
    /**
     * Escape chuỗi HTML chống XSS
     *
     * @param mixed $value
     * @return string
     */
    public static function escape(mixed $value): string
    {
        // TODO: Gọi htmlspecialchars($value, ENT_QUOTES, 'UTF-8')
        return '';
    }

    /**
     * Render view template kèm layout
     *
     * @param string $view
     * @param array $data
     * @param string|null $layout
     * @return void
     */
    public static function render(string $view, array $data = [], ?string $layout = 'layouts/main'): void
    {
        // TODO: Render view và layout tương ứng
    }

    /**
     * Trả về JSON response thống nhất
     *
     * @param bool $success
     * @param string $message
     * @param array $data
     * @param int $statusCode
     * @return void
     */
    public static function json(bool $success, string $message = '', array $data = [], int $statusCode = 200): void
    {
        // TODO: Xuất JSON response format: {thanh_cong, thong_bao, du_lieu}
    }
}

