<?php
$conn = mysqli_connect("localhost", "root", "root", "shop_db");
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_detail = $_POST['p_detail'];
$sql = "INSERT INTO tbl_products (p_name, p_price, p_detail) 
    VALUES ('$p_name', '$p_price', '$p_detail')";
if (mysqli_query($conn, $sql)) {
    echo "บันทึกข้อมูลสินค้าเรียบร้อยแล้ว!<br>";
    echo "<a href='show_products.php'>ดูรายการสินค้าทั้งหมด</a>";
}
?>