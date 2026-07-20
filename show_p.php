<?php
$conn = mysqli_connect("localhost", "root", "", "shop_db");

$result = mysqli_query($conn, "SELECT * FROM tbl_products");
?>

<html>
<h2>รายการสินค้าทั้งหมด</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>รหัส</th>
        <th>ชื่อสินค้า</th>
        <th>ราคา</th>
        <th>รายละเอียด</th>
    </tr>

