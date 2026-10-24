<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Class Router
 * Quản lý định tuyến HTTP request và phân phối controller/action.
 */
class Router
{
    /**
     * Đăng ký route GET
     *
     * @param string $path
     * @param callable|array $handler
     * @return void
     */
    public function get(string $path, callable|array $handler): void
    {
        // TODO: Đăng ký route GET
    }

    /**
     * Đăng ký route POST
     *
     * @param string $path
     * @param callable|array $handler
     * @return void
     */
    public function post(string $path, callable|array $handler): void
    {
        // TODO: Đăng ký route POST
    }

    /**
     * Điều phối request hiện tại dựa trên URI và method.
     * Cắt BASE_URL khỏi đường dẫn trước khi so khớp route.
     *
     * @param string $method
     * @param string $uri
     * @return void
     */
    public function dispatch(string $method, string $uri): void
    {
        // TODO: Xử lý cắt BASE_URL và điều phối tới controller/action tương ứng
    }
}

