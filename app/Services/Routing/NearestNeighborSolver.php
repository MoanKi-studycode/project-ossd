<?php

declare(strict_types=1);

namespace App\Services\Routing;

/**
 * Class NearestNeighborSolver
 * Xây dựng lộ trình tham lam ban đầu (Nearest Neighbor) xuất phát từ điểm cố định.
 */
class NearestNeighborSolver
{
    /**
     * Dựng lộ trình đường hở xuất phát từ start qua danh sách các điểm
     *
     * @param array $start Điểm xuất phát ['vi_do' => float, 'kinh_do' => float]
     * @param array $points Danh sách các điểm giao hàng
     * @return array Danh sách điểm theo thứ tự tối ưu tham lam
     */
    public function solve(array $start, array $points): array
    {
        // TODO: Cài đặt thuật toán Nearest Neighbor theo Mục 3.2
        return [];
    }
}

