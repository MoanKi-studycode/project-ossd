# Hệ Thống Phân Cụm Và Tối Ưu Tuyến Giao Hàng Đa Điểm Cho Bưu Cục SPX Express (Shopee)

## Giới thiệu
Đồ án môn học: Xây dựng hệ thống điều phối chặng cuối (Last-Mile Delivery) cho Bưu cục SPX Express Nha Trang với các thuật toán Balanced K-Means, Nearest Neighbor và 2-Opt.

## Yêu cầu môi trường
- PHP >= 8.2 (với các extension: `pdo_mysql`, `mbstring`, `curl`)
- MySQL / MariaDB (XAMPP cổng 3306)
- Composer
- Trình duyệt hiện đại hỗ trợ định vị GPS và JavaScript ES6+

## Hướng dẫn cài đặt
1. Clone dự án vào thư mục `htdocs` của XAMPP:
   ```bash
   git clone <repo-url> dinh-tuyen-spx
   ```
2. Cài đặt các thư viện phụ thuộc:
   ```bash
   composer install
   ```
3. Cấu hình cơ sở dữ liệu:
   - Tạo database và bảng: Chạy script `database/schema.sql` trong phpMyAdmin hoặc MySQL CLI.
   - Sao chép `config/database.example.php` thành `config/database.php` và điều chỉnh thông tin nếu cần.
   - Nạp dữ liệu ban đầu:
     ```bash
     php database/seed.php
     ```
4. Truy cập ứng dụng:
   - Mở trình duyệt và truy cập `http://localhost/dinh-tuyen-spx/public/` (hoặc đường dẫn tương ứng với thư mục đặt mã nguồn).

## Tài liệu chi tiết
Xem thêm tài liệu đặc tả thiết kế hệ thống tại [docs/THIET_KE.md](docs/THIET_KE.md).

## Giấy phép
Dự án được phân phối dưới giấy phép MIT - xem chi tiết tại [LICENSE](LICENSE).

