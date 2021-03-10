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
$sql = "SELECT * FROM reserve where reserveNo like '%".$_GET["textSearch"]."%' or custNo like '%" .$_GET["textSearch"] ."%'or tankNo like '%" .$_GET["textSearch"] ."%' or  earnestmoney like '%" .$_GET["textSearch"] ."%' or datetime like '%" .$_GET["textSearch"] ."%'"; 
$result = $conn->query($sql);	
if ($result->num_rows > 0){
    // output data of each row
	echo '<table><tr><td>reserveNo:</td><td>tankNo:</td><td>custNo:</td><td>datetime:</td><td> earnestmoney:</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["reserveNo"].'</td> ' .
	         '<td>'.$row["tankNo"].'</td>  ' .
		     '<td>'.$row["custNo"].'</td>  ' .
			 '<td>'.$row["datetime"].'</td> ' .
			 '<td>'.$row["earnestmoney"].'</td> ' .
		     '<td><a href=delete.php?input1=' . 
			  $row["reserveNo"].'> ลบ </a> '.'</td> '.
            '<td><a href = edit_ui.php?input1=' . $row["reserveNo"].'&input2='. $row["tankNo"].
			'&input3=' .$row["custNo"]. '&input4=' .$row["datetime"]. '&input5=' . $row["earnestmoney"]. '> แก้ไข </a></td><tr> ' ;
  
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</html>
