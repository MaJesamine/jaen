<?php
include('configure.php');
session_start();
if(session_destroy());
{
?>
<script type="text/javascript">
	alert('<?php echo "GOODBYE!";?>');
		window.location='index.php';
		</script>
		<?php
}
?>