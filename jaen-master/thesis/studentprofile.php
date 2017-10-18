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
				<li class="current_page_item"><a href="studentprofile.php" accesskey="1" title="">Profile</a></li>
				<li><a href="studentsched.php" accesskey="2" title="">Schedule</a></li>
				<li><a href="studentgrades.php" accesskey="3" title="">Grades</a></li>
				<li><a href="logout.php" accesskey="5" title="">Log Out</a></li>
			</ul>
		</div>
	</div>
	<div id="main">

		<div id="welcome">
			<div class="title">
				<h2>Student Profile
				<img src="images/l.png" align="right" /></h2>
			</div>
		</div>
		<div id="featured">
			<div class="title">
			<br /><br />
				<table  width="90%">
						<td colspan="2"><b>Name:</b>&nbsp;<?php echo $row['name'];?></td>
						<td>Age:&nbsp;<b><?php echo $row['age'];?></b></td>
						<tr></tr>
						<td colspan="2"><b>Date of Birth:&nbsp;</b><?php echo $row['bday'];?></td>
						<td>Nationality:&nbsp;<b><?php echo $row['nationality'];?></b></td>
						<tr></tr>
						<td colspan="2">Address:&nbsp;<b><?php echo $row['address'];?></b></td><td>Mobile No.:&nbsp;<b><?php echo $row['pnumber'];?></b></td>
						<tr></tr>
						<td colspan="2">Educational Attainment:&nbsp;<b><?php echo $row['educAttainment'];?></b></td>
						<td>Religion:&nbsp;<b><?php echo $row['religion'];?></b></td>
						<tr></tr>
						<td colspan="2">Fahter:&nbsp;<b><?php echo $row['father'];?></b></td>
						<td>Occupation:&nbsp;<b><?php echo $row['father_occupation'];?></b></td>
						<tr></tr>
						<td colspan="2">Mother:&nbsp;<b><?php echo $row['mother'];?></b></td>
						<td>Occupation:&nbsp;<b><?php echo $row['mother_ocupation'];?></b></td>
						<tr></tr>
						<td colspan="2">Parents/Guardian Contact No.:&nbsp;<b><?php echo $row['guardian_num'];?></b></td>
						<tr></tr>
						<td colspan="2">No. Of Children in the Family:&nbsp;<b><?php echo $row['no_children'];?></b></td>
						<tr></tr>
						<td>No. Of Boys:&nbsp;<b><?php echo $row['no_boys'];?></b></td>
						<tr></tr>
						<td>No. Of Boys:&nbsp;<b><?php echo $row['no_girls'];?></b></td>
						<tr></tr>
							<td colspan="2">Elementary School Graduated:&nbsp;<b><?php echo $row['Elementary_grudauted'];?></b></td>
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
