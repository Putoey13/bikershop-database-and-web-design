<?php include("connection.php");?>
<?php

     echo $_POST["tankNo"];
     echo $_POST["model"];
	 echo $_POST["carCC"];
	 echo $_POST["carColor"];
	 echo $_POST["typeGear"]; 
    

     $tankNo = $_POST["tankNo"];
     $model = $_POST["model"];	
	 $carCC = $_POST["carCC"];	
     $carColor = $_POST["carColor"];		 
	 $typeGear = $_POST["typeGear"];	
	$strSQL = "INSERT INTO detail (tankNo,model,carCC,carColor,typeGear) VALUES ('".$tankNo. "','" .$model."','" .$carCC."','" .$carColor."','" .$typeGear."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "เพิ่มข้อมูลเรียบร้อย";
		 header('location:Detail.php');  
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>