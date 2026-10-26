<?php
$conn = mysqli_connect("localhost", "root", "", "db_store_quiz2");
include("db_connect.php");

if (!$conn) {
    die("เชื่อมต่อระบบล้มเหลว: " . mysqli_connect_error());
}
$code = $_POST['product_code'];
$name = $_POST['product_name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS shop_db");
// แก้ไขบรรทัด $sql นี้ครับ
$sql = "INSERT INTO products (product_code, product_name, price, stock) 
        VALUES ('$code', '$name', '$price', '$stock')";

mysqli_select_db($conn, "shop_db");
mysqli_query($conn, $sql);

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
header("location: show_p.php");
?>