<html>
<body>

<form action="update.php" method="post">
<?php error_reporting(E_ERROR | E_PARSE);?><?php error_reporting(E_ERROR | E_PARSE);?>
goodsNo: <input  name="goodsNo" value="<?php echo $_GET["input3"];error_reporting(E_ERROR | E_PARSE);?>"><br>
insurance: <input type="text" name="insurance" value="<?php echo $_GET["input2"];error_reporting(E_ERROR | E_PARSE);?>"><br>
priceCar: <input type="text" name="priceCar" value="<?php echo $_GET["input4"];error_reporting(E_ERROR | E_PARSE);?>"><br>
<input type="submit">
</form>

</body>
</html>