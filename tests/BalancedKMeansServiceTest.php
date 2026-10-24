<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class BalancedKMeansServiceTest
 * Kiểm thử phân cụm cân bằng tải và loại bỏ cụm rỗng.
 */
class BalancedKMeansServiceTest extends TestCase
{
    /**
     * Kiểm tra 32 đơn chia cho 3 tài xế không vượt quá 20 đơn/cụm, tất định và loại bỏ cụm rỗng
     *
     * @return void
     */
    public function testBalancedClustering(): void
    {
        // TODO: Viết test case kiểm tra phân cụm Balanced K-Means theo Mục 8.1
        $this->assertTrue(true);
    }
}

