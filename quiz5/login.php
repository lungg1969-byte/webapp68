<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login System</h2>
    <?php if (isset($_GET['error'])) echo "<p style='color:red;'>กรุณาเข้าสู่ระบบก่อนใช้งาน!</p>"; ?>
    <form method="POST" action="login_result.php">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>