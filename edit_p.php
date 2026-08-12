<?php
include("db_connect.php");

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<html>
<h2>แก้ไขสินค้า</h2>
<form action="update_p.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    CODE: <input type="text" name="product_code" value="<?php echo $row['product_code']; ?>"><br>
    NAME: <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>"><br>
    PRICE: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
    STOCK: <input type="text" name="stock" value="<?php echo $row['stock']; ?>"><br>
    <input type="submit" value="UPDATE">
</form>
<a href="show_p.php">CANCEL</a>
</html>