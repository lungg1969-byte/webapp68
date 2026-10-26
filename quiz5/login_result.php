<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['fullname'] = $row['fullname'];
        header("Location: index.php");
        exit();
    }
}

echo "Username หรือ Password ไม่ถูกต้อง! <br><a href='login.php'>ลองอีกครั้ง</a>";
?>