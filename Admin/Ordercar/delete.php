<?php include("connection.php");?>
<?php
error_reporting(E_ERROR | E_PARSE);
    $orderNo =$_GET["input1"]; 
	$strSQL = "DELETE FROM ordercar ";
	$strSQL .=" WHERE orderNo = '".$orderNo. "'";
	if (mysqli_query($conn, $strSQL)) {
         echo "ลบเรียบร้อย";
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

	?>
	<a href="Order.php">กลับไปหน้าก่อนหน้านี้</a>
