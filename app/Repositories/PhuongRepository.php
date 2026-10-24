<?php

declare(strict_types=1);

namespace App\Repositories;

use PDO;

/**
 * Class PhuongRepository
 * Quản lý truy vấn dữ liệu bảng `phuong` và liên kết với `buu_cuc`.
 */
class PhuongRepository
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
     * Lấy danh sách phường theo Bưu cục phụ trách
     *
     * @param int $buuCucId
     * @return array
     */
    public function getByBuuCuc(int $buuCucId): array
    {
        // TODO: Viết PDO Prepared Statement lấy danh sách phường theo buu_cuc_id
        return [];
    }

    /**
     * Tìm phường theo buu_cuc_id và tên đã chuẩn hóa
     *
     * @param int $buuCucId
     * @param string $normalizedName
     * @return array|null
     */
    public function findByBuuCucAndNormalizedName(int $buuCucId, string $normalizedName): ?array
    {
        // TODO: Viết PDO Prepared Statement tìm phường theo tên và buu_cuc_id
        return null;
    }

    /**
     * Tìm phường theo mã hành chính quốc gia
     *
     * @param string $maHanhChinh
     * @return array|null
     */
    public function findByMaHanhChinh(string $maHanhChinh): ?array
    {
        // TODO: Viết PDO Prepared Statement tìm phường theo ma_hanh_chinh
        return null;
    }
}
