<html>
<h2>ฟอร์มเพิ่มสินค้าใหม่ (ระบบฐานข้อมูล)</h2>
<form name="frm-add-product" action="save_product.php" method="POST">
    ชื่อสินค้า: <input type="text" name="p_name"><br><br>
    ราคาสินค้า: <input type="text" name="p_price"><br><br>
    รายละเอียดสินค้า:<br>
    <textarea name="p_detail" rows="4" cols="40"></textarea><br><br>
    
    <input type="submit" name="submit" value="บันทึกข้อมูลสินค้า">
    <input type="reset" name="reset" value="ยกเลิก">
</form>
</html>