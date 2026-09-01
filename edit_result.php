<?php
include 'connect.php';
$id = $_GET['id'];
$book_name = $_POST['book_name'];
$author = $_POST['author'];
$category = $_POST['category'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "UPDATE books SET book_name='$book_name', author='$author', category='$category', price='$price', stock='$stock' WHERE book_id='$id'";
$result = mysqli_query($conn, $sql);

if($result){
    echo "EDIT COMPLETE";
} else {
    echo "EDIT FAIL";
}
echo "<br><a href='index.php'>BACK TO INDEX</a>";
?>