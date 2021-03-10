<?php include("connection.php");?>
<?php
     echo $_POST["reserveNo"];
	 echo $_POST["orderConf"];
	 echo $_POST["paytype"]; 
    

     $reserveNo = $_POST["reserveNo"];	
     $orderConf = $_POST["orderConf"];		 
	 $paytype = $_POST["paytype"];	
	$strSQL = "INSERT INTO ordercar (reserveNo,orderConf,paytype) VALUES ('" .$reserveNo."','" .$orderConf."','" .$paytype."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "เพิ่มข้อมูลเรียบร้อย";
		 header('location:Order.php');  
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>