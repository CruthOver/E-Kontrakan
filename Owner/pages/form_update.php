<?php session_start(); include ("session.php"); 

	$id = $_GET['id'];
	$query = mysqli_query($conn, "select * from rumah_kontrakan where id_rumah = '$id'");
	$row = mysqli_fetch_array($query);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Kontrakan Online</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SI_Kontrakan Online</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
							<h4><span class="glyphicon glyphicon-user">
							<?php echo $_SESSION['owner'] ?></span></h4>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-plus-circle fa-fw"></i> Input Data Kontrakan</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Data Kontrakan</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Data Booking</a>
                        </li>
						<li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
			<div class="row">
				<form class="form-horizontal" method="POST">
					<div class="col-lg-8">
						<div class="form-group">
							<div class="control-label col-sm-2" for="username"><b>Nama Perum : </b></div>
							<div class="col-sm-10">
							<?php
								$sql = mysqli_query($conn, "SELECT * FROM perumahan");
								$cek = mysqli_num_rows($sql);
								?>
								<select name="Data" class="form-control"><?php
								while($data = mysqli_fetch_array($sql)){
									echo "<option value=".$data['id_perum'].">". $data['nama_perum'] ."</option>";
								}?>
								</select>
							</div>
						</div>
						<input type="hidden" value="<?php echo $row['id_rumah'];?>" name="id_rumah">
						<div class="form-group">
							<label class="control-label col-sm-2" for="alamat"><b>Alamat </b></label>
							<div class="col-sm-10">
								<input type="text" value="<?php echo $row['alamat_rumah'];?>" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="harga"><b>Harga </b></label>
							<div class="col-sm-10">
								<input type="number" value="<?php echo $row['harga'];?>" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="kmr_tidur"><b>Kamar Tidur </b></label>
							<div class="col-sm-10">
								<input type="number" value="<?php echo $row['kmr_tidur'];?>" class="form-control" name="kmr_tidur" id="kmr_tidur" placeholder="Jumlah Kamar Tidur">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="kmr_mandi"><b>Kamar Mandi </b></label>
							<div class="col-sm-10">
								<input type="number" value="<?php echo $row['kmr_mandi'];?>" class="form-control" name="kmr_mandi" id="kmr_mandi" placeholder="Jumlah Kamar Mandi">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="air"><b>Air </b></label>
							<div class="col-sm-10">
								<input type="text" value="<?php echo $row['air'];?>" class="form-control" name="air" id="air" placeholder="Type Air">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="fasilitas"><b>Fasilitas </b></label>
							<div class="col-sm-10">
								<input type="text" value="<?php echo $row['fasilitas'];?>" class="form-control" name="fasilitas" id="fasilitas" placeholder="Fasilitas">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="fasilitas"><b>Gambar </b></label>
							<div class="col-sm-10">
								<input type="file" value="<?php echo $row['gambar'];?>" name="imageUpload" id="imageUpload" placeholder="Fasilitas">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success" name="update">Update</button>
							</div>
						</div>
					</div>
					<!-- /.col-lg-8 -->
				</form>
			</div>
		</div>
        <!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	
	
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
<?php 
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
		$query = mysqli_query($conn, "UPDATE rumah_kontrakan SET alamat='$alamat',harga='$harga',kmr_tidur='$kmr_tidur',kmr_mandi='$kmr_mandi',air='$air', fasilitas=$fasilitas WHERE id_rumah='$id_rumah'");
		if($query){
			?><script type="text/javascript">alert("Data Successfully Updated !!")</script><?php
		} else{
			?><script type="text/javascript">alert("Data Failed	 Updated !!")</script><?php
		}
	}