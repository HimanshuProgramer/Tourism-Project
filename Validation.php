<?php
	session_start();
	$EmailId=$_POST['EmailId'];
	$Password=$_POST['Password'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mptour_db');
	
	$q="Select * from user where EmailId='$EmailId' && Password='$Password' ";
	$result=mysqli_query($con,$q);
	
	$num=mysqli_num_rows($result);
	if($num==1){
		$_SESSION['EmailId']=$EmailId;
		header('location:http://localhost/Tourism Project/Index.php');
	}
	else{
		header('location:http://localhost/Tourism Project/Login.php');
	}
	mysqli_close($con);
?>
