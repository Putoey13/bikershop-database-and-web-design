<?php include("connection.php");?>
<?php

     echo $_POST["model"];
     echo $_POST["insurance"];
	 echo $_POST["goodsNo"];
	 echo $_POST["priceCar"]; 
    

     $model = $_POST["model"];
     $insurance = $_POST["insurance"];	
     $goodsNo = $_POST["goodsNo"];		 
	 $priceCar = $_POST["priceCar"];	
	$strSQL = "INSERT INTO car (model,insurance,goodsNo,priceCar) VALUES ('".$model. "','" .$insurance."','" .$goodsNo."','" .$priceCar."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "เพิ่มข้อมูลเรียบร้อย";
		 header('location:Car.php');  
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>