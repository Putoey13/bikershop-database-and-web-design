<?php session_start();?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<style>
	#submenu{
		color: #DC143C;
		line-height: 2.5em;
	}
	#submenu:hover{
		color: #fff;
	}
	#sbm{
		color: #DC143C;
		font-size: 25px;
	}
	#sbm:hover{
	color: #fff;
	}
* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
 
}
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
#myMenu li a {
  padding: 6px;
  text-decoration: none;
  color: black;
  display: block
}
#myMenu li a:hover {
 color: #a52a2a;
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
			<section id="main" class="wrapper">
				<div class="row" >
  <div class="inner">
    <h2 style="font-size: 30pt;"> Motorcycles</h2>
	<p>ค้นหายี่ห้อหรือรุ่นที่คุณต้องการ</p>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a id = "sbm" href="Yamaha.php">Yamaha</a> </li>
	  <li><a id = "sm" href="car/Yamaha/MT-15/MT-15.php">&emsp;Yamaha MT-15</a></li>
	  <li><a id = "sm" href="car/Yamaha/TMAX/TMAX.php">&emsp;Yamaha TMAX Tech MAX</a></li>
	  <li><a id = "sm" href="car/Yamaha/XSR155/XSR155.php">&emsp;All New Yamaha XSR155</a></li>
	  
	  
      <li><a id = "sbm" href="Honda.php">Honda</a></li>
	  <li><a id = "sm" href="car/Honda/CBR.php">&emsp;Honda CBR650F</a></li>
	  <li><a id = "sm" href="car/Honda/PCX.php">&emsp;Honda PCX150 2020</a></li>
	  <li><a id = "sm" href="car/Honda/REBEL400.php">&emsp;Honda Rebel 400</a></li>
	  <li><a id = "sm" href="car/Honda/project/wave.php">&emsp;Honda Wave 110i ปี 2019</a></li>
	  
      <li><a id = "sbm" href="Suzuki.php">Suzuki</a> </li>
	  <li><a id = "sm" href="car/Suzuki/GSX/GSX.php">&emsp;Suzuki GSX-R1000R ABS</a></li>
	  <li><a id = "sm" href="car/Suzuki/Katana/Katana.php">&emsp;Suzuki Katana</a></li>
	  <li><a id = "sm" href="car/Suzuki/V/V.php">&emsp;Suzuki V-Strom 1000 ABS</a></li>
	  <li><a id = "sm" href="Yamaha.php">&emsp;wave</a></li>
	  
      <li><a id = "sbm" href="Kawazaki.php">Kawasaki</a></li>
	  <li><a id = "sm" href="car/Kawasaki/ninja400.php">&emsp;Kawasaki Ninja400</a></li>
	  <li><a id = "sm" href="car/Kawasaki/project2/zx6r.php">&emsp;Kawasaki ZX-6R 2019</a></li>
	  <li><a id = "sm" href="car/Kawasaki/versys1000/versys1000se.php">&emsp;Kawasaki Versys 1000 SE 2019</a></li>

	  
      <li><a id = "sbm" href="Dukati.php">Ducati</a></li>
	  <li><a id = "sm" href="car/Dukati/Hypermotard/Hypermotard.php">&emsp;Ducati Hypermotard 950</a></li>
	  <li><a id = "sm" href="car/Dukati/XDiavel/XDiavel.php">&emsp;Ducati XDiavel 2019</a></li>
	
     
    </ul>
  </div>
    </div>
			</section>





<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

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