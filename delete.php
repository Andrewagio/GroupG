<?php
	include 'db.php';
	$id = $_GET['id'];
	$sql = "Delete from users where md5(id) = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data"or die("error".mysqli_errno($db_link));
		header('location:admin_dashboard.php');
	}else{
		echo "Oppps something error "or die("error".mysqli_errno($db_link));
	}
	$conn->close();
?>