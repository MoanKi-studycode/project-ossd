<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Class ThongKeController
 * Quản lý màn hình Thống kê và thực nghiệm thuật toán.
 */
class ThongKeController
{
    /**
     * Hiển thị màn hình Thống kê & Thực nghiệm Thuật toán (/thong-ke)
     *
     * @return void
     */
    public function index(): void
    {
        // TODO: Kiểm tra quyền dieu_phoi và render view thong_ke/index
    }

    /**
     * API lấy dữ liệu cụm tuyến và chạy Benchmark so sánh thuật toán (GET /api/thong-ke/so-lieu)
     *
     * @return void
     */
    public function soLieu(): void
    {
        // TODO: Trả số liệu quãng đường Baseline vs NN vs 2-Opt và thời gian thực thi ms cho Chart.js
    }
}

