<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("เชื่อมต่อระบบล้มเหลว: " . mysqli_connect_error());
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS shop_db");

mysqli_select_db($conn, "shop_db");

$table_sql = "CREATE TABLE IF NOT EXISTS tbl_products (
    p_id INT AUTO_INCREMENT PRIMARY KEY,
    p_name VARCHAR(255) NOT NULL,
    p_price INT NOT NULL,
    p_detail TEXT
)";
mysqli_query($conn, $table_sql);

$p_name = $_POST['p_name'] ?? '';
$p_price = $_POST['p_price'] ?? 0;
$p_detail = $_POST['p_detail'] ?? '';

$sql = "INSERT INTO tbl_products (p_name, p_price, p_detail) 
        VALUES ('$p_name', '$p_price', '$p_detail')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>ระบบสร้างฐานข้อมูลและบันทึกสินค้าเรียบร้อยแล้ว!</h3>";
    echo "<a href='show_products.php'>ดูรายการสินค้าทั้งหมดในตาราง</a>";
} else {
    echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
}

mysqli_close($conn);
?>