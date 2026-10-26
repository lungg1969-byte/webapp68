<?php
$conn = mysqli_connect("localhost", "root", "", "db_store_quiz2");

$result = mysqli_query($conn, "SELECT * FROM tb_products");
include("db_connect.php");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
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
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["p_id"] . "</td>";
        echo "<td>" . $row["p_name"] . "</td>";
        echo "<td>" . $row["p_price"] . " บาท</td>";
        echo "<td>" . $row["p_detail"] . "</td>";
        echo "</tr>";
    }
    ?>
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
<a href="add_product.php">เพิ่มสินค้าใหม่</a>
<a href="add_product.php">ADD PRODUCT</a>
</html>