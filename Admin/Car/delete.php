<?php include("connection.php");?>
<?php
error_reporting(E_ERROR | E_PARSE);
    $goodsNo =$_GET["input1"]; 
	$strSQL = "DELETE FROM car ";
	$strSQL .=" WHERE  goodsNo = '".$goodsNo . "'";
	if (mysqli_query($conn, $strSQL)) {
         echo "ลบเรียบร้อย";
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	?>
	<a href="Car.php">กลับไปหน้าก่อนหน้านี้</a>
