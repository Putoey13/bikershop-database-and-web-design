<?php include("connection.php");?>
<html>
<head>
<div align="center"><br>Biker Shop</div><br>
<title></title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM employees";
$result = mysqli_query($conn, $strSQL);
?>
<table width="600" border="1" align="center">
  <tr>
    <th width="91"> <div align="center">รหัสพนักงาน</div></th>
	<th width="91"> <div align="center">ชื่อพนักงาน</div></th>
    <th width="98"> <div align="center">เพศ</div></th>
	<th width="98"> <div align="center">เงินเดือน </div></th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["empNo"];?></div></td>
        <td><?php echo $row["empName"]?></td>
        <td><?php echo $row["empSex"];?></td>
		<td><?php echo $row["empSalary"];?></td>
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