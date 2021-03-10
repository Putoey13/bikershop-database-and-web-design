<html>
<body>

<form action="update.php" method="post">
<?php error_reporting(E_ERROR | E_PARSE);?><?php error_reporting(E_ERROR | E_PARSE);?>
CC: <input type="text" name="carCC" value="<?php echo $_GET["input3"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Color: <input type="text" name="carColor" value="<?php echo $_GET["input4"];error_reporting(E_ERROR | E_PARSE);?>"><br>
typeGear: <input type="text" name="typeGear" value="<?php echo $_GET["input5"];error_reporting(E_ERROR | E_PARSE);?>"><br>
<input type="submit">
</form>

</body>
</html>