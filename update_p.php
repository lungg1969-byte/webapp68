<?php
include("db_connect.php");

$id = $_POST['id'];
$code = $_POST['product_code'];
$name = $_POST['product_name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "UPDATE products SET product_code='$code', product_name='$name', price='$price', stock='$stock' WHERE id='$id'";
mysqli_query($conn, $sql);

header("location: show_p.php");
?>