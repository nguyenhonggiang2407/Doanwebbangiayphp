# TT Shoes — PHP/MySQL coursework

Đồ án cửa hàng giày dùng PHP thuần, MySQL/mysqli, HTML, CSS và JavaScript.
Repository được giữ như một dự án học tập cũ, chưa phải bản thương mại hoặc demo
đã được kiểm chứng đầy đủ.

## Nội dung có trong source

- Trang danh mục, sản phẩm và tìm kiếm.
- Đăng ký/đăng nhập, thông tin tài khoản và đổi mật khẩu.
- Giỏ hàng theo session và các trang xử lý đặt hàng.
- Các màn quản lý sản phẩm, danh mục, tài khoản, đơn hàng, bình luận và phản hồi.

Đây là mô tả các trang/handler có trong mã; chưa xác nhận các luồng hoạt động hoàn chỉnh.
Không có tích hợp thanh toán online được xác minh.

## Cấu trúc

| Vị trí | Nội dung |
| --- | --- |
| `index.php`, `timkiem.php` | Trang chủ và tìm kiếm |
| `pages/` | Tài khoản, sản phẩm, giỏ hàng, đặt hàng và liên hệ |
| `admin.php`, `sanpham/`, `danhmuc/`, `donhang/` | Giao diện/handler quản trị |
| `css/`, `main.css`, `javascript.js`, `img/` | Giao diện và tài nguyên |
| `Shop/` | Một bản cây source tương tự được lưu sẵn trong repo |

Hai cây ở gốc và `Shop/` chưa được hợp nhất; không xóa hoặc mặc định một cây là
không cần thiết. Một số URL trong source còn phụ thuộc đường dẫn `/Shop`.

## Chạy thử cục bộ

Cần PHP với `mysqli` và MySQL/MariaDB, ví dụ môi trường XAMPP.

1. Checkout source vào một website local riêng; không dùng dữ liệu cá nhân.
2. Khôi phục schema/dữ liệu mẫu từ bản đồ án gốc nếu có. **Repository hiện không
   chứa tệp SQL/schema**, nên chỉ tạo database rỗng chưa đủ để chạy ứng dụng.
3. Đối chiếu các kết nối `mysqli_connect` và đường dẫn `/Shop` trước khi mở trang.
   Source cũ dùng database tên `dacs2`; chưa có cấu hình môi trường tập trung.
4. Mở trang chủ qua máy chủ PHP, rồi thử tài khoản, giỏ hàng và quản trị bằng dữ liệu hư cấu.

Không có bản public demo được xác minh trong đợt audit ngày 03/11/2026.

## Giới hạn cần xử lý trước khi triển khai

- `pages/dangnhap.php` và `dangky.php` ghép đầu vào vào SQL và xử lý mật khẩu
  trực tiếp. Cần prepared statements, password hashing và migration dữ liệu tương ứng.
- Cần rà soát quyền quản trị, CSRF cho thao tác ghi, kiểm tra dữ liệu và output escaping.
- Cần khôi phục schema, kiểm thử nghiệp vụ và xác định cây source chính trước khi refactor.
- Bootstrap/jQuery/Font Awesome được tải từ CDN; quyền dùng ảnh trong `img/` chưa
  có hồ sơ nguồn. Không xem ảnh hoặc tên thương hiệu trong source là quyền phân phối lại.

Đợt này giữ nguyên source để không làm thay đổi dữ liệu/luồng cũ khi chưa có schema
và kiểm thử bảo vệ. Đây là các phát hiện từ source, không phải báo cáo kiểm thử xâm nhập.

## Kiểm tra đã thực hiện

Ngày 03/11/2026: đọc source, kiểm tra cây thư mục, `node --check javascript.js`
và `node --check Shop/javascript.js` đều vượt qua. Không có PHP/MySQL/Docker trong
môi trường kiểm tra nên chưa lint PHP, khởi chạy app hoặc xác minh checkout/admin.
Không tìm thấy bộ kiểm thử tự động hoặc CI trong source hiện có.

## Nguồn và quyền sử dụng

Chưa có LICENSE hoặc NOTICE xác định giấy phép của toàn bộ đồ án. Giữ nguyên
tên TT Shoes, comment và tài nguyên sẵn có; không tự khẳng định toàn bộ là mã gốc
hoặc tự áp MIT. Cần chủ dự án đối chiếu tài liệu/nguồn học tập và quyền ảnh trước khi tái sử dụng.
