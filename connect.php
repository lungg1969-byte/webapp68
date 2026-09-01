<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>