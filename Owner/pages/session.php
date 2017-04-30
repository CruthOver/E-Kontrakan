<?php
	include("../../Connections.php");
	$user_check = $_SESSION['owner'];
	$sql = mysqli_query($conn,"select username from owner where username = '$user_check' ");
	if(!isset($_SESSION['owner'])){
		header("location:login.php");
	}
?>