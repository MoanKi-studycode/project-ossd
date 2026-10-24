<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Class Validator
 * Kiểm tra tính hợp lệ của dữ liệu đầu vào.
 */
class Validator
{
    /**
     * Xác thực dữ liệu theo tập quy tắc
     *
     * @param array $data
     * @param array $rules
     * @return array Danh sách lỗi nếu có
     */
    public static function validate(array $data, array $rules): array
    {
        // TODO: Kiểm tra dữ liệu đầu vào theo quy tắc
        return [];
    }

    /**
     * Kiểm tra tọa độ hợp lệ (nằm trong biên chuẩn hoặc phạm vi Khánh Hòa)
     *
     * @param mixed $lat
     * @param mixed $lng
     * @return bool
     */
    public static function isValidCoordinates(mixed $lat, mixed $lng): bool
    {
        // TODO: Kiểm tra tọa độ số và phạm vi
        return false;
    }
}

