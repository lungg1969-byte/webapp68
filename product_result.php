<?php
$name = $_POST['product_name'];
$price = $_POST['product_price'];
$detail = $_POST['product_detail'];
$type = $_POST['product_type'];
$sale_type1 = $_POST['sale_type1'] ? $_POST['sale_type1'] : '';
$sale_type2 = $_POST['sale_type2'] ? $_POST['sale_type2'] : '';
$staff_name = $_POST['staff_name'];
$date_added = $_POST['date_added'];
echo "PRODUCT NAME: ".$name."<br>";
echo "PRICE: ".$price." บาท<br>";
echo "DETAIL: ".$detail."<br>";
echo "TYPE: ".$type."<br>";
echo "SALE TYPE: ".$sale1." ".$sale2."<br>";
echo "STAFF: ".$staff."<br>";
echo "DATE ADDED: ".$date."<br>";
?>