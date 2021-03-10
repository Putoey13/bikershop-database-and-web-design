<?php
include("connection.php"); 
session_start();
error_reporting(E_ERROR | E_PARSE);
$model = $_POST["model"];
$_SESSION["model"] = $_POST["model"];
$_SESSION["carCC"] = "";
$_SESSION["typeGear"] = "";
$tankNo = "select carCC,typeGear from detail 
where model = '".$model."'";

$result1 = $conn->query($tankNo);	
	if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
    $_SESSION["carCC"] = $row["carCC"];
	$_SESSION["typeGear"] = $row["typeGear"];
	}	
}
?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<style>
	#mmm{
  background-color: white;
  width: 500px;
  border: 15px solid gray;
  position: center;
  padding: 50px;
  margin: 20px;
        }
	#submenu{
		color: #DC143C;
		line-height: 2.5em;
	}
	#submenu:hover{
		color: #fff;
	}
	#A1{
		background: #a52a2a;
	}
	#A1:hover{
			background: #FF7F50;
	}
	#x{
		font-size:100px;
	}
	
	</style>
		<title>Biker Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/jpg" href="images/favicon.jpg"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">Biker Shop</a>
				<nav class="right">
					<a href="#" class="button alt"><?php echo $_SESSION["Name"]; ?></a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="homepage.php">Home</a></li>
					<li><a href="Motorcycles.php">Motorcycles</a></li>
					&emsp;<a id = "submenu" href="Yamaha.php">Yamaha</a> <br>
					&emsp;<a id = "submenu" href="Honda.php">Honda</a> <br>
					&emsp;<a id = "submenu" href="Suzuki.php">Suzuki</a> <br>
					&emsp;<a id = "submenu" href="Kawazaki.php">Kawasaki</a> <br>
					&emsp;<a id = "submenu" href="Dukati.php">Ducati</a> <br>
					
					<li><a href="Order.php">Order</a></li>
					<li><a href="calculate.php">Calculate</a></li>
					<li><a href="index.php">Log out</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
					<a>Add a description of the image here</a>
				</ul>
			</nav>
		<!-- Main -->
	
	<div class="inner">
				<form method="post" action="SendData.php" >
					<br>
					<h3>สั่งจอง</h3>
					<br>
					<div id="mmm">
					<div class="form-wrapper">
				 <label><p style ="font-size:23px;">Detail</p></label>
				 <label> Name : <?php echo $model;?></label>

				 <label> CC : <?php echo $_SESSION["carCC"];?></label>
				 <label> Gear : <?php echo $_SESSION["typeGear"];?></label>
				  <br>
				 <label> <p style ="font-size:23px;">Color you can Choose! </p></label>
				 <label> <?php 
				 $color = "select carColor from detail 
                 where model = '".$model."'";

                  $result2 = $conn->query($color);	
	              if ($result2->num_rows > 0) {
                  while($row = $result2->fetch_assoc()) {
	              $_SESSION["Color"] = $row["carColor"];
				  echo $_SESSION["Color"];
				  echo "<br>";
				  echo "<br>";
	}	
}
				 ?>
				 </label>
					</div>	
  </div>					
					<br> 
					<br> 
					<br> 
					<div class="form-wrapper">
			<label style ="font-size:23px;">&emsp;&emsp;&emsp;&emsp;&emsp;
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			Check your information</label>
			<br> 
			<br> 
							<label for="">color ( กรอกเป็นภาษาอังกฤษ  )</label>
							<input name="carColor"  type="text" class="form-control" id="carColor">
					</div>										
					<br>
						<div class="form-wrapper">
							<label for="">Name</label>
							<input name="custName"  type="text" value=<?php echo $_SESSION["Name"];?> class="form-control" id="custName">
		
					</div>										
					<br>
					<div class="form-wrapper">
							<label for="">Lastname</label>
							<input name="custLastname" type="text" value=<?php echo $_SESSION["Lastname"];?> class="form-control" id="custLastname">
		
					</div>					
					<br>
						<div class="form-wrapper">
							<label for="">E-mail for contact</label>
							<input name="Email" type="text" class="form-control" id="Email" value=<?php echo $_SESSION["Email"];?> >
		
					</div>					
					<br>
						 <div class="form-wrapper">
							<label for="">Address</label>
							<input name="custAddr" type="text" class="form-control" id="custAddr">
		
					</div>					
					<br>
					<div class="form-wrapper">
							<label for="">Phone for contact</label>
							<input name="Phonenumber" type="text" class="form-control" id="Phonenumber">
		
					</div>	
					<br>
					<br>
					<button id="A1" onclick="alert('คุณทำการยืนยันสั่งจองแล้ว โปรดรอพนักงานติดต่อกลับไป')>
					<a  href="#" > confirm 	</a>
					</button>
				</form>
			</div>

	
			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>contact</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(081) 995-7697</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">biker_shop@gmail.com</a></li>
						<li><span class="icon fa-map-marker"></span> เลขที่ 6 ถนนราชมรรคา อำเภอเมือง จังหวัดนครปฐม 73000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; <a> GROUP7</a>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>