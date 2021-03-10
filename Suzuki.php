<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<style>
	div.Ya{
		  text-align: center;
		  font-size:30px;

	}

	
	#submenu{
		color: #DC143C;
		line-height: 2.5em;
	}
	#submenu:hover{
		color: #fff;
	}
	.container {
  position: relative;
  width: 100%;
  max-width: 700px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position:  absolute;
  top: 50%;
  left: 50%;
    transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #DC143C;
  font-family: Arial;
  color: white;
  font-size: 25px;
  text-align: center;
}

.container .btn:hover {
  background-color: #FF7F50;
  
  
}


div.gallery {
  border: 2px solid #DC143C;
  
}

div.gallery:hover {
  border: 2px solid #FF7F50;
}

div.desc {
  padding: 15px;
  text-align: center;
  font-size:20px; <!--ในกรอบ-->

}
.inpic{
		color: #FF7F50;
	}
	
.inpic:hover{
	color: #DC143C;
}
* {
  box-sizing: border-box;
}
@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

	</style>
	
	
		<title>Biker Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/jpg" href="images/favicon.jpg"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="#" class="logo">Biker Shop</a>
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


		<!--Body-->
		<br><br>
		<div class="Ya">
		<h1>-SUZUKI-</h1>
		</div>
		<br><br><br>
			<body class="yamaha">
		
			<div class="container">
			<form action="Order.php" method="POST">
			<h2>Suzuki GSX-R1000R ABS</h2>
			<img src="car/Suzuki/GSX/ปก-2.jpg" alt="Snow" style="width:100%">
			<button class="btn" name="model" value="Suzuki GSX-R1000R ABS" >สั่งจอง</button>
			</form>
			
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_5terre.jpg"></a>
				<div class="desc">ราคา 809,000 บาท 
				
				&emsp;<a href="car/Suzuki/GSX/GSX.php" class="inpic"> รายละเอียดเพิ่มเติม<a>
				</div>

				</div>
			</div>
			</div>
			
		<br><br><br><br><br>
			<div class="container">
			<form action="Order.php" method="POST">
			<h2>Suzuki Katana</h2>
			<img src="car/Suzuki/Katana/Suzuki-Katana.jpg" alt="Snow" style="width:100%">
			<button class="btn" name="model" value="Suzuki Katana" >สั่งจอง</button>
			</form>
		
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_5terre.jpg"></a>
				<div class="desc">ราคา 569,000 บาท 
				
				&emsp;<a href="car/Suzuki/Katana/Katana.php" class="inpic"> รายละเอียดเพิ่มเติม<a>
				</div>

				</div>
			</div>
			</div>

			
		<br><br><br><br><br>
			<div class="container">
		    <form action="Order.php" method="POST">
			<h2>Suzuki V-Strom 1000 ABS</h2>
			<img src="car/Suzuki/V/DL1000AL8_YU1_Diagonal.jpg" alt="Snow" style="width:100%">
			<button class="btn" name="model" value="Suzuki V-Strom 1000 ABS" >สั่งจอง</button>
			</form>
			
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_5terre.jpg"></a>
				<div class="desc">ราคา 579,000  บาท 
				
				&emsp;<a href="car/Suzuki/V/V.php" class="inpic"> รายละเอียดเพิ่มเติม<a>
				</div>

				</div>
			</div>
			</div>
			
			
		<br><br><br><br><br><br><br><br><br>
			</body>
			
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