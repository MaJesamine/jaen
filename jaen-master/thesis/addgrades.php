<?php
$myyearSection = $_GET['sy'];
$mylrn = $_GET['lrn'];
$myfirst = $_GET['ft'];
$mysecond = $_GET['sc'];
$mythird = $_GET['th'];
$myfourth = $_GET['fh'];
$myfinalGrade = $_GET['fg'];
$myremarks = $_GET['rm'];
$mygeneralaverage = $_GET['gv'];
session_start();
include('configure.php');
$sql="insert into grades values
('$myyearSection','$mylrn','$myfirst','$mysecond','$mythird','$myfourth','$myfinalGrade','$myremarks','$mygeneralaverage');";
mysql_query($sql);
?>
<script type="text/javascript">
	alert("New Record Added!");
		window.location='teachergrades.php';
</script>