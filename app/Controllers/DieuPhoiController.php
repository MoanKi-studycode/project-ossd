<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Class DieuPhoiController
 * Quản lý màn hình Điều phối, đồng bộ Mock Shopee API, phân cụm và sửa đơn lỗi.
 */
class DieuPhoiController
{
    /**
     * Hiển thị màn hình Bản đồ Phân cụm & Điều hành (/dieu-phoi)
     *
     * @return void
     */
    public function index(): void
    {
        // TODO: Kiểm tra quyền dieu_phoi, lấy dữ liệu bưu cục hiện tại và render view dieu_phoi/index
    }

    /**
     * API đồng bộ Mock API, chạy Balanced K-Means + NN + 2-Opt từ P0 (POST /api/dieu-phoi/phan-cum-toi-uu)
     *
     * @return void
     */
    public function phanCumToiUu(): void
    {
        // TODO: Kiểm tra CSRF, quyền dieu_phoi, chạy phân cụm và lưu DB trong Transaction
    }

    /**
     * API sửa nhanh đơn lỗi tọa độ/phường và gán vào cụm gần nhất (POST /api/dieu-phoi/sua-don-loi)
     *
     * @return void
     */
    public function suaDonLoi(): void
    {
        // TODO: Cập nhật tọa độ/phường (hỗ trợ Nominatim API), gán cụm, chạy lại NN + 2-Opt nếu hợp lệ
    }

    /**
     * API lấy danh sách phường/xã theo bưu cục phục vụ dropdown (GET /api/hanh-chinh/phuong-theo-buu-cuc)
     *
     * @return void
     */
    public function phuongTheoBuuCuc(): void
    {
        // TODO: Trả danh sách phường thuộc buu_cuc_id trong session kèm mã hành chính
    }

    /**
     * Mock API trả nội dung file data/don_hang_mau.json (GET /api/mock/shopee/don-hang)
     *
     * @return void
     */
    public function mockShopeeOrders(): void
    {
        // TODO: Trả nội dung JSON mẫu cho điều phối viên
    }
}
