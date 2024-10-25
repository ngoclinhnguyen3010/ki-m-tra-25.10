<?php
// Cấu hình thông tin kết nối
$server = "localhost";
$username = "root";
$password = "";
$database = "db_nguyen_ngoc_linh";

// Tạo kết nối
$conn = new mysqli($server, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Nếu không có lỗi, kết nối thành công
echo "Kết nối thành công!";
?>
