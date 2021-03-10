<?php include("connection.php");?>
<?php

     echo $_POST["tankNo"];
     echo $_POST["custNo"];
	 echo $_POST["datetime"];
	 echo $_POST["earnestmoney"]; 
    

     $tankNo = $_POST["tankNo"];
     $custNo = $_POST["custNo"];	
     $datetime = $_POST["datetime"];		 
	 $earnestmoney = $_POST["earnestmoney"];	
	$strSQL = "INSERT INTO reserve (tankNo,custNo,datetime,earnestmoney) VALUES ('".$tankNo. "','" .$custNo."','" .$datetime."','" .$earnestmoney."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "เพิ่มข้อมูลเรียบร้อย";
		 header('location:Reserve.php');  
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>