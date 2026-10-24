<?php

declare(strict_types=1);

// Điểm vào duy nhất của ứng dụng
require_once __DIR__ . '/../app/bootstrap.php';

use App\Core\Router;
use App\Controllers\AuthController;
use App\Controllers\DieuPhoiController;
use App\Controllers\TaiXeController;
use App\Controllers\ThongKeController;

$router = new Router();

// ==============================================================================
// ĐĂNG KÝ SẴN TOÀN BỘ 100% ROUTE HỆ THỐNG THEO MỤC 5.2
// [DO THÀNH VIÊN 1 SỞ HỮU - THÀNH VIÊN 2 VÀ 3 TUYỆT ĐỐI KHÔNG CHỈNH SỬA FILE NÀY]
// ==============================================================================

// 1. Nhóm Xác thực & Điều hướng chung [THÀNH VIÊN 3 PHỤ TRÁCH CONTROLLER]
$router->get('/', [AuthController::class, 'showLogin']);
$router->get('/login', [AuthController::class, 'showLogin']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);

// 2. Nhóm Màn hình & API Điều phối viên [THÀNH VIÊN 2 PHỤ TRÁCH CONTROLLER]
$router->get('/dieu-phoi', [DieuPhoiController::class, 'index']);
$router->get('/api/mock/shopee/don-hang', [DieuPhoiController::class, 'mockShopeeOrders']);
$router->get('/api/hanh-chinh/phuong-theo-buu-cuc', [DieuPhoiController::class, 'phuongTheoBuuCuc']);
$router->post('/api/dieu-phoi/phan-cum-toi-uu', [DieuPhoiController::class, 'phanCumToiUu']);
$router->post('/api/dieu-phoi/sua-don-loi', [DieuPhoiController::class, 'suaDonLoi']);

// 3. Nhóm Màn hình & API Thống kê [THÀNH VIÊN 2 PHỤ TRÁCH CONTROLLER]
$router->get('/thong-ke', [ThongKeController::class, 'index']);
$router->get('/api/thong-ke/so-lieu', [ThongKeController::class, 'soLieu']);

// 4. Nhóm Màn hình & API Tài xế [THÀNH VIÊN 3 PHỤ TRÁCH CONTROLLER]
$router->get('/tai-xe', [TaiXeController::class, 'index']);
$router->post('/api/tai-xe/cap-nhat-lo-trinh', [TaiXeController::class, 'capNhatLoTrinh']);
$router->post('/api/tai-xe/don-hang/{id}/ket-qua', [TaiXeController::class, 'capNhatKetQua']);

// Điều phối request hiện tại
$router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $_SERVER['REQUEST_URI'] ?? '/');
