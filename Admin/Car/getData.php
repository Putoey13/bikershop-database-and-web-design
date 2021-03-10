<?php include("connection.php");?>
<html>
<head>
<div align="center"><br>Biker Shop</div><br>
<title></title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM  car";
$result = mysqli_query($conn, $strSQL);
?>
<table width="600" border="1" align="center">
  <tr>
    <th width="91"> <div align="center">ชื่อรุ่น</div></th>
	<th width="91"> <div align="center">ประกัน</div></th>
    <th width="98"> <div align="center">เลขรุ่น</div></th>
	<th width="98"> <div align="center">ราคารถ</div></th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["model"];?></div></td>
        <td><?php echo $row["insurance"]?></td>
        <td><?php echo $row["goodsNo"];?></td>
		<td><?php echo $row["priceCar"];?></td>
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