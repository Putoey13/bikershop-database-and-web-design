<?php SESSION_START();

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

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>เว็บไซค์ของเรารวมรถมอเตอร์ไซต์มากกว่า <?php echo "84,000";  ?>รุ่น</h1>
					<p>สั่งจองรถมอเตอร์ไซต์ได้ด้วยตัวของคุณเอง</p>
					<ul class="actions">
						<li><a href="#one" id="A1" class="button scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>1.เลือกรถมอเตอร์ไซต์ที่คุณสนใจ</h3>
							<p>สามารถเลือกยี่ห้อรถ รุ่น สี แรงม้า และเกียร์ตามรายละเอียดที่แสดง </p>
						</div>
						<div>
							<h3>3.กรอกข้อมูล</h3>
							<p>หากมีข้อมูลเพิ่มเติม ให้คุณกรอกเพิ่มเติมลงไปเช่น อีเมลที่เปลี่ยน เบอร์ที่เปลี่ยน จากนั้นตรวจสอบข้อมูลให้ถูกต้องก่อนกดกดยืนยัน</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/favicon.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>2.กดสั่งจอง</h3>
							<p>เมื่อเลือกรถมอเตอร์ไซต์ตามที่คุณสนใจแล้วคลิ๊กที่ สั่งจอง</p>
						</div>
						<div>
							<h3>4.รอพนักงานติดต่อคุณไป</h3>
							<p>รอเพียงไม่กี่นาที พนักงานจะติดต่อคุณกลับไปเพื่อจ่ายค่ามัดจำและนัดวัน เวลาดูรถมอเตอร์ไซต์จริง </p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>What is Biker Shop?</h2>
					<figure>
					    <p class="cc">
					        "คุณสามารถเลือกรถมอเตอร์ไซต์ได้ตามที่ต้องการ  โดยไม่ต้องยืนเลือกหน้าร้านอีกต่อไป เมื่อคุณสนใจสินค้าตัวไหนแล้ว คลิ๊กที่สั่งซื้อจากนั้นกรอกข้อมูล และยืนยันสั่งจองเสร็จสิ้น <br>ทางเราจะติดต่อคุณไปเพื่อทำการคุยเรื่องค่ามัดจำและนัดวันเวลาดูรถก่อนจะตัดสินใจซื้อ"
					    </p>
					    <footer>
					        <cite class="author">ขอบคุณทุกท่านที่ใช่บริการ  Biker Shop</cite>
					     
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="car/Yamaha/TMAX/TMAX-Tech-MAX-2020.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Yamaha</h3>
							<p>&emsp;&emsp; Yamaha TMAX Tech MAX สุดยอดสไตล์สปอร์ตที่มาพร้อมคุณสมบัติใหม่ที่อยู่ในระดับที่ดีสุด นอกจากนี้ยังมาพร้อมหน้าปัดเรือนไมล์แบบดิจิตอล พร้อมทั้งการเชื่อมต่อแบบเต็มรูปแบบ พร้อมเบาะนั่งที่ออกแบบที่ดีเยี่ยมยิ่งขึ้น</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="car/Suzuki/Katana/Suzuki-Katana.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Suzuki</h3>
							<p>&emsp;&emsp;Suzuki Katana รถมอเตอร์ไซค์บิ๊กไบค์สไตล์ Half-Fairing ที่ออกแบบมาเพื่อการขับขี่ที่สบายและการออกแบบที่คมชัดทุกมุมมอง พร้อมทั้งพละกำลังทรงประสิทธิภาพ ขนาด 999 ซีซี มาพร้อมระบบช่วยเหลือผู้ขับขี่ที่ทันสมัย</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="car/Dukati/XDiavel/Ducati-XDiavel-2019.png" alt="" />
						</div>
						<div class="content">
							<h3>Ducati</h3>
							<p>&emsp;&emsp;บิ๊กไบค์ Cruiser สุดหรูระดับพรีเมี่ยม ที่มาพร้อมกับความโดดเด่นและเป็นรถมอเตอร์ไซค์เอนกประสงค์อย่างมากไม่ว่าจะเป็นการใช้งานในเมืองและนอกเมือง</p>
						</div>
					</div>
				</div>
			</section>

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