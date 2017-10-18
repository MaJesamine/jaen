<?php
/**phpscript(loginscript)**/

$myusername = $_GET ['un']; //getting the the input value from username
$mypassword = $_GET ['pw']; //getting the the input value from password

session_start(); //start the session_cache_expire
include("configure.php"); //must verify the database
$sql="SELECT * FROM teacher WHERE username ='$myusername' and  password ='$mypassword'";//select if there is existing database
$result=mysql_query($sql); //verifying the result
$count=mysql_num_rows($result); //getting the result

//If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1) 
{
	$_SESSION['login_user']=$myusername; //get the session and record iterator_apply
	?>
	<script type ="text/javascript">
	alert("Welcome po!!!!!!!!!!!!!!!")
	window.location ='teacherprofile.php';
	</script>
	<?php
}
else
{
	$_SESSION['login_msg'] =1; //return session ?>
	<script type ="text/javascript">
	alert("Wrong Username or Password"); //popup message/notification
	window.location='teacherlog.php'; //re-direct to the main page
	</script>
	<?php
	

}


?>