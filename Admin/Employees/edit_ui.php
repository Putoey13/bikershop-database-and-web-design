<html>
<body>

<form action="update.php" method="post">
<?php error_reporting(E_ERROR | E_PARSE);?><?php error_reporting(E_ERROR | E_PARSE);?>
EmpNo: <input type="text" name ="empNo" value = "<?php echo $_GET["input1"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Name: <input type="text" name="empName" value="<?php echo $_GET["input2"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Sex: <input type="text" name="empSex" value="<?php echo $_GET["input3"];error_reporting(E_ERROR | E_PARSE);?>"><br>
Salary: <input type="text" name="empSalary" value="<?php echo $_GET["input4"];error_reporting(E_ERROR | E_PARSE);?>"><br>
<input type="submit">
</form>

</body>
</html>