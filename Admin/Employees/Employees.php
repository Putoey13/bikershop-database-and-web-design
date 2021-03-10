<html>
<style>
table, th, td {
  border: 1px solid red;
}
</style>
<?php include("connection.php");error_reporting(E_ERROR | E_PARSE);?>
<form action="Reserve.php" method="GET">ค้นหา
 <input type="text" name="textSearch">
<input type="submit">
</form>
<?php
$sql = "SELECT * FROM employees where empNo like '%".$_GET["textSearch"]."%' or empName like '%" .$_GET["textSearch"] ."%' or  empSex like '%" .$_GET["textSearch"] ."%' or empSalary like '%" .$_GET["textSearch"] ."%'"; 
$result = $conn->query($sql);	
if ($result->num_rows > 0){
    // output data of each row
	echo '<table><tr><td>No:</td><td>Name:</td><td>Sex:</td><td> Salary:</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["empNo"].'</td> ' .
		     '<td>'.$row["empName"].'</td>  ' .
			 '<td>'.$row["empSex"].'</td> ' .
			 '<td>'.$row["empSalary"].'</td> ' .
		     '<td><a href=delete.php?input1=' . 
			    $row["empNo"].'> ลบ </a> '.'</td> '.
            '<td><a href = edit_ui.php?input1=' . $row["empNo"].'&input2='. $row["empName"].
			'&input3=' .$row["empSex"]. '&input4=' . $row["empSalary"]. '> แก้ไข </a></td><tr> ' ;
  
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</html>
