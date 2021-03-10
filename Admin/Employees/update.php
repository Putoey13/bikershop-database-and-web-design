<?php include("connection.php");?>
<?php
    $empNo = $_POST["empNo"];
    $empName = $_POST["empName"];
	$empSex = $_POST["empSex"];
	$empSalary = $_POST["empSalary"];
	
	
	$strSQL = "UPDATE employees SET  
	empNo = '".$empNo."',
	empName = '".$empName."',
	empSex = '".$empSex."',
	empSalary = '".$empSalary."'
	WHERE empNo = '".$empNo."'" ;

	if ($conn->query($strSQL) === TRUE) {
     header('location:Employees.php');  
} 
    else {
    echo "Error updating record: " . $conn->error;
}

?>
