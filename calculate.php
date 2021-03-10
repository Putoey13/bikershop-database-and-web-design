<?php session_start();?>
<!DOCTYPE html>

<html>
	<head>
		<title>Biker Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/jpg" href="images/favicon.jpg"/>
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
	#submenu{
		color: #DC143C;
		line-height: 2.5em;
	}
	#submenu:hover{
		color: #fff;
	}
	div.dd{
		text-align: center;
		
	}
	
	input{
		background: #a52a2a;
		color: #fff;
		padding: 5px;
		border-radius:10px;
		border: 0px;
		outline: none;
		font-family: "Pacifico", cursive;
		text-align: center;
		font-size: 18px;
		width="50";
		height="50";
		
	}
	
	
	
	#btn{
	background: #a52a2a;
		color: #fff;
		border-radius:10px;
		border: 0px;
		outline: none;
		font-size: 20px;
		box-shadow:3px 3pa 3px rgba(0,0,0,0.5);
		font-family: "Open Sans", Arial, Helvetica, sans-serif;
	}
	#btn:hover{
		background: #FF7F50;
		transform: translateY(4px);
		box-shadow:1px 1pa 1px rgba(0,0,0,0.5);
	font-family: "Open Sans", Arial, Helvetica, sans-serif;
	}

</style>
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


<br>
<div class="dd" >
	price :&emsp;<input type="number" text-align ="center" id="frist"/> &nbsp; bath &emsp;&emsp;
	<br>
	<br>
	
	down payment : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Number of installments :
	<br>
	<br>
	<input type="number" id="secound"/> % &emsp;&emsp;&emsp;
	<input type = "number" id = "thrid"/> mouth
	
	<br>
	<br>

	<i class='fas fa-arrow-down' style='font-size:20px'></i>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<i class='fas fa-arrow-down' style='font-size:20px'></i>
	<br>
	<br>

	<input type="number" id="result1"/> &nbsp;bath
	&emsp;&nbsp;&nbsp;<input type = "number" id = "result2"/>&nbsp; bath
	
	<br><br><br> <button id="btn" onclick="calc()">calculate</button>
<br><br><br>
	<script>
	
	
		function calc()
            {
                var n1 = Number(document.getElementById('frist').value);
                var n2 = Number(document.getElementById('secound').value);
				var n3 = Number(document.getElementById('thrid').value);
                var re1 = (n1*n2)/100;
				var re2 = (n1-((n1*n2)/100))/n3;
				
				document.getElementById("result1").value =  re1;
				document.getElementById("result2").value =  re2;
				
         
	}
	
	</script>
	
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



