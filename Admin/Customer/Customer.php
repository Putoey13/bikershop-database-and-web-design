<html>
<style>
table, th, td {
  border: 1px solid red;
}
</style>
<?php include("connection.php");?>
<form action="Customer.php" method="GET">ค้นหาด้วย
 <input type="text" name="textSearch">
<input type="submit">
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
$sql = "SELECT * FROM customer where custEmail like '%".$_GET["textSearch"]."%' or Phonenumber like '%" .$_GET["textSearch"] ."%' or  custName like '%" .$_GET["textSearch"] ."%' or custAddr like '%" .$_GET["textSearch"] ."%'"; 
$result = $conn->query($sql);	
if ($result->num_rows > 0) {
    // output data of each row
	echo '<table><tr><td>custNo:</td><td>Name:</td><td>CustAddress:</td><td>CustEmail:</td><td>Phonenumber:</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["custNo"].'</td> ' .
		     '<td>'.$row["custName"].'</td>  ' .
			 '<td>'.$row["custAddr"].'</td> ' .
			 '<td>'.$row["custEmail"].'</td> ' .
			 '<td>'.$row["Phonenumber"].'</td> ' .
		     '<td><a href=delete.php?input1=' . 
			    $row["custNo"].'> ลบ </a> '.'</td> '.
            '<td><a href = edit_ui.php?input1=' . $row["custNo"].'&input2='. $row["custName"].
			'&input3=' . $row["custAddr"]. '&input4=' . $row["custEmail"]. '&input5=' . $row["Phonenumber"]. '> แก้ไข </a></td><tr> ' ;	
  
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</html>
