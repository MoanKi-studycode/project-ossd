<?php

declare(strict_types=1);

namespace App\Services\ShopeeApi;

/**
 * Class MockShopeeOrderService
 * Giả lập API Shopee trả về danh sách đơn hàng từ file JSON.
 */
class MockShopeeOrderService implements ShopeeOrderClientInterface
{
    /**
     * @var string
     */
    protected string $jsonPath;

    public function __construct(string $jsonPath = '')
    {
        $this->jsonPath = $jsonPath ?: __DIR__ . '/../../../data/don_hang_mau.json';
    }

    /**
     * Lấy dữ liệu lô đơn hàng từ file JSON mô phỏng
     *
     * @return array
     */
    public function fetchOrders(): array
    {
        // TODO: Đọc và parse dữ liệu JSON từ file mô phỏng
        return [];
    }
}

