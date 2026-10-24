<?php

declare(strict_types=1);

namespace App\Services\Routing;

/**
 * Class DieuPhoiLoTrinhService
 * Điều phối quy trình tối ưu lộ trình kết hợp NN và 2-Opt kèm đo đạc quãng đường Baseline/NN/2-Opt.
 */
class DieuPhoiLoTrinhService
{
    /**
     * Lập lộ trình tối ưu và tính toán số liệu so sánh
     *
     * @param array $start Điểm xuất phát (P0 hoặc GPS hiện tại)
     * @param array $points Danh sách các đơn hàng trong cụm
     * @return array Kết quả bao gồm thứ tự giao, km_baseline, km_nn, km_toi_uu, thời gian chạy
     */
    public function plan(array $start, array $points): array
    {
        // TODO: Chạy Baseline, Nearest Neighbor, 2-Opt và tổng hợp số liệu
        return [];
    }
}

