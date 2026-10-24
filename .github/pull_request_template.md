## Mô tả thay đổi
- Tóm tắt nội dung thay đổi hoặc tính năng được bổ sung:

## Checklist kiểm tra
- [ ] Code tuân thủ PSR-12 và có `declare(strict_types=1);`.
- [ ] Không viết SQL trực tiếp trong Controller, sử dụng PDO Prepared Statements trong Repositories.
- [ ] Đã kiểm tra bảo mật (CSRF, XSS qua htmlspecialchars, phân quyền route/API).
- [ ] Các bài kiểm thử đơn vị trong `tests/` chạy thành công.
- [ ] Đã kiểm tra hiển thị và luồng nghiệp vụ thực tế.

