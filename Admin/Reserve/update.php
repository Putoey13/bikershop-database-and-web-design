<?php include("connection.php");?>
<?php
    $reserveNo = $_POST["reserveNo"];
    $tankNo = $_POST["tankNo"];
    $custNo = $_POST["custNo"];
	$datetime = $_POST["datetime"];
	$earnestmoney = $_POST["earnestmoney"];
	
	
	$strSQL = "UPDATE reserve SET  
	tankNo = '".$tankNo."',
	custNo = '".$custNo."',
	datetime = '".$datetime."',
	earnestmoney = '".$earnestmoney."'
	WHERE reserveNo = '".$reserveNo."'" ;

	if ($conn->query($strSQL) === TRUE) {
     header('location:Reserve.php');  
} 
    else {
    echo "Error updating record: " . $conn->error;
}

?>
