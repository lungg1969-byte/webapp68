<?php
include 'connect.php';

$book_name = $_POST['book_name'];
$author = $_POST['author'];
$category = $_POST['category'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "INSERT INTO books (book_name, author, category, price, stock) VALUES ('$book_name', '$author', '$category', '$price', '$stock')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Register Complete";
} else {
    echo "Register Fail";
}
echo "<br><a href='index.php'>BACK TO INDEX</a>";
?>