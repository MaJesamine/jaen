<!DOCTYPE html>


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Home</title>
<link rel="shortcut icon" href="images/l.png" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href=" css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<?php
SESSION_START();
include("configure.php");
include("alock.php");
?>


	
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<h1><a href="studentprofile.php">Name</a></h1>
			<span>I.D Number</span>
			<br />
			
		</div>
		<div id="menu">
			<ul>
				<li><a href="teacherprofile.php" accesskey="1" title="">Profile</a></li>
				<li><a href="teachersched.php" accesskey="2" title="">Schedule</a></li>
				<li><a href="teachergrades.php" accesskey="3" title="">Grades</a></li>
				<li><a href="logout.php" accesskey="5" title="">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="main">

		<div id="welcome">
			<div class="title">
				<h2>Admin
				<img src="images/l.png" align="right" /></h2>
			</div>
		</div>
		<div id="featured">
			<div class="title">
			<br /><br />
				<table  width="90%">
						<td>
						<button>Add Student</butoon>
						</td>
						<tr></tr>
						<td>
						<button>Add Teacher</butoon>
						</td>
						
						</table>
			</div>
			<div id="featured">
			<div class="title">
			</div>
			<h3>Add Teacher</h3>
				<table  width="90%">
				<br /><br />
				<td colspan="2">Name:</td>
						<td>Age:</td>
						<tr></tr>
						<td colspan="2">Date of Birth:</td>
						<td>Nationality:</td>
						<tr></tr>
						<td colspan="2">Address:</td>
						<tr></tr>
						
				</table>
			</div>
			<ul class="style1">
				<li class="first">
				
					<table  width="100%">
						
  
					</table>
				</li>
			</ul>
		</div>
		<div id="copyright">
			<span><p>&copy; JaenHigh | Modify by: <a href="#"> Mariel Macaso</a></p></span>
			
		</div>
	</div>
</div>
</body>
</html>
