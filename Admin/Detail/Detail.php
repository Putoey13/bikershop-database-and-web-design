<html>
<style>
table, th, td {
  border: 1px solid red;
}
</style>
<?php include("connection.php");error_reporting(E_ERROR | E_PARSE);?>
<form action="Detail.php" method="GET">ค้นหา
 <input type="text" name="textSearch">
<input type="submit">
</form>
<?php
$sql = "SELECT * FROM detail where tankNo like '%".$_GET["textSearch"]."%' or model like '%" .$_GET["textSearch"] ."%' or  carCC like '%" .$_GET["textSearch"] ."%' or carColor like '%" .$_GET["textSearch"] ."%' or typeGear like '%" .$_GET["textSearch"] ."%'"; 
$result = $conn->query($sql);	
if ($result->num_rows > 0){
    // output data of each row
	echo '<table><tr><td>tankNo:</td><td>model:</td><td>carCC:</td><td> carColor:</td><td> typeGear:</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["tankNo"].'</td> ' .
		     '<td>'.$row["model"].'</td>' .
			 '<td>'.$row["carCC"].'</td>' .
			 '<td>'.$row["carColor"].'</td> ' .
			 '<td>'.$row["typeGear"].'</td> ' .
		     '<td><a href=delete.php?input1=' . 
			    $row["tankNo"].'> ลบ </a> '.'</td> '.
            '<td><a href = edit_ui.php?input1='.$row["tankNo"].'&input2='.$row["model"].
			'&input3='.$row["carCC"].'&input4='.$row["carColor"].'&input5='.$row["typeGear"].'>แก้ไข </a></td><tr> ' ;
  
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</html>
