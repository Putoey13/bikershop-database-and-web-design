<html>
<body>

<form action="update.php" method="post">
<?php error_reporting(E_ERROR | E_PARSE);?>
No:<input type="text" name ="custNo" value = "<?php echo $_GET["input1"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Name:<input type="text" name="custName" value="<?php echo $_GET["input2"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Addr:<input type="text" name="custAddr" value="<?php echo $_GET["input3"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Email:<input type="text" name="custEmail" value="<?php echo $_GET["input4"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Phonenumber:<input type="text" name="Phonenumber" value="<?php echo $_GET["input5"];error_reporting(E_ERROR | E_PARSE);?>"><br>
<input type="submit">
</form>

</body>
</html>