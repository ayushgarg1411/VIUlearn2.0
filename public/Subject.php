
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
	<title>Subject Page</title>
	<link rel="stylesheet" href="../css/subcss.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="HandheldFriendly" content="true">
</head>
<body onload="bbooddyy()" style="background-color: #222;">

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
		$mystmt = "select subID, assL, readL, PYEL, insL from subjects where subID='$subI';";
		if($subI!="") {
			$mystmt .=" update subjects SET extra='$subI'"; 
		}
		else {
			$mystmt = " select subID, assL, readL, PYEL, insL from subjects where subID=extra";
		}
		
		//query the db
		$rslt = $myHandle->query($mystmt);
		//iterate through the returned results, and build an array of books
		
		foreach ($rslt as $row){
				
			//retrieving Each value of a row 
				$ubID = $row['subID'];
				$ssL = $row['assL'];
 				$eadL = $row['readL'];
 				$YEL = $row['PYEL'];
 				$nsL = $row['insL'];
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
		<li><a id="bar" href="Subject2.php">Change Contrast</a></li>
		<li><a id="bar" href="logout.php">Log Out</a></li>
	</ul>
</nav>
<div class="main">

	<h2 id="heading"><?php echo $ubID; ?></h2><br><br><br>

	
	<div class="box1">
		<div class="leftside" id="content" onclick="goBack()">Content</div>
		<div class="rightside" id="assign" onclick="goforward()">Assignment</div>
	</div><br><br><br><br>
		<div><br><br>
			<div ><a href="<?php echo $eadL; ?>" target="_blank" class="hvr">Reading</a></div><br><br>
			<div ><a href="<?php echo $YEL; ?>" target="_blank" class="hvr">Previous Year Exam</a></div><br><br>
			<div ><a href="<?php echo $nsL; ?>" target="_blank" class="hvr" >About Instructor</a></div>
		</div>	
	</div>

<script>
	function bbooddyy() {
		document.getElementById("content").disabled = true;
	}
	function goBack() {
  
  document.getElementById("content").disabled = true;
	}
	function goforward() {
		document.getElementById("content").disabled = false;
		window.location.assign("assignment.php");
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
