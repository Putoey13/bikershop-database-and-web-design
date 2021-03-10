<?php include("connection.php");?>
<?php
    $tankNo = $_POST["tankNo"];
	$carCC = $_POST["carCC"];
	$carColor = $_POST["carColor"];
	$typeGear = $_POST["typeGear"];
	
	$strSQL = "UPDATE detail SET  
	carCC = '".$carCC."',
	carColor = '".$carColor."',
	typeGear = '".$typeGear."'
	WHERE tankNo = '".$tankNo."'" ;

	if ($conn->query($strSQL) === TRUE) {
     header('location:Detail.php');  
} 
    else {
    echo "Error updating record: " . $conn->error;
}

?>
