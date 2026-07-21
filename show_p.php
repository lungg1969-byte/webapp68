<?php
include("db_connect.php");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>
<html>
<table border="1">
<tr>
    <th>ID</th>
    <th>CODE</th>
    <th>NAME</th>
    <th>PRICE</th>
    <th>STOCK</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['product_code'] . "</td>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
    echo "</tr>";
}
?>
</table>
<br>
<a href="add_product.php">ADD PRODUCT</a>
</html>

