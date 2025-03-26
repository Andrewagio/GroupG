<?php
session_start();
require('connection.php');


$username=$_POST['username'];
$password=$_POST['password'];

$login="SELECT * FROM profile WHERE CAGD_CODE='$username' AND password = '$password'";
$result_login=mysqli_query($db_link, $login); 

	if (@mysqli_num_rows($result_login)==1){
		$_SESSION=mysqli_fetch_array($result_login,MYSQLI_ASSOC);
		header('location:dashboard.php');
	}else{?>
	<script type="text/javascript">
		alert("INVALID USERNAME");
		window.location.href = "index.php";
	</script><?php
	}
	mysqli_close($db_link);
?>
