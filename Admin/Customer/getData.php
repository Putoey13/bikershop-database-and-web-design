<?php include("connection.php");?>
<html>
<head>
<div align="center"><br>Biker Shop</div><br>
<title></title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM customer";
$result = mysqli_query($conn, $strSQL);
?>
<table width="600" border="1" align="center">
  <tr>
    <th width="91"> <div align="center">รหัสลูกค้า </div></th>
	<th width="91"> <div align="center">ชื่อ-นามสกุล</div></th>
    <th width="98"> <div align="center">ที่อยู่</div></th>
	<th width="98"> <div align="center">อีเมล</div></th>
	<th width="98"> <div align="center">เบอร์ติดต่อ </div></th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["custNo"];?></div></td>
        <td><?php echo $row["custName"]?></td>
        <td><?php echo $row["custAddr"];?></td>
		<td><?php echo $row["custEmail"];?></td>
		<td><?php echo $row["Phonenumber"];?></td>
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