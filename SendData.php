<?php  
	 include("connection.php"); 
	 session_start();
     $model = $_SESSION["model"];
	 $carColor = $_POST["carColor"];
     $custName = $_POST["custName"];
     $custLastname =  $_POST["custLastname"];	
     $Email = $_POST["Email"];		 
	 $custAddr = $_POST["custAddr"];
	 $Phonenumber= $_POST["Phonenumber"];
	
	 
	 
	$settankNo = "select tankNo from detail 
	 where model = '".$model."' and carColor = '".$carColor."'";
	
	$result1 = $conn->query($settankNo);	
	if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
    $_SESSION["tankNo"] = $row["tankNo"];
	}
}
	
	
	$setcustNo = "select custNo from customer 
	where custEmail = '".$Email."'"; 


	$result2 = $conn->query($setcustNo); 
	 if ($result2->num_rows > 0) {
   while($row = $result2->fetch_assoc()) {
   $_SESSION["custNo"] = $row["custNo"];
    }
}	
	
	$money = "select priceCar from car 
	where model = '".$model."'";	
	
	
	$result3 = $conn->query($money);
	  if ($result3->num_rows > 0) {
    while($row = $result3->fetch_assoc()) {
    $_SESSION["money"] = ($row["priceCar"])/40;   
    }
}
	  
	$strSQL1 = "UPDATE customer SET 
	
	custAddr = '".$custAddr."',
	Phonenumber = '".$Phonenumber."'
	WHERE custEmail  = '".$Email."'";	
    	
	$strSQL2 = "INSERT INTO reserve (tankNo,custNo,earnestmoney) VALUES ('".$_SESSION["tankNo"]."','".$_SESSION["custNo"]."','".$_SESSION["money"]."')";
	
	
	if($result3->num_rows == 0 or $result2->num_rows == 0 or $result1->num_rows == 0) {

		header('location:Order.php');
		echo '<script type="text/javascript">alert("ข้อมูลผิดพลาดโปรดตรวจสอบดูอีกครั้ง ");</script>';
    }
	
	else if($conn->query($strSQL1) === TRUE  and  mysqli_query($conn, $strSQL2)){
		$getreserve = "select reserveNo from reserve 
	    where custNo = '".$_SESSION["custNo"]."'"; 
	    
      $result4 = $conn->query($getreserve);
	  
	if ($result4->num_rows > 0) {
    while($row = $result4->fetch_assoc()) {
    $_SESSION["reserveNo"] = $row["reserveNo"];   
    }
    }
    $strSQL3 = "INSERT INTO ordercar (reserveNo) VALUES ('".$_SESSION["reserveNo"]."')";
		
		if(mysqli_query($conn, $strSQL3)){
		 header('location:homepage.php');  	 
		  echo '<script type="text/javascript">alert("เราได้รับทราบถึงการสั่งจองของคุณลูกค้าเเล้วทางร้านจะติดต่อกลับผ่านทางอีเมลหรือเบอร์โทรศัพท์ที่ได้เเจ้งไว้ ขอบคุณครับ ");</script>';
		}
    }
 

	
    mysqli_close($conn);	
?>