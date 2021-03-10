<?php include("connection.php");?>
<html>
<head>
<div align="center"><br>Biker Shop</div><br>
<title></title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM detail";
$result = mysqli_query($conn, $strSQL);
?>
<table width="600" border="1" align="center">
  <tr>
    <th width="91"> <div align="center">รหัสถัง</div></th>
	<th width="91"> <div align="center">ชื่อรุ่น</div></th>
    <th width="98"> <div align="center">เเรง CC</div></th>
	<th width="98"> <div align="center">สี</div></th>
	<th width="98"> <div align="center">เกียร์</div></th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["tankNo"];?></div></td>
        <td><?php echo $row["model"]?></td>
        <td><?php echo $row["carCC"];?></td>
		<td><?php echo $row["carColor"];?></td>
		<td><?php echo $row["typeGear"];?></td>
    </tr>
<?php
         }
   } 
   else 
   {
    echo "0 results";
   }
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>