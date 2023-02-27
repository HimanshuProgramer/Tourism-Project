<?php
	
	/* Database name= mptour_db		*/

	$name=$_POST['name'];
	$Age=$_POST['Age'];
	$mobile=$_POST['mobile'];
	$EmailId=$_POST['EmailId'];
	$Password=$_POST['Password'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mptour_db');
	
	$q="Insert INTO user (name,Age,mobile,EmailId,Password) values ('$name','$Age','$mobile','$EmailId','$Password')";
	$status=mysqli_query($con,$q);
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Insertion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="JS/Index.js" ></script>
		<link rel="stylesheet" type="text/css" href="CSS/Index.css" />
		<link rel="stylesheet" type="text/css" href="CSS/footer.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  
  <!--Code start-->
   <script type="text/javascript" >
  function success(){
	  alert('Account is Created Successfully.And you can Login by Your EmailId and Password.');
  }
  function failed(){
	  alert('Account is not Created Successfully.Please insert your information again with new EmailId.');
  }
  </script>
  
	<?php 
			if($status==1)
				echo '<script type="text/javascript">success();</script>';
			else
				echo '<script type="text/javascript">failed();</script>';
	    ?> 
 
  
  <!--Code end-->
  
  
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
