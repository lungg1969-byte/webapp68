<?php
$conn = mysqli_connect("localhost", "root", "", "wallet_db");
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>