<!DOCTYPE html>

<?php session_start();
/* Check weather user is logged in or not*/
if(!isset($_SESSION['UserData']['Username'])){
	/* if user is not logged in but he tries to open this page thorough link then head to this page*/
	header("location:login.php");
	exit;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang=en>
<head>
<title>Home Page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/homecss.css">




<meta name="HandheldFriendly" content="true">
<style>

#hide{
	float:left;
	margin-left: 60px;
}

#show{
	float:right;
	margin-right: 30px;
	display: none;
}

</style>
</head>
<body>
<div id="magic">
<form method="POST" action="Subject.php" id="myform" name="myform">
<nav class="navClass">
	<ul>
			<li><a href="Home.php">Home</a></li>
		<li>Menu
			<ul class="sub">
				<li>Subjects
				
					<ul class="inner">
					
						<li><label onclick="submitform1()">CSCI 311</label><input type="hidden"  name="sub1" value="CSCI 311" /></li>
						<li><label onclick="submitform2()">CSCI 260</label><input type="hidden" name="sub2" value="CSCI 260" /></li>
						<li><label onclick="submitform3()">CSCI 265</label><input type="hidden"  name="sub3" value="CSCI 265" /></li>
						<li><input type="hidden" id="haha" name="subjectID" value=""></li>
						<!--<li><input type="submit" value="submit"/></li>-->
					
					</ul>
				
				</li>
				<li>Profile</li>
				<li><a id="bar" href="aboutus.php" style="font-size:17px;">Contact Us</a></li>
			</ul>
		
		</li>
		<li>Change Contrast</li>
		<li><a href="logout.php">Log Out</a></li>
	</ul>
</nav>
</form>
<br><br>

	<div class="wrap">
  <h1>
    VIU Learn 2.0
  </h1>
</div><br>

	<div class="new">
		<div class="new1">HOME</div>
		<div class="new1">CATEGORIES</div>
		<div class="new1">SUBJECTS</div>
		<div class="new1">ABOUT</div>
		<div class="new1">CONTACT</div>
	</div>


<br><hr><br><br><br>
</div>
<span id="hide" onclick="nooo()">Don't Click Me</span>
<span id="show" onclick="no()">Now Press ME</span>
<br>
<div id="magic1">
<div class="container">

  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../images/viu1.jpg" alt="" width="460" height="345">
         <div class="carousel-caption">
         
      </div>
      </div>

      <div class="item">
        <img src="../images/viu2.jpg" alt=" " width="460" height="345">
       <div class="carousel-caption">
         
      </div>
      </div>

      <div class="item">
        <img src="../images/viu3.jpg" alt="" width="460" height="345">
         <div class="carousel-caption">
         
      </div>
      </div>

      <div class="item">
        <img src="../images/viu1.jpg" alt=" " width="460" height="345">
       <div class="carousel-caption">
          
      </div>
      </div>
      
      <div class="item">
        <img src="../images/viu2.jpg" alt=" " width="460" height="345">
       <div class="carousel-caption">
          
      </div>
      </div>
      
      <div class="item">
        <img src="../images/viu3.jpg" alt=" " width="460" height="345">
       <div class="carousel-caption">
          
      </div>
      </div>
      
      <div class="item">
        <img src="../images/viu1.jpg" alt=" " width="460" height="345">
       <div class="carousel-caption">
         
      </div>
      </div>
    </div>
    
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="opacity: 0;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"  style="opacity: 0;">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<br><br><br>




<script>
function nooo() {
	 document.getElementById("show").style.display = "block";
	document.getElementById("hide").innerHTML = "HAHAHA";
}
function no() {
	 document.getElementById("hide").style.display = "block";
	 document.getElementById("show").style.display = "none";
	document.getElementById("hide").innerHTML = "Don't Click Me";
}
$(document).ready(function(){
  $("#hide").click(function(){
    $("#magic,#magic1").hide(1000);
  });
  $("#show").click(function(){
    $("#magic,#magic1").show(1000);
  });
});
	function submitform1()
	{
		var ID = document.getElementsByName("sub1")[0].value;
    																
    	document.getElementsByName("subjectID")[0].value = ID;
		document.forms["myform"].submit();
		//window.location.assign("Subject.php");
	}
function submitform2()
	{
		var ID = document.getElementsByName("sub2")[0].value;
    																
    	document.getElementsByName("subjectID")[0].value = ID;
		document.forms["myform"].submit();
		//window.location.assign("Subject.php");
	}
	function submitform3()
	{
		var ID = document.getElementsByName("sub3")[0].value;
    																
    	document.getElementsByName("subjectID")[0].value = ID;
		document.forms["myform"].submit();
		//window.location.assign("Subject.php");
	}
</script>
</body>

</html>

