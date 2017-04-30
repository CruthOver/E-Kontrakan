<?php
	session_start();
	if(isset($_SESSION['owner'])){
		session_destroy();
		header('location:login.php');
	} 
?>