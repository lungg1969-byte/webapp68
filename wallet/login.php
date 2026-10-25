<?php
session_start();
include 'connect.php';

if(isset($_POST['login'])) {
    $u = $_POST['u'];
    $p = $_POST['p'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");

    if(mysqli_num_rows($res) == 1) {
        $r = mysqli_fetch_assoc($res);
        $_SESSION['id'] = $r['user_id'];
        $_SESSION['name'] = $r['username'];
        $_SESSION['role'] = $r['role'];

        if($r['role'] == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: index.php");
        }
    } else {
        echo "Login ไม่สำเร็จ";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="u"><br>
    Password: <input type="password" name="p"><br>
    <button type="submit" name="login">Login</button>
</form>