<?php
include("db_connect.php");

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id='$id'";
mysqli_query($conn, $sql);

header("location: show_p.php");
?>