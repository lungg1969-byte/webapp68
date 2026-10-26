<h2>ฟอร์มเพิ่มสินค้าใหม่ (ระบบฐานข้อมูล)</h2>
<form name="frm-add-product" action="save_p.php" method="POST">
ชื่อสินค้า: <input type="text" name="p_name"><br><br>
ราคาสินค้า: <input type="text" name="p_price"><br><br>
รายละเอียดสินค้า<textarea name="p_detail" rows="4" cols="40"></textarea><br><br>
<input type="submit" name="submit" value="บันทึกข้อมูลสินค้า">
<input type="reset" name="reset" value="ยกเลิก">
<form name="frm-product" action="save_p.php" method="POST">
CODE: <input type="text" name="product_code"><br>
NAME: <input type="text" name="product_name"><br>
PRICE: <input type="text" name="price"><br>
STOCK: <input type="text" name="stock"><br>
<input type="submit" name="submit" value="OK">
<input type="reset" name="reset" value="Cancel">
</form>
<a href="show_p.php">SHOW PRODUCT</a>
</html>