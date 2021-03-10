<?php include("connection.php");?>
<html>
<head>
<div align="center"><br>Biker Shop</div><br>
<title></title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM reserve";
$result = mysqli_query($conn, $strSQL);
?>
<table width="600" border="1" align="center">
  <tr>
  <th width="91"> <div align="center">รหัสการสั่งจอง </div></th>
    <th width="91"> <div align="center">รหัสถัง </div></th>
	<th width="91"> <div align="center">รหัสลูกค้า</div></th>
    <th width="98"> <div align="center">วันเวลานัดรับสินค้า</div></th>
	<th width="98"> <div align="center">ค่ามัดจำ </div></th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["reserveNo"];?></div></td>
		<td><?php echo $row["tankNo"]?></td>
        <td><?php echo $row["custNo"]?></td>
        <td><?php echo $row["datetime"];?></td>
		<td><?php echo $row["earnestmoney"];?></td>
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