<?php

declare(strict_types=1);

namespace App\Repositories;

use PDO;

/**
 * Class DonHangRepository
 * Quản lý truy vấn dữ liệu bảng `don_hang`.
 */
class DonHangRepository
{
    /**
     * @var PDO
     */
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Lưu danh sách đơn hàng đồng bộ từ Inbound
     *
     * @param array $orders
     * @return int Số đơn đã lưu thành công
     */
    public function batchInsert(array $orders): int
    {
        // TODO: Viết PDO Prepared Statement chèn hàng loạt đơn hàng
        return 0;
    }

    /**
     * Lấy danh sách đơn hàng hợp lệ chưa phân công
     *
     * @return array
     */
    public function getUnassignedValidOrders(): array
    {
        // TODO: Viết PDO Prepared Statement lấy đơn chưa phân công có đủ tọa độ
        return [];
    }

    /**
     * Cập nhật cụm, tài xế và thứ tự giao cho đơn hàng
     *
     * @param int $orderId
     * @param int $clusterId
     * @param int $driverId
     * @param int $sequence
     * @return bool
     */
    public function assignToCluster(int $orderId, int $clusterId, int $driverId, int $sequence): bool
    {
        // TODO: Viết PDO Prepared Statement gán đơn vào cụm
        return false;
    }

    /**
     * Cập nhật kết quả giao hàng (giao_thanh_cong / giao_that_bai)
     *
     * @param int $orderId
     * @param int $driverId
     * @param string $status
     * @param string|null $failReason
     * @return bool Trả về true nếu cập nhật thành công (rowCount > 0)
     */
    public function updateDeliveryResult(int $orderId, int $driverId, string $status, ?string $failReason = null): bool
    {
        // TODO: Viết PDO Prepared Statement cập nhật kết quả giao hàng chống trùng
        return false;
    }
}

