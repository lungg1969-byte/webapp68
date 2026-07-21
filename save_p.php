<?php
include("db_connect.php");

$code = $_POST['product_code'];
$name = $_POST['product_name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// แก้ไขบรรทัด $sql นี้ครับ
$sql = "INSERT INTO products (product_code, product_name, price, stock) 
        VALUES ('$code', '$name', '$price', '$stock')";

mysqli_query($conn, $sql);

header("location: show_p.php");
?>