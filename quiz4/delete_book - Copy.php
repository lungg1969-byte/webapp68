<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE book_id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    echo "DELETE COMPLETE";
} else {
    echo "DELETE FAIL";
}
echo "<br><a href='index.php'>BACK TO INDEX</a>";
?>