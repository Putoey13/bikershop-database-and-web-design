<html>
<body>

<form action="update.php" method="post">
<?php error_reporting(E_ERROR | E_PARSE);?>
orderNo: <input  name ="orderNo" value = "<?php echo $_GET["input1"];error_reporting(E_ERROR | E_PARSE);?>"><br>
reserveNo: <input  name ="custNo" value = "<?php echo $_GET["input2"];error_reporting(E_ERROR | E_PARSE);?>"><br>
orderconfirm: <input type="text" name="orderConf" value="<?php echo $_GET["input3"];error_reporting(E_ERROR | E_PARSE);?>"><br>
paytype: <input type="text" name="paytype" value="<?php echo $_GET["input4"];error_reporting(E_ERROR | E_PARSE);?>"><br>
<input type="submit">
</form>

</body>
</html>