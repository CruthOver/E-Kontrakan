<?php
	include("../../Connections.php");
	if(!isset($_SESSION['owner'])){
		header("location:login.php");
	}
?>