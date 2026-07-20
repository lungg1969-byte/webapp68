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
</table>
<br>
<a href="add_product.php">เพิ่มสินค้าใหม่</a>
</html>

