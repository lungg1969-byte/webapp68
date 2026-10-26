<?php
session_start();
include 'connect.php';
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>
<html>
<body>
    <h2>Book List</h2>
    <div>
        <?php if (isset($_SESSION['user_id'])): ?>
            สวัสดี, <b><?php echo $_SESSION['fullname']; ?></b> | <a href="logout.php">Logout</a><br><br>
            <a href="form.php">Add New Book</a><br><br>
        <?php else: ?>
            <a href="login.php">Login เข้าสู่ระบบ (เพื่อจัดการข้อมูล)</a><br><br>
        <?php endif; ?>
    </div>

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
                <a href="view.php?id=<?php echo $row['book_id']; ?>">Detail</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    | <a href="edit_book.php?id=<?php echo $row['book_id']; ?>">Edit</a> 
                    | <a href="delete_book.php?id=<?php echo $row['book_id']; ?>" onclick="return confirm('Confirm Delete?')">Delete</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>