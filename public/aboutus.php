
<?php
session_start();
/* Check weather user is logged in or not*/
if(!isset($_SESSION['UserData']['Username'])){
	/* if user is not logged in but he tries to open this page thorough link then head to this page*/
	header("location:login.php");
	exit;
}
?>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/homecss.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/aboutcss.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="HandheldFriendly" content="true">

</head>
<body>

<nav class="navClass">
	<ul>
			<li><a href="Home.php">Home</a></li>
		<li>Menu
			<ul class="sub">
				<li>Subjects
					<ul class="inner">
					<form method="POST" action="Subject.php" id="myform" name="myform">
						<li><label for="sub1" onclick="submitform1()">CSCI 311</label><input type="hidden" name="sub1" value="CSCI 311" /></li>
						<li><label for="sub2" onclick="submitform2()">CSCI 260</label><input type="hidden" name="sub2" value="CSCI 260" /></li>
						<li><label for="sub3" onclick="submitform3()">CSCI 265</label><input type="hidden" name="sub3" value="CSCI 265" /></li>
						<li><input type="hidden" id="haha" name="subjectID" value=""></li>
						<!--<li><input type="submit" value="submit"/></li>-->
					</form>
					</ul>
				
				</li>
				<li>Profile</li>
				<li>About Us</li>
			</ul>
		
		</li>
		<li><a href="logout.php">Log Out</a></li>
	</ul>
</nav>


	<div class="container-contact100">
	
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(../images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message:</span>
					<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


</body>
</html>
