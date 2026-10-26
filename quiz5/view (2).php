<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE book_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<html>
<body>
    <h2>Book Detail</h2>
    ID: <?php echo $row['book_id']; ?><br>
    NAME: <?php echo $row['book_name']; ?><br>
    AUTHOR: <?php echo $row['author']; ?><br>
    CATEGORY: <?php echo $row['category']; ?><br>
    PRICE: <?php echo $row['price']; ?><br>
    STOCK: <?php echo $row['stock']; ?><br><br>
    <a href="index.php">BACK TO INDEX</a>
</body>
</html>