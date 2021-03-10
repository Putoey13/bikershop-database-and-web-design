<?php include("connection.php");?>
<?php
    $custNo = $_POST["custNo"];
    $custName = $_POST["custName"];
	$custAddr = $_POST["custAddr"];
	$custEmail = $_POST["custEmail"];
	$Phonenumber = $_POST["Phonenumber"];
	
	$strSQL = "UPDATE customer SET  
	custName = '".$custName."',
	custAddr = '".$custAddr."',
	custEmail = '".$custEmail."',
	Phonenumber = '".$Phonenumber."'
	WHERE custNo = '".$custNo."'" ;

	if ($conn->query($strSQL) === TRUE) {
     header('location:Customer.php');  
} 
    else {
    echo "Error updating record: " . $conn->error;
}

?>
