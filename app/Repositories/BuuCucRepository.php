<?php

declare(strict_types=1);

namespace App\Repositories;

use PDO;

/**
 * Class BuuCucRepository
 * Quản lý truy vấn dữ liệu bảng `buu_cuc` (Cơ sở phát hàng và cấp hành chính).
 */
class BuuCucRepository
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
     * Lấy thông tin Bưu cục theo ID
     *
     * @param int $id
     * @return array|null
     */
    public function getById(int $id): ?array
    {
        // TODO: Viết PDO Prepared Statement lấy bưu cục theo ID
        return null;
    }

    /**
     * Lấy thông tin Bưu cục theo mã bưu cục (VD: SPX_KH_NT01)
     *
     * @param string $maBuuCuc
     * @return array|null
     */
    public function getByMa(string $maBuuCuc): ?array
    {
        // TODO: Viết PDO Prepared Statement lấy bưu cục theo mã
        return null;
    }

    /**
     * Lấy danh sách tất cả các bưu cục đang hoạt động
     *
     * @return array
     */
    public function getAllActive(): array
    {
        // TODO: Viết PDO Prepared Statement lấy danh sách bưu cục
        return [];
    }

    /**
     * Lấy danh sách các phường/xã thuộc vùng phục vụ của Bưu cục kèm thông tin hành chính
     *
     * @param int $buuCucId
     * @return array
     */
    public function getServingWards(int $buuCucId): array
    {
        // TODO: Viết PDO Prepared Statement JOIN phuong với buu_cuc
        return [];
    }
}

