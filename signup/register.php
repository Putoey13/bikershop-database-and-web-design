<?php include("connection.php");?>
<?php	 
session_start();
	if(trim($_POST["txtName"]) == "")
	{
		header("refresh:0;url=http://localhost/Ramune/signup/Signup.php");
		echo '<script type="text/javascript">alert("Please input your Name!");</script>';
		exit();		
	}
	if(trim($_POST["txtlastname"]) == "")
	{
		header("refresh:0;url=http://localhost/Ramune/signup/Signup.php");
		echo '<script type="text/javascript">alert("Please input your Lastname!");</script>';
		exit();	
	}
	if(trim($_POST["txtPassword"]) == "")
	{
		header("refresh:0;url=http://localhost/Ramune/signup/Signup.php");
		echo '<script type="text/javascript">alert("Please input your Password!");</script>';
		exit();	
	}	
		if($_POST["txtEmail"] == "" )
	{
		header("refresh:0;url=http://localhost/Ramune/signup/Signup.php");
		echo '<script type="text/javascript">alert("Please input your Email!");</script>';
		exit();
	}	
	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		header("refresh:0;url=http://localhost/Ramune/signup/Signup.php");
		echo '<script type="text/javascript">alert("Password not Match!");</script>';
		exit();
	}
	
	$name= $_POST["txtName"]; 
    $lname = $_POST["txtlastname"];
    $pw = $_POST["txtPassword"];
    $em = $_POST["txtEmail"]; 
	$mem = "member"; 
	
	$duplicate=mysqli_query($conn,"select * from member where Email='$em'");
	if (mysqli_num_rows($duplicate)>0)
	{
		header("refresh:0;url=http://localhost/Ramune/signup/Signup.php");
		echo '<script type="text/javascript">alert("ซ้ำโว้ยยยยยยยยยย!");</script>';
	}
	else
	{
		$strSQL = "INSERT INTO member (Name,Lastname,Password,Email,Status) VALUES ('".$name."','".$lname."','".$pw."','".$em."','".$mem."')";		
		$strSQL2 = "INSERT INTO customer (custName,custLastname,custEmail) VALUES ('".$name."','".$lname."','".$em."')";	
		
		if (mysqli_query($conn, $strSQL) and mysqli_query($conn, $strSQL2)) 
		{
			header("refresh:0;url=http://localhost/Ramune/index.php");
			echo '<script type="text/javascript">alert("Success!");</script>';
		}
		else 
		{
			echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
		}
			mysqli_close($conn);	
	}
?>

		