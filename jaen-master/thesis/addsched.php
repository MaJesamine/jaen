<?php
$myadviser = $_GET['dv'];
$myyear_section = $_GET['yr'];
$mytime_start = $_GET['st'];
$mytime_end = $_GET['ed'];
$mysubject = $_GET['sb'];
$myteacher = $_GET['tc'];
session_start();
include('configure.php');
$sql="insert into sched values
('$myadviser','$myyear_section','$mytime_start','$mytime_end','$mysubject','$myteacher');";
mysql_query($sql);
?>
<script type="text/javascript">
	alert("New Record Added!");
		window.location='teachersched.php';
</script>