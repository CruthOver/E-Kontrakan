<?php session_start(); include ("session.php"); 
	// menyimpan data kedalam variabel
	if(isset($_POST['update'])){
		$id_rumah = $_POST['id_rumah'];
		$alamat = $_POST['alamat'];
		$harga = $_POST['harga'];
		$alamat = $_POST['alamat'];
		$kmr_tidur = $_POST['kmr_tidur'];
		$kmr_mandi = $_POST['kmr_mandi'];
		$air = $_POST['air'];
		$fasilitas = $_POST['fasilitas'];
		// query SQL untuk insert data
		$query = mysqli_query($conn, "UPDATE mahasiswa SET alamat='$alamat',harga='$harga',kmr_tidur='$kmr_tidur',kmr_mandi='$kmr_mandi',air='$air', fasilitas=$fasilitas where id_rumah='$id_rumah'");

			header("location:tables.php");
		
	}
	
?>