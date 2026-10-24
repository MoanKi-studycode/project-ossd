<?php

declare(strict_types=1);

namespace App\Services\Routing;

/**
 * Class HaversineService
 * Tính khoảng cách trắc địa giữa hai điểm tọa độ (km).
 */
class HaversineService
{
    /**
     * Tính khoảng cách Haversine giữa 2 tọa độ (đơn vị km)
     *
     * @param float $lat1 Vĩ độ điểm 1
     * @param float $lng1 Kinh độ điểm 1
     * @param float $lat2 Vĩ độ điểm 2
     * @param float $lng2 Kinh độ điểm 2
     * @return float Khoảng cách tính bằng km
     */
    public static function distance(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        // TODO: Cài đặt công thức Haversine
        return 0.0;
    }
}

