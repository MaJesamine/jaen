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
include("tlock.php");

?>


	
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<p>&nbsp;<?php echo $row['name'];?>&nbsp;<?php echo $row['m.d'];?>&nbsp;<?php echo $row['last'];?></p>
			<br />
			<span><?php echo $row['id'];?></span>
			<br />
		</div>
		<div id="menu">
			<ul>
				
				<li class="current_page_item"><a href="teacherprofile.php" accesskey="1" title="">Profile</a></li>
				<li><a href="teachersched.php" accesskey="2" title="">Schedule</a></li>
				<li><a href="teachergrades.php" accesskey="3" title="">Grades</a></li>
				<li><a href="logout.php" accesskey="5" title="">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="main">

		<div id="welcome">
			<div class="title">
				<h2>Teacher Profile
				<img src="images/l.png" align="right" /></h2>
			</div>
		</div>
		<div id="featured">
			<div class="title">
			<br /><br />
				<table  width="90%">
						<td colspan="2"><b>Name:</b>&nbsp;<?php echo $row['name'];?> &nbsp;<?php echo $row['middle'];?>&nbsp;<?php echo $row['last'];?></td>
						<td><b>Age:</b>&nbsp;<?php echo $row['age'];?></td>
						<tr></tr>
						<td><b>I.D:</b>&nbsp;<?php echo $row['id'];?></td>
						<td colspan="2"><b>Date of Birth:&nbsp;<?php echo $row['bday'];?></b></td>
						
						<tr></tr>
						<td colspan="2"><b>Address:&nbsp;</b><?php echo $row['address'];?></td><td><b>Mobile No.:&nbsp;</b><?php echo $row['mobile'];?></td>
						<tr></tr>
						
						</table>
			</div>
			<div id="featured">
			<div class="title">
			</div>
				<table  width="90%">
			
				</table>
			</div>
			<ul class="style1">
				<li class="first">
				<b><h1>Subjects Loads</h1></b>
				<br /><br /><br />
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
