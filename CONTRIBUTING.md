# Hướng Dẫn Đóng Góp (Contributing Guidelines)

Dự án phát triển phần mềm mã nguồn mở cho Đồ án Bưu cục SPX Express Nha Trang.

## Quy tắc đóng góp
1. **Phân nhánh (Branching)**: Tạo nhánh mới từ `master` theo định dạng `feature/<ten-tinh-nang>` hoặc `fix/<ten-loi>`.
2. **Quy tắc lập trình**:
   - Tuân thủ PSR-12 và khai báo `declare(strict_types=1);` ở đầu mọi file PHP.
   - Luôn sử dụng PDO Prepared Statements cho mọi câu truy vấn trong thư mục `app/Repositories/`.
   - Escape dữ liệu hiển thị bằng `htmlspecialchars($val, ENT_QUOTES, 'UTF-8')`.
   - Kiểm tra CSRF token cho mọi request `POST`.
   - Viết comment bằng tiếng Việt rõ ràng.
3. **Kiểm thử**: Đảm bảo tất cả bài test trong thư mục `tests/` vượt qua trước khi tạo Pull Request:
   ```bash
   ./vendor/bin/phpunit
   ```
4. **Pull Request**: Sử dụng mẫu PR tại `.github/pull_request_template.md`.

