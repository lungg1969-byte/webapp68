<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$uid = $_SESSION['id'];

if(isset($_POST['deposit'])) {
    $amount = $_POST['amount'];

    if($amount > 5000) {
        echo "<script>alert('ฝากเงินได้สูงสุดไม่เกิน 5,000 หน่วยต่อครั้ง');</script>";
    } else {
        $fee = 0;
        if($amount < 100) {
            $fee = 5;
        } elseif($amount <= 500) {
            $fee = $amount * 0.05;
        } elseif($amount <= 1000) {
            $fee = $amount * 0.04;
        } else {
            $fee = $amount * 0.03;
        }

        $total_pay = $amount + $fee;

        mysqli_query($conn, "UPDATE users SET balance = balance + $amount WHERE user_id = $uid");
        
        mysqli_query($conn, "INSERT INTO transactions(user_id, type, amount, fee, total_amount, tx_date) 
                             VALUES($uid, 'ฝากเงิน', $amount, $fee, $total_pay, NOW())");
        header("Location: index.php");
    }
}

if(isset($_POST['transfer'])) {
    $receiver_id = $_POST['receiver_id'];
    $amount = $_POST['amount'];
    $fee = $amount * 0.01;
    $total_deduct = $amount + $fee;

    mysqli_query($conn, "UPDATE users SET balance = balance - $total_deduct WHERE user_id = $uid");
    mysqli_query($conn, "UPDATE users SET balance = balance + $amount WHERE user_id = $receiver_id");

    mysqli_query($conn, "INSERT INTO transactions(user_id, receiver_id, type, amount, fee, total_amount, tx_date) 
                         VALUES($uid, $receiver_id, 'โอนเงิน', $amount, $fee, $total_deduct, NOW())");
    header("Location: index.php");
}

$u_res = mysqli_query($conn, "SELECT * FROM users WHERE user_id = $uid");
$user = mysqli_fetch_assoc($u_res);
?>

<h2>ยินดีต้อนรับ: <?php echo $_SESSION['name']; ?> | <a href="logout.php">Logout</a></h2>
<h3>ยอดเงินคงเหลือใน E-Wallet: <?php echo $user['balance']; ?> หน่วย</h3>

<hr>

<form method="POST">
    <h3>ฝากเงินเข้า E-Wallet</h3>
    จำนวนเงินที่ต้องการฝาก: <input type="number" name="amount" required>
    <button type="submit" name="deposit">ยืนยันฝากเงิน</button>
</form>

<hr>

<form method="POST">
    <h3>ส่งเงินให้สมาชิกอื่น</h3>
    รหัสสมาชิกผู้รับ (ID): <input type="number" name="receiver_id" required><br>
    จำนวนเงินที่ต้องการส่ง: <input type="number" name="amount" required>
    <button type="submit" name="transfer">ยืนยันโอนเงิน</button>
</form>

<hr>

<h3>ประวัติการทำรายการของคุณ</h3>
<table border="1">
    <tr>
        <th>ประเภท</th>
        <th>จำนวนเงิน</th>
        <th>ค่าธรรมเนียม</th>
        <th>ยอดสุทธิรวม</th>
        <th>วันเวลา</th>
    </tr>
    <?php
    $tx = mysqli_query($conn, "SELECT * FROM transactions WHERE user_id = $uid OR receiver_id = $uid ORDER BY tx_date DESC");
    while($row = mysqli_fetch_assoc($tx)) {
    ?>
    <tr>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['fee']; ?></td>
        <td><?php echo $row['total_amount']; ?></td>
        <td><?php echo $row['tx_date']; ?></td>
    </tr>
    <?php } ?>
</table>