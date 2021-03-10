<html>
<style>
table, th, td {
  border: 1px solid red;
}
</style>
<?php include("connection.php");error_reporting(E_ERROR | E_PARSE);?>
<form action="Car.php" method="GET">ค้นหา
 <input type="text" name="textSearch">
<input type="submit">
</form>
<?php
$sql = "SELECT * FROM Car where model like '%".$_GET["textSearch"]."%' or insurance like '%" .$_GET["textSearch"] ."%' or  goodsNo like '%" .$_GET["textSearch"] ."%' or priceCar like '%" .$_GET["textSearch"] ."%'"; 
$result = $conn->query($sql);	
if ($result->num_rows > 0){
    // output data of each row
	echo '<table><tr><td>No:</td><td>Name:</td><td>Sex:</td><td> Salary:</td><tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["model"].'</td> ' .
		     '<td>'.$row["goodsNo"].'</td> ' .
		     '<td>'.$row["insurance"].'</td>  ' .
			 '<td>'.$row["priceCar"].'</td> ' .
		     '<td><a href=delete.php?input1=' . 
			    $row["goodsNo"].'> ลบ </a> '.'</td> '.
            '<td><a href = edit_ui.php?input2='. $row["insurance"].
			'&input3=' .$row["goodsNo"]. '&input4=' . $row["priceCar"]. '> แก้ไข </a></td><tr> ' ;
  
    }
	echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
</html>
