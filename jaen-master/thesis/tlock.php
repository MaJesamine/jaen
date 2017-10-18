<?php
include('configure.php');
$check = $_SESSION['login_user'];
$sql = "select * from teacher where username='$check';";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$count = mysql_num_rows($result);
if($count == 1)
{
$login_session=$row['username'];
}
else
{
header("location:teacherlog.php");
}
?>