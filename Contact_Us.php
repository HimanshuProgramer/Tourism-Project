<!DOCTYPE html>
<html>
	<head>
		<title>Contact_Us</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="JS/Index.js" ></script>
		<link rel="stylesheet" type="text/css" href="CSS/Index.css" />
		<link rel="stylesheet" type="text/css" href="CSS/footer.css" />
		<link rel="stylesheet" type="text/css" href="CSS/contact_us.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>
	.right-side .button{
			display: inline-block;
			margin-top: 12px;
			}
	.right-side .button input[type="submit"]{
											color: #fff;
											font-size: 18px;
											outline: none;
											border: none;
											padding: 8px 16px;
											border-radius: 6px;
											background: #3e2093;
											cursor: pointer;
											transition: all 0.3s ease;
										}
	.button input[type="submit"]:hover{
							background: #5029bc;
							}
</style>

</head>


<body style="background-color:#cdcdcd;
			display:table; 
			min-height:100vh; 
			width:100%; 
			align-items:center;
			justify-content:center; " >


	
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
  <a href="About.php"><i class="fa fa-address-card mr-3 text-primary fa-fw"></i>About</a>
  <br><br><br><br><br><br><br><br><br>
  <a href="Login.php"><i class="fa fa-user-circle-o"></i>Login</a>
</div>

<div id="main" style="position:fixed;" >
  <button class="openbtn" onclick="openNav()">☰ Menu</button>  
  <h2></h2>

</div>


	<div class="slideshow">
		
		<img src="Pench.jpg" alt="Pench.jpg" id="slideimage">
	</div>
  
  <!-- Content Start -->
   <br><br>
   <h2 style="color:blue;padding-left:35px;">Contact Us - Madhya Pradesh Tourism Guide</h2><br>
   
   
   <div class="container">
	<div class="content">
	
		<div class="left-side">
				<div class="address details">
					<i class="fas fa-map-marker-alt"></i>
					<div class="topic">Address</div>
					<div class="text-one">6th Floor,Lily Trade Wing,</div>
					<div class="text-two">Jehangirabad,Bhopal</div>
				</div>
				
				<div class="phone details">
					<i class="fas fa-phone-alt"></i>
					<div class="topic">Phone</div>
					<div class="text-one">1800-233-7777</div>
					<div class="text-two">1800-123-5555</div>
				</div>
				
				<div class="email details">
					<i class="fas fa-envelope"></i>
					<div class="topic">Email</div>
					<div class="text-one">customercare@gmail.com</div>
					<div class="text-two">suggestions.yginmp@mp.gov.in</div>
				</div>
		</div>
		
		<div class="right-side">
			<div class="topic-text">Send us a message</div>
			<p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
			<form action="Contact_Us.php" method="post" >
			
				<div class="input-box">
					<input type="text" placeholder="Enter your name">
				</div>
				
				<div class="input-box">
					<input type="text" placeholder="Enter your email">
				</div>
				
				<div class="input-box message-box">
					<textarea placeholder="Enter your message"></textarea>
				</div>
				
				<div class="button">
					<input type="submit" value="Send Now" >
				</div>
				
			</form>
		</div>
		
		
    </div>
  </div>
   
   <!-- Content End -->
  
   
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
