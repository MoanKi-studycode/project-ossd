<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Class TaiXeController
 * Quản lý màn hình Tài xế, lộ trình, cập nhật vị trí GPS động và kết quả giao hàng.
 */
class TaiXeController
{
    /**
     * Hiển thị màn hình Lộ trình & Giao hàng của tài xế (/tai-xe)
     *
     * @return void
     */
    public function index(): void
    {
        // TODO: Kiểm tra quyền tai_xe, lấy lộ trình cụm phụ trách và render view tai_xe/index
    }

    /**
     * API tái định tuyến động từ vị trí hiện tại của tài xế (POST /api/tai-xe/cap-nhat-lo-trinh)
     *
     * @return void
     */
    public function capNhatLoTrinh(): void
    {
        // TODO: Validate tọa độ, kiểm tra quyền sở hữu cụm, chạy lại NN + 2-Opt đường hở từ vị trí S
    }

    /**
     * API cập nhật kết quả giao hàng: giao_thanh_cong / giao_that_bai (POST /api/tai-xe/don-hang/{id}/ket-qua)
     *
     * @param int $orderId
     * @return void
     */
    public function capNhatKetQua(int $orderId): void
    {
        // TODO: Cập nhật trạng thái đơn hàng chống bấm đúp và chống sửa đơn tài xế khác (trả mã 409 nếu không khớp)
    }
}

