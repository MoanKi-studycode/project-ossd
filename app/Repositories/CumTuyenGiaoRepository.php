<?php

declare(strict_types=1);

namespace App\Repositories;

use PDO;

/**
 * Class CumTuyenGiaoRepository
 * Quản lý truy vấn dữ liệu bảng `cum_tuyen_giao`.
 */
class CumTuyenGiaoRepository
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
     * Tạo mới bản ghi cụm tuyến giao
     *
     * @param array $data
     * @return int ID của cụm tuyến vừa tạo
     */
    public function create(array $data): int
    {
        // TODO: Viết PDO Prepared Statement chèn cụm tuyến mới
        return 0;
    }

    /**
     * Lấy danh sách các cụm tuyến theo lô hoặc theo ngày
     *
     * @param string|null $batchCode
     * @return array
     */
    public function getClusters(?string $batchCode = null): array
    {
        // TODO: Viết PDO Prepared Statement lấy danh sách cụm
        return [];
    }

    /**
     * Lấy cụm tuyến đang hoạt động của một tài xế
     *
     * @param int $driverId
     * @return array|null
     */
    public function getActiveClusterByDriver(int $driverId): ?array
    {
        // TODO: Viết PDO Prepared Statement lấy cụm của tài xế
        return null;
    }

    /**
     * Cập nhật số liệu quãng đường km sau khi tính lại lộ trình
     *
     * @param int $clusterId
     * @param array $metrics
     * @return bool
     */
    public function updateMetrics(int $clusterId, array $metrics): bool
    {
        // TODO: Viết PDO Prepared Statement cập nhật km_baseline, km_nn, km_toi_uu
        return false;
    }
}

