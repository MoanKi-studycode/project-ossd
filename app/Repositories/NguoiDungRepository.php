<?php

declare(strict_types=1);

namespace App\Repositories;

use PDO;

/**
 * Class NguoiDungRepository
 * Quản lý truy vấn dữ liệu bảng `nguoi_dung`.
 */
class NguoiDungRepository
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
     * Tìm người dùng theo tên đăng nhập
     *
     * @param string $username
     * @return array|null
     */
    public function findByUsername(string $username): ?array
    {
        // TODO: Viết PDO Prepared Statement tìm người dùng theo username
        return null;
    }

    /**
     * Lấy danh sách tài xế đang hoạt động kèm phường ưu tiên
     *
     * @return array
     */
    public function getActiveDrivers(): array
    {
        // TODO: Viết PDO Prepared Statement lấy tài xế đang hoạt động
        return [];
    }

    /**
     * Cập nhật vị trí hiện tại của tài xế
     *
     * @param int $userId
     * @param float $lat
     * @param float $lng
     * @return bool
     */
    public function updateLocation(int $userId, float $lat, float $lng): bool
    {
        // TODO: Viết PDO Prepared Statement cập nhật vị trí GPS
        return false;
    }
}

