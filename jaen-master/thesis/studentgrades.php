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
<style>
table.one {
  border-collapse: collapse;

 
}
</style>

</head>
<body>
<?php
SESSION_START();
include("configure.php");
include("Lock.php");
?>


	
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<h1><a href="studentdprofile.php"><?php echo $row['name'];?></a></h1>
			<span><?php echo $row['lrn'];?></span>
			<br />
			<span>Year & Section</span>
		</div>
		<div id="menu">
			<ul>
				
				<li><a href="studentdprofile.php" accesskey="1" title="">Profile</a></li>
				<li><a href="studentsched.php" accesskey="2" title="">Schedule</a></li>
				<li class="current_page_item"><a href="studentgrades.php" accesskey="3" title="">Grades</a></li>
				<li><a href="logout.php" accesskey="5" title="">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="main">

		<div id="welcome">
			<div class="title">
				<h2>Student Grades
				<img src="images/l.png" align="right" /></h2>
			</div>
		</div>
		<div id="featured">
			<div class="title">
		<p>Year and Section</p>
  <table class="one" width="48%" border="1">
  <td></td>
  <td colspan="4" align=" center">Quarter</td>
  <td></td><td></td>
  <tr></tr>
  <td align=" center">Learning Areas</td>
  <td>1st</td>
  <td>2nd</td>
  <td>3rd</td>
  <td>4th</td>
   <td align=" center">Final Grade</td>
  <td align=" center">Remarks</td>
  <tr></tr>
  <td>Filipino</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>English</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Mathematics</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Science</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Araling <br />Panlipunan (AP)</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Edukasyon sa <br />Pagpapakatao (EsP)</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Technology and <br />Livelihood <br />Education (TLE)</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>MAPEH</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Music</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Arts</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Physical Educ.</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td>Health</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">#</td>
  <td align="center">###</td>
  <tr></tr>
  <td></td>
  <td colspan="4"> GENERAL AVERAGE</td>
  <td>###</td>
  
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
				<b><p>Schools Attended:</p></b>
					<table  width="100%">
						<td align="center">School</td><td align="center">School Year</td><td align="center">Year And Section</td><td align="center">Class Adviser</td>
						<tr></tr>
						<td align="center">..................</td>
						<td align="center">............</td>
						<td align="center">...........</td>
						<td align="center">..............</td>
						<tr></tr>
						<td align="center">..............</td>
						<td align="center">...............</td>
						<td align="center">............</td>
						<td align="center">...............</td>
  
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
