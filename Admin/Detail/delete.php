<?php include("connection.php");?>
<?php
    $tankNo =$_GET["input1"]; 
	$strSQL = "DELETE FROM detail ";
	$strSQL .=" WHERE tankNo = '".$tankNo . "'";
	if (mysqli_query($conn, $strSQL)) {
         echo "ลบเรียบร้อย";
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	?>
	<a href="Detail.php">กลับไปหน้าก่อนหน้านี้</a>
