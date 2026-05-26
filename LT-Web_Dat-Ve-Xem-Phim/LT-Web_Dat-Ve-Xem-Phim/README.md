# 🎬 GemFlix - Website Đặt Vé Xem Phim Trực Tuyến

Chào mừng bạn đến với **GemFlix**, một hệ thống đặt vé xem phim trực tuyến hiện đại, trực quan và dễ sử dụng. Dự án được phát triển dưới dạng bài tập lớn / đồ án môn học Lập trình Web.

---

## 🚀 Tính Năng Chính

### 🔹 Khách Hàng (Frontend)
*   **Trang Chủ**: Banner nổi bật giới thiệu phim hot, danh sách phim mới cập nhật và phim thịnh hành.
*   **Chi Tiết Phim**: Xem thông tin chi tiết (đạo diễn, diễn viên, thời lượng, thể loại, ngày chiếu), xem trailer phim trực tiếp qua cửa sổ modal.
*   **Đặt Vé & Chọn Ghế**: Sơ đồ ghế ngồi trực quan, cho phép chọn nhiều ghế, phân loại ghế thường và VIP.
*   **Áp Dụng Mã Giảm Giá (Voucher)**: Nhập mã khuyến mãi để được giảm giá trực tiếp vào hóa đơn.
*   **Thanh Toán**: Trang hóa đơn tóm tắt thông tin đặt vé và xác nhận thanh toán giả lập.
*   **Tài Khoản**: Đăng ký, đăng nhập và quản lý thông tin cá nhân, lịch sử đặt vé.

### 🔸 Quản Trị Viên (Admin Panel)
*   **Quản Lý Phim**: Thêm, sửa, xóa phim, cập nhật trạng thái (hot, mới, banner).
*   **Quản Lý Lịch Chiếu**: Xếp lịch chiếu phim theo phòng chiếu, ngày và giờ.
*   **Quản Lý Người Dùng & Hóa Đơn**: Xem danh sách thành viên và theo dõi doanh thu đặt vé.

---

## 🛠️ Công Nghệ Sử Dụng

*   **Frontend**: 
    *   HTML5, CSS3 (Vanilla CSS, Responsive Layout)
    *   JavaScript (ES6+, Fetch API kết nối Backend)
    *   FontAwesome (Icon hệ thống)
*   **Backend**: PHP (Cấu trúc API thuần hướng đối tượng OOP)
*   **Database**: MySQL (Quản lý phim, người dùng, lịch chiếu, ghế ngồi, hóa đơn, voucher)

---

## ⚙️ Hướng Dẫn Cài Đặt & Chạy Dự Án

### 1. Chuẩn Bị Môi Trường
*   Cài đặt phần mềm tạo máy chủ ảo **XAMPP** (đã tích hợp sẵn Apache và MySQL).

### 2. Thiết Lập Dự Án
1.  Tải mã nguồn về và giải nén thư mục dự án vào đường dẫn `C:\xampp\htdocs\`.
    *   Đảm bảo thư mục có cấu trúc: `C:\xampp\htdocs\LT-Web_Dat-Ve-Xem-Phim\`
2.  Khởi động **Apache** và **MySQL** trong ứng dụng **XAMPP Control Panel**.

### 3. Cấu Hình Cơ Sở Dữ Liệu
1.  Truy cập vào trang quản lý cơ sở dữ liệu: [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)
2.  Tạo một cơ sở dữ liệu mới với tên là **`cinema_db`** (chọn mã hóa `utf8mb4_general_ci`).
3.  Chọn cơ sở dữ liệu `cinema_db` vừa tạo, click vào tab **Import**, chọn tệp tin SQL tại đường dẫn:
    `backend/database/cinema_db.sql` và nhấn **Go** để nạp dữ liệu mẫu.

### 4. Truy Cập Trang Web
Mở trình duyệt web của bạn và truy cập theo đường dẫn sau để trải nghiệm:
👉 **[http://localhost/LT-Web_Dat-Ve-Xem-Phim/frontend/index.html](http://localhost/LT-Web_Dat-Ve-Xem-Phim/frontend/index.html)**

---

## 🧑‍💻 Thành Viên Thực Hiện
*   **GitHub**: [@thunguyen205-hash (AThu205)](https://github.com/thunguyen205-hash)