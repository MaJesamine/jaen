<!DOCTYPE html>



<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin LogIn</title>
<link rel="shortcut icon" href="images/l.png" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/log.css" rel="stylesheet" type="text/css" media="all" />

<style>

body {
background: url(images/v.jpg);
background-size: 1350px 1000px;
background-repeat: no-repeat;
padding-top: 40px;

}
</style>
</head>
<body>
<?php

include("configure.php");

?>
<div id="header" class="container">
<img src="images/logo.png" />
	<div id="logo">
		
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.php" accesskey="1" title="">Student</a></li>
			<li><a href="adminlog.php" accesskey="1" title="">Teacher</a></li>
			<li><a href="adminlog.php" accesskey="1" title="">Admin</a></li>
		</ul>
	</div>
</div>
<div id="wrapper" class="container">
	<div id="page">
		<div id="content"><img src="images/missionvission.png" width="600" height="250" alt="" />

			
		</div>
		<div id="sidebar">
			<div id="sbox1">
				<h2>Admin Log In</h2>
				<ul class="list-style1">
					 <form action="alogin.php"">
							<input type="text" placeholder="Username" name="un" required="required">
							<input type="password" placeholder="Password" name="pw" required="required">
							<br />
							<button>Login</button>

					</form>
						
				</ul>
			</div>
			<div id="sbox2">
				
					<ul class="list-style2">
						
						
					</ul>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy; JaenHigh | Modify by: <a href="#"> Mariel Macaso</a></p>
</div>
</body>
</html>
