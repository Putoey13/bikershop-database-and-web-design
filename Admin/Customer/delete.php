<?php include("connection.php");?>
<?php
    $custNo =$_GET["input1"]; 
	$strSQL = "DELETE FROM customer ";
	$strSQL .=" WHERE custNo = '".$custNo . "'";
	if (mysqli_query($conn, $strSQL)) {
         echo "ลบเรียบร้อย";
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	?>
	<a href="Customer.php">กลับไปหน้าก่อนหน้านี้</a>
