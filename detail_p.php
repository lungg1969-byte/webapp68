<?php
include("db_connect.php");

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<html>
<h2>รายละเอียดสินค้า</h2>
ID: <?php echo $row['id']; ?><br>
CODE: <?php echo $row['product_code']; ?><br>
NAME: <?php echo $row['product_name']; ?><br>
PRICE: <?php echo $row['price']; ?><br>
STOCK: <?php echo $row['stock']; ?><br><br>

<a href="show_p.php">BACK</a>
</html>