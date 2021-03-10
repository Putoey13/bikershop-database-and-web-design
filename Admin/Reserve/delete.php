<?php include("connection.php");?>
<?php
    $reserveNo =$_GET["input1"]; 
	$strSQL = "DELETE FROM reserve ";
	$strSQL .=" WHERE reserveNo = '".$reserveNo . "'";
	if (mysqli_query($conn, $strSQL)) {
         echo "ลบเรียบร้อย";
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	?>
	<a href="Reserve.php">กลับไปหน้าก่อนหน้านี้</a>
