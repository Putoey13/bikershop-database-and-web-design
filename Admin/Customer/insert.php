<?php include("connection.php");?>
<?php

     echo $_POST["custName"];
     echo $_POST["custAddr"];
	 echo $_POST["custEmail"]; 
     echo $_POST["Phonenumber"];

     $custName = $_POST["custName"];
     $custAddr = $_POST["custAddr"];	 
	 $custEmail = $_POST["custEmail"];	
     $Phonenumber = $_POST["Phonenumber"];	
	$strSQL = "INSERT INTO customer (custName,custAddr,custEmail,Phonenumber) VALUES ('".$custName. "','" .$custAddr."','" .$custEmail."','" .$Phonenumber."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "เพิ่มข้อมูลเรียบร้อย";
		  header('location:Customer.php');  
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>