## Setup

 1. Tạo mới file **.env**, copy nội dung **.env.example** sang và thay đổi giá trị ``DB_DATABASE`` thành database của mình
 2. Chạy ``composer install`` để cài đặt các package **composer**
 3. Chạy ``php artisan key:generate`` để sinh key cho ứng dụng
 4. Chạy ``php artisan migrate`` để tạo các bảng trong database
 5. Chạy ``php artisan db:seed`` để sinh dữ liệu cho database
 6. Chạy ``php artisan passport:install --force`` để tạo key cho **passport**
 7. Chạy ``php artisan l5-swagger:generate`` để tạo api document

## Update
 1. Checkout branch ``develop`` và pull code mới nhất về
 2. Chạy ``composer dump-autoload`` để autoload các class mới
 3. Chạy ``php artisan migrate:refresh --seed`` để refresh lại database
 4. Chạy ``php artisan passport:install --force`` để tạo key cho **passport**

 ## Update Seader
 1. composer dump-autoload
 2. php artisan db:seed --class=UserSeeder

## Run

Chạy ``php artisan serve`` để khởi động serve

