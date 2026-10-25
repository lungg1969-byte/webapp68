<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['id']) || $_SESSION['role'] != 'admin') {
    die("คุณไม่มีสิทธิ์เข้าถึงหน้านี้");
}

$rev_res = mysqli_query($conn, "SELECT SUM(fee) as total_revenue FROM transactions");
$rev = mysqli_fetch_assoc($rev_res);

$all_tx = mysqli_query($conn, "SELECT t.*, u.username FROM transactions t JOIN users u ON t.user_id = u.user_id ORDER BY t.tx_date DESC");
?>

<h2>Admin Dashboard - ระบบจัดการและรายงาน</h2>
<p><a href="logout.php">Logout</a></p>

<h3>รายได้รวมจากค่าธรรมเนียมทั้งหมด: <?php echo $rev['total_revenue']; ?> หน่วย</h3>

<h3>รายการ Transaction ทั้งหมดในระบบ</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>ผู้ทำรายการ</th>
        <th>ประเภท</th>
        <th>จำนวนเงิน</th>
        <th>ค่าธรรมเนียม</th>
        <th>ยอดสุทธิ</th>
        <th>วันเวลา</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($all_tx)) { ?>
    <tr>
        <td><?php echo $row['tx_id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['fee']; ?></td>
        <td><?php echo $row['total_amount']; ?></td>
        <td><?php echo $row['tx_date']; ?></td>
    </tr>
    <?php } ?>
</table>