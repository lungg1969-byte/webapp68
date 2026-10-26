<?php
include 'connect.php';
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>
<html>
<body>
    <h2>Book List</h2>
    <a href="form.php">Add New Book</a><br><br>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row['book_id']; ?></td>
            <td><a href="view.php?id=<?php echo $row['book_id']; ?>"><?php echo $row['book_name']; ?></a></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td>
                <a href="view.php?id=<?php echo $row['book_id']; ?>">Detail</a> | 
                <a href="edit_book.php?id=<?php echo $row['book_id']; ?>">Edit</a> | 
                <a href="delete_book.php?id=<?php echo $row['book_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>