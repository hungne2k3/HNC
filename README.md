# HNC-Activities-Teaching

**Mô tả dự án**<br>
Dự án này tập trung vào việc phát triển một hệ thống hỗ trợ giảng dạy cho giáo viên sử dụng Laravel và MySQL. Mục tiêu của dự án là cung cấp một nền tảng linh hoạt và mạnh mẽ để quản lý thông tin về giáo viên và các hoạt động giảng dạy của giáo viên.

**Cài đặt**<br>
Yêu cầu hệ thống:<br>
PHP 8.1 trở lên<br>
Composer<br>
MySQL

**Bước cài đặt**

1. Clone repository từ GitHub:

```
git clone https://github.com/HuyPhamXuann/HNC.git
```

2. Di chuyển vào thư mục dự án:

```
cd HNC
```

3. Cài đặt các dependencies thông qua Composer:

```
composer install
composer update
```

4. Sao chép file .env.example thành .env:

```
copy .env.example .env
```

5. Cấu hình file .env với thông tin cần thiết:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. Chạy migrations để tạo cấu trúc cơ sở dữ liệu:

```
php artisan migrate
```

7.cài đặt khóa key app

```
php artisan key:generate
```

8. Khởi động máy chủ phát triển:

```
php artisan serve
```

9. Set up Tymon/jwt-auth:

- Cài đặt
   ```
   composer require tymon/jwt-auth
   ```

- Publish the config:
   
   ```
   php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
   ```

- Khởi tạo Mã số bí mật (JWT_SECRET):

   ```
   php artisan jwt:secret
   ```

- Update version mới nhất
  
  ```
  composer require tymon/jwt-auth
  ```

Truy cập ứng dụng thông qua trình duyệt web tại địa chỉ sau: **http://localhost:8000**

**Quy chuẩn**<br>

1. Quy tắc đặt tên branch:<br>
   Đối với feature: `feature/user/feature-name`<br>
   Đối với fix bug: `bugfix/user/bug-name`<br>
   Đối với việc release: `release-version-x.x`<br>
   Lưu ý:<br>
   Tên feature hoặc bug viết thường không dấu, sử dụng dấu - thay thế cho dấu cách.<br>
   ví dụ: `feature/cdev/dang-ky-tuyen-sinh`<br>
   Đối với commits và comments thì ở đây không phải ai cũng thành thạo tiếng anh vậy nên thống nhất là ghi tiếng việt để người khác có thể đọc và hiểu

**Tác giả**<br>
Dự án được phát triển bởi team sinh viên khoa CNTT HPC. <br>
**CONTACT FOR ME: phamxuanhuyforwork@gmail.com.**
