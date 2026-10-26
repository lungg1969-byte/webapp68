<html>
<form name="frm-product" action="product_result.php" method="POST">
<input type="text" name="product_name"><br>
<input type="text" name="product_price"><br>
<textarea name="product_detail"></textarea><br>
<input type="radio" name="product_type" value="อาหาร"> อาหาร
<input type="radio" name="product_type" value="เครื่องดื่ม"> เครื่องดื่ม
<input type="radio" name="product_type" value="ขนม"> ขนม
<input type="radio" name="product_type" value="ของใช้"> ของใช้<br>
<input type="checkbox" name="sale_type1" value="ขายปลีก"> ขายปลีก
<input type="checkbox" name="sale_type2" value="ขายส่ง"> ขายส่ง<br>
<input type="radio" name="staff_name" value="ติวเตอร์"> ติวเตอร์
<input type="radio" name="staff_name" value="เชอ"> เชอ
<input type="radio" name="staff_name" value="ไก่"> ไก่<br>
<?php
        date_default_timezone_set("Asia/Bangkok");
        $current_date = date("Y-m-d H:i:s");
    ?>
    
<input type="hidden" name="date_added" value="<?php echo $current_date; ?>">
<input type="submit" name="submit" value="OK">
<input type="reset" name="reset" value="Cancel">
</form>
</html>