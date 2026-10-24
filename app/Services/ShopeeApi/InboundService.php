<?php

declare(strict_types=1);

namespace App\Services\ShopeeApi;

/**
 * Class InboundService
 * Xử lý tiếp nhận, validate tọa độ theo bán kính bưu cục, chống trùng và lọc đơn hàng theo quy tắc Mục 2.3.
 */
class InboundService
{
    /**
     * Xử lý và phân loại lô đơn hàng đầu vào theo bưu cục
     *
     * @param array $payload Dữ liệu thô từ Mock API
     * @param array $buuCuc Thông tin bưu cục hiện tại (tọa độ P0, bán kính phục vụ)
     * @param array $validWards Danh sách phường hợp lệ của bưu cục
     * @return array Kết quả gồm: đơn hợp lệ, đơn lỗi tọa độ, đơn ngoài vùng phục vụ, đơn trùng
     */
    public function processBatch(array $payload, array $buuCuc, array $validWards): array
    {
        // TODO: Thực hiện 4 bước kiểm tra Inbound theo Mục 2.3 (tọa độ theo ban_kinh_phuc_vu_km và khớp mã hành chính / tên phường)
        return [];
    }
}
