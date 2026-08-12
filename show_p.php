<?php
include("db_connect.php");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<html>
<h2>รายการสินค้า</h2>
<a href="add_product.php">ADD PRODUCT</a><br><br>

<table border="1">
<tr>
    <th>ID</th>
    <th>CODE</th>
    <th>NAME</th>
    <th>PRICE</th>
    <th>STOCK</th>
    <th>ACTION</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['product_code'] . "</td>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
    echo "<td>
            <a href='detail_p.php?id=" . $row['id'] . "'>Detail</a> | 
            <a href='edit_p.php?id=" . $row['id'] . "'>Edit</a> | 
            <a href='delete_p.php?id=" . $row['id'] . "'>Delete</a>
          </td>";
    echo "</tr>";
}
?>
</table>
</html>