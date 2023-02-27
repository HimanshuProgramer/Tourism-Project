<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="JS/Index.js" ></script>
		<link rel="stylesheet" type="text/css" href="CSS/Index.css" />
		<link rel="stylesheet" type="text/css" href="CSS/footer.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		
			
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v8/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v8/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v8/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v8/css/main.css">
<!--===============================================================================================-->
		
		
		
	<style>
		
	</style>
	
	</head>

<body style="background-color:#cdcdcd" >

	<img style="float:left;width:75px;height:75px;" src="Images/logo.png" alt="logo" />
	<img style="float:right;width:75px;height:75px;" src="Images/logo.png" alt="logo" />
	<h1 style="color:red;text-decoration:none;text-align:center;font-size:50px;margin:3px;">
	Madhya Pradesh<h3 style="font-family:MV Boli;color:#002afb;text-align:center;font-size:20px;margin:3px;" ><i>the Heart of India</i></h3></h1>
	
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <h1 style="color:white;text-align:center;">M.P. Tourism</h1>
  <a href="Index.php"><i class="fa fa-fw fa-home"></i>Index</a>
  <a href="Information.php"><i class="fa fa-cubes mr-3 text-primary fa-fw"></i>Information</a>
  <a href="Gallery.php"><i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Gallery</a>
  <a href="Contact_Us.php"><i class="fa fa-fw fa-envelope"></i>Contact_Us</a>
  <a href="About.php"><i class="fa fa-address-card mr-3 text-primary fa-fw"></i>About</a><br><br><br><br><br><br><br><br><br>
  <a href="Login.php"><i class="fa fa-user-circle-o"></i>Login</a>
</div>

<div id="main" style="position:fixed;">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  
  <h2></h2>

</div>


	<div class="slideshow">
		
		<img src="Pench.jpg" alt="Pench.jpg" id="slideimage">
	</div>
  
  <!--Login Code start-->
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="Validation.php" method="post" >
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="Email" name="EmailId" placeholder="Enter EmailId">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="save" >
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="Create Account.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  
  
  <!--Login Code end-->
  
  
	<h2 style="color:blue;padding:5px;">Map of Madhya Pradesh</h2><br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3811442.504184317!2d79.13504336447693!3d21.10810767085303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smadhya%20pradesh%20tourism%20places!5e0!3m2!1sen!2sin!4v1644682532119!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


	<!--Footer Code start-->
	<footer class="footer">
  	 <div class="container1">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Quick Links</h4>
  	 			<ul>
  	 				<li><a href="Index.php">Index</a></li>
					<li><a href="Information.php">Information</a></li>
					<li><a href="Gallery.php">Gallery</a></li>
					<li><a href="Contact_Us.php">Contact_Us</a></li>
					<li><a href="About.php">About</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Help&Support</h4>
  	 			<ul style="color:#c6c6c6d9;">
  	 				<li>1800-233-7777(10:00AM to 6:00PM)</li>
  	 				<li>(Sunday holiday,Saturday and other holiday Half day)</li>
  	 				<li>For feedback & </li>
  	 				<li>suggestions mail us at:</li>
  	 				<li>suggestions.yginmp@mp.gov.in</li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Address</h4>
  	 			<ul style="color:#c6c6c6d9;">
  	 				<li>6th Floor,Lily Trade Wing,</li>
  	 				<li>(Above D Mart),</li>
  	 				<li>Jehangirabad, Bhopal,</li>
  	 				<li>Madhya Pradesh 462008</li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"> <i class="fa fa-envelope"> </i> </a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
	 
	 
  </footer>
	<!--Footer Code end-->
	
	 <!-- Copyright -->
  <div style="text-align:center;background-color:grey;">© 2022 Copyright <br> Designed by Himanshu Rathore</a> </div>
     <!-- Copyright -->


</body>
</html> 
