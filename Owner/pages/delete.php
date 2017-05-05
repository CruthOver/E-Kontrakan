<?php session_start(); include ("session.php"); 
// menyimpan data id kedalam variabel
	$id = $_GET['id'];
	// query SQL untuk insert data
	$query=mysqli_query($conn, "DELETE from rumah_kontrakan where id_rumah='$id'");
	if($query){
		header("location: tables.php");
	}
?>