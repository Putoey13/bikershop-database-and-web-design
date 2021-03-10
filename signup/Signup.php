<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div class="wrapper" style="background-image: url('images/rd.png');">
			<div class="inner">
				<form action="register.php" method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input name="txtName" type="text" class="form-control" id="txtName" >
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input name="txtlastname" type="text" class="form-control" id="txtlastname">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">E-mail</label>
						<input name="txtEmail" type="text" class="form-control" id="txtEmail">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input name="txtPassword" type="password" class="form-control" id="txtPassword">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input name="txtConPassword" type="password" class="form-control" id="txtConPassword">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> I accept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button id="A1" onclick="alert('Success!!!')>
					<a href="#">Register Now 
					</a>
					</button>
				</form>
			</div>
		</div>

		
	</body>
</html>
