
<?php
session_start();
/* Check weather user is logged in or not*/
if(!isset($_SESSION['UserData']['Username'])){
	/* if user is not logged in but he tries to open this page thorough link then head to this page*/
	header("location:login.php");
	exit;
}
?>
<?php
	require("../private/dbinfo.inc");
	$err;
	$msg;
	$ubID;
	$ssL;
	$eadL;
	$YEL;
	$nsL; 
	?>
	
<html>
<head>
	<title>Assignment Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/homecss.css">
<link rel="stylesheet" href="../css/assigncss2.css">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="HandheldFriendly" content="true">
</head>
<body onload="bbooddyy()" >

<?php
	//create a connection to the database
	
	$myHandle;
	try{
		$myHandle = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

	}catch(PDOException $e){
		$err .= "Connection failed: " . $e->getMessage() . "\n";
	}	
		
	//if the database connection was valid	
	if($myHandle){
		//find out which band they selected
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//echo"hello";
			$subI = $_POST['subjectID'];
		
	}
	//$subI = "CSCI 265";
	//echo $subI;
		//build a query to get all that band's albums
		$mystmt = "select extra from subjects";
		//query the db
		$rslt = $myHandle->query($mystmt);
		//iterate through the returned results, and build an array of books
		foreach ($rslt as $row){
				
			//retrieving Each value of a row 
				$ubI = $row['extra'];
			}
		
		}
	?>
	
	
<nav class="navClass">
	<ul>
			<li><a id="bar" href="Home.php">Home</a></li>
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
				<li><a id="bar" href="aboutus.php" style="font-size: 17;">Contact Us</a></li>
			</ul>
		
		</li>
		<li><a id="bar" href="assignment.php">Change Contrast</a></li>
		<li><a id="bar" href="logout.php">Log Out</a></li>
	</ul>
</nav>
<div class="main">

	<h2 id="heading"><?php echo $ubI; ?></h2><br><br><br>

<div class="box1">
<div class="leftside" onclick="goBack()">Content</div>
<div class="rightside" onclick="goforward()">Assignment</div>
</div>
<br><br><br><br>
		<div class="outside">
		<div class="inside" style="background-color: lightgray;color:#85144b;">
			<div class="mini" style="color:#85144b;">Lab1</div>
			<div class="mini" style="color:#85144b;">Deadline<br>01/09/19</div>
			<div class="mini" style="color:#85144b;">Submitted</div>
		</div>
		<div class="inside" style="background-color: lightgray;">
			<div class="mini" style="color:#85144b;">Lab2</div>
			<div class="mini" style="color:#85144b;">Deadline<br>01/20/19</div>
			<div class="mini" style="color:#85144b;">Submitted</div>
		</div>
		<div class="inside">
			<div class="mini">Lab3</div>
			<div class="mini">Deadline<br>01/31/19</div>
			<div class="mini">Pending</div>
		</div>
		<div class="inside">
			<div class="mini">Lab4</div>
			<div class="mini">Deadline<br>012/11/19</div>
			<div class="mini">Pending</div>
		</div>
		<div class="inside">
			<div class="mini">Lab5</div>
			<div class="mini">Deadline<br>012/11/19</div>
			<div class="mini">Pending</div>
		</div>
		<div class="inside">
			<div class="mini">Lab6</div>
			<div class="mini">Deadline<br>012/11/19</div>
			<div class="mini">Pending</div>
		</div>
		<div class="inside">
			<div class="mini">Lab7</div>
			<div class="mini">Deadline<br>012/11/19</div>
			<div class="mini">Pending</div>
		</div>
		</div>
	</div>

<script>
	
	function bbooddyy() {
		document.getElementById("content").disabled = true;
		//lhs.classList.remove("active-case");
	}
	function goBack() {
  window.location.assign("Subject2.php");
  document.getElementById("content").disabled = true;
	}
	function goforward() {
		document.getElementById("content").disabled = false;
		//window.location.assign("assignment.php");
	}
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
<?php 
$subI = $_POST['subjectID'];
?>
