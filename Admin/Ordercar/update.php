<?php include("connection.php");?>
<?php
    $orderNo = $_POST["orderNo"];
    $reserveNo = $_POST["reserveNo"];
	$orderConf = $_POST["orderConf"];
	$paytype = $_POST["paytype"];
	
	
	$strSQL = "UPDATE ordercar SET  
	orderNo = '".$orderNo."',
	reserveNoNo = '".$reserveNo."',
	orderConf = '".$orderConf."',
	paytype = '".$paytype."'
	WHERE orderNo = '".$orderNo."'" ;

	if ($conn->query($strSQL) === TRUE) {
     header('location:Order.php');  
} 
    else {
    echo "Error updating record: " . $conn->error;
}

?>
