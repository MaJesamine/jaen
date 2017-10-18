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
table{
  border-collapse: collapse;
  align: center;
  text-align: center;

 
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
	
				<li><a href="studentprofile.php" accesskey="1" title="">Profile</a></li>
				<li class="current_page_item"><a href="studentsched.php" accesskey="2" title="">Schedule</a></li>
				<li><a href="studentgrades.php" accesskey="3" title="">Grades</a></li>
				<li><a href="logout.php" accesskey="5" title="">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="main">

		<div id="welcome">
			<div class="title">
				<h2>Student Scedule
				<img src="images/l.png" align="right" /></h2>
			</div>
		</div>
		<div id="featured">
			<div class="title">
			<br /><br />
				<table  border="1"width="90%">
				
						<td  align="center" colspan="2">Adiser</td>
						<td  align="center" colspan="2"><b>Adiser Name</b></td>
						<tr></tr>
						<td  align="center" colspan="2"><b>Time</b></td>
						<td  align="center"colspan="3"><b>Year and Section</b></td>
						<tr></tr>
						<td colspan="2"></td>
						<td  align="center"><b>Subject</b></td>
						<td  align="center"><b>Teacher</b></td>
						<tr></tr>
						<td  align="center"><b>7:30</b></td>
						<td  align="center"><b>8:30</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>8:30</b></td>
						<td  align="center"><b>9:30</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>9:30</b></td>
						<td  align="center"><b>10:30</b></td>
						<td  align="center">break time</td>
						<td  align="center"></td>
						<tr></tr>
						<td  align="center"><b>10:00</b></td>
						<td  align="center"><b>11:00</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>11:00</b></td>
						<td  align="center"><b>12:00</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>12:00</b></td>
						<td  align="center"><b>1:00</b></td>
						<td  align="center">lunch break</td>
						<td  align="center"></td>
						<tr></tr>
						<td  align="center"><b>1:00</b></td>
						<td  align="center"><b>2:00</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>2:00</b></td>
						<td  align="center"><b>3:00</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>3:00</b></td>
						<td  align="center"><b>4:00</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
						<tr></tr>
						<td  align="center"><b>4:00</b></td>
						<td  align="center"><b>5:00</b></td>
						<td  align="center">Oral Communication in Context</td>
						<td  align="center">Ma. Verdiosa Manalang</td>
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
	
					<p class="date"><a href="#">June<b>05</b></a></p>
					<h3>Back to school</h3>
					<p>addadadadfffdfdsfdsfsfs</p>
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
