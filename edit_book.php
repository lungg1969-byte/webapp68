<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE book_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<html>
<body>
    <h2>Edit Book Form</h2>
    <form name="form_edit" method="POST" action="edit_result.php?id=<?php echo $row['book_id']; ?>">
        BOOK NAME: <input type="text" name="book_name" value="<?php echo $row['book_name']; ?>"><br>
        AUTHOR: <input type="text" name="author" value="<?php echo $row['author']; ?>"><br>
        CATEGORY: <input type="text" name="category" value="<?php echo $row['category']; ?>"><br>
        PRICE: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
        STOCK: <input type="text" name="stock" value="<?php echo $row['stock']; ?>"><br><br>
        <input type="submit" name="submit" value="UPDATE">
    </form>
</body>
</html>