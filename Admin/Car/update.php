<?php include("connection.php");?>
<?php
    $goodsNo = $_POST["goodsNo"];
	$insurance = $_POST["insurance"];
	$priceCar = $_POST["priceCar"];
	
	
	$strSQL = "UPDATE car SET  
	goodsNo = '".$goodsNo."',
	insurance = '".$insurance."',
	priceCar = '".$priceCar."'
	WHERE goodsNo  = '".$goodsNo ."'" ;

	if ($conn->query($strSQL) === TRUE) {
     header('location:Car.php');  
} 
    else {
    echo "Error updating record: " . $conn->error;
}

?>
