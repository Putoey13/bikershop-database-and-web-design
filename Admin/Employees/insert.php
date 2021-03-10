<?php include("connection.php");?>
<?php

     echo $_POST["empNo"];
     echo $_POST["empName"];
	 echo $_POST["empSex"];
	 echo $_POST["empSalary"]; 
    

     $empNo = $_POST["empNo"];
     $empName = $_POST["empName"];	
     $empSex = $_POST["empSex"];		 
	 $empSalary = $_POST["empSalary"];	
	$strSQL = "INSERT INTO employees (empNo,empName,empSex,empSalary) VALUES ('".$empNo. "','" .$empName."','" .$empSex."','" .$empSalary."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "เพิ่มข้อมูลเรียบร้อย";
		 header('location:Employees.php');  
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>