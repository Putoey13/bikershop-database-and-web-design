<?php include("connection.php");?>
<html>
<head>
<div align="center"><br>Biker Shop</div><br>
<title></title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM ordercar";
$result = mysqli_query($conn, $strSQL);
?>
<table width="600" border="1" align="center">
  <tr>
    <th width="91"> <div align="center">รหัสใบเสร็จ</div></th>
    <th width="91"> <div align="center">รหัสการสั่งจอง</div></th>
	<th width="91"> <div align="center">การยืนยัน</div></th>
    <th width="98"> <div align="center">ประเภทการชำระเงิน</div></th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["orderNo"];?></div></td>
		<td><?php echo $row["reserveNo"];?></td>
        <td><?php echo $row["orderConf"];?></td>
		<td><?php echo $row["paytype"];?></td>
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