<html>
<body>

<form action="update.php" method="post">
<?php error_reporting(E_ERROR | E_PARSE);?><?php error_reporting(E_ERROR | E_PARSE);?>
reserveNo: <input type="text" name ="reserveNo" value = "<?php echo $_GET["input1"];error_reporting(E_ERROR | E_PARSE);?>"><br>
tankNo: <input type="text" name ="tankNo" value = "<?php echo $_GET["input2"];error_reporting(E_ERROR | E_PARSE);?>"><br>
custNo: <input type="text" name="custNo" value="<?php echo $_GET["input3"];error_reporting(E_ERROR | E_PARSE);?>"><br>
datetime: <input type="text" name="datetime" value="<?php echo $_GET["input4"];error_reporting(E_ERROR | E_PARSE);?>"><br>
earnestmoney: <input type="text" name="earnestmoney" value="<?php echo $_GET["input5"];error_reporting(E_ERROR | E_PARSE);?>"><br>
<input type="submit">
</form>

</body>
</html>