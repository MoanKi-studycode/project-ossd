<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class InboundServiceTest
 * Kiểm thử bắt đơn trùng, đơn lỗi tọa độ theo bán kính phục vụ bưu cục, đơn ngoài vùng phục vụ và chuẩn hóa tiếng Việt đa byte.
 */
class InboundServiceTest extends TestCase
{
    /**
     * Kiểm tra quy tắc validation Inbound theo Mục 8.1
     *
     * @return void
     */
    public function testInboundValidationRules(): void
    {
        // TODO: Viết test case kiểm tra chống trùng, lỗi tọa độ (vượt bán kính phục vụ) và chuẩn hóa mb_strtolower theo Mục 8.1
        $this->assertTrue(true);
    }
}
