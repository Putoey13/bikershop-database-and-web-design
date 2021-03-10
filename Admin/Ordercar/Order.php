<html>
<style>
table, th, td {
  border: 1px solid red;
}
</style>
<?php include("connection.php");error_reporting(E_ERROR | E_PARSE);?>
<form action="Oder.php" method="GET">ค้นหา
 <input type="text" name="textSearch">
<input type="submit">
</form>
<?php
$sql = "SELECT * FROM ordercar where reserveNo like '%".$_GET["textSearch"]."%' or orderNo like '%" .$_GET["textSearch"] ."%' or  orderConf like '%" .$_GET["textSearch"] ."%' or paytype like '%" .$_GET["textSearch"] ."%'"; 
$result = $conn->query($sql);	
if ($result->num_rows > 0){
    // output data of each row
	echo '<table><tr><td>orderNo:</td><td>reserveNo:</td><td>orderConf:</td><td> paytype:</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["orderNo"].'</td> ' .
		     '<td>'.$row["reserveNo"].'</td>  ' .
			 '<td>'.$row["orderConf"].'</td> ' .
			 '<td>'.$row["paytype"].'</td> ' .
		     '<td><a href=delete.php?input1=' . 
			    $row["orderNo"].'> ลบ </a> '.'</td> '.
            '<td><a href = edit_ui.php?input1=' . $row["orderNo"].'&input2='. $row["reserveNo"].
			'&input3=' .$row["orderConf"]. '&input4=' . $row["paytype"]. '> แก้ไข </a></td><tr> ' ;
  
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</html>
