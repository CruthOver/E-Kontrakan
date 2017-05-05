<?php session_start(); include ("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Kontrakan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	
    <!-- jquery-confirm files -->
    <link rel="stylesheet" type="text/css" href="../css/jquery-confirm.css"/>

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
                <a class="navbar-brand" href="index.html">SI_Kontrakan Online</a>
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
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
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
                    <h1 class="page-header">Data Kontrakan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
					$user = $_SESSION['owner'];
					$sql = mysqli_query($conn, "SELECT * FROM rumah_kontrakan,perumahan where rumah_kontrakan.id_perum = perumahan.id_perum and rumah_kontrakan.username = '$user'");
					$cek = mysqli_num_rows($sql);
					$i = 0;
					if($sql){ ?>
						<!-- /.row -->
						<div class="row">
							<div class="col-lg-12">
								<a href="index.php">
									<button type="button" class="btn btn-default">
										<span class="glyphicon glyphicon-plus"></span> Tambah
									</button>
								</a><br><br>
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>		
											<tr>
												<th>No.</th>
												<th>Perumahan</th>
												<th>Alamat</th>
												<th>Harga</th>
												<th>Kamar Tidur</th>
												<th>Kamar Mandi</th>
												<th>Air</th>
												<th>Fasilitas</th>
												<th>Aksi</th>
											</tr>
										</thead> 
										<tbody><?php
						if($cek){
							foreach($sql as $view){
								$i++;
								$nama_perum = $view['nama_perum'];
								$alamat = $view['alamat_rumah'];
								$harga = $view['harga'];
								$kmr_tidur = $view['kmr_tidur'];
								$kmr_mandi = $view['kmr_mandi'];
								$air = $view['air'];
								$fasilitas = $view['fasilitas'];
								?>
								<tr class="center">
									<td><?php echo $i ?></td>                                
									<td><?php echo $nama_perum ?></td>
									<td><?php echo $alamat ?></td>
									<td><?php echo $harga ?></td>
									<td><?php echo $kmr_tidur ?></td>
									<td><?php echo $kmr_mandi ?></td>
									<td><?php echo $air ?></td>
									<td><?php echo $fasilitas ?></td>
									<td>
										<a href="form_update.php?id=<?php echo $view['id_rumah']?>"><input type="submit" class="btn btn-success" name="edit" value="Edit"></a><br>
										<a href="delete.php?id=<?php echo $view['id_rumah']?>"><button style="margin-top:5px" type="submit" class=" btn btn-danger" name="hapus">Hapus</button></a>
									</td>
								</tr> 
							<?php
							} ?>
								</tbody>	
							</table> 
							<!-- /.table-responsive -->
						</div>
							<!-- /.col-lg-12 -->
					</div>
						<?php
						}
					}
					?>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Add the minified version of files from the /dist/ folder. -->
    <!-- jquery-confirm files -->
    <script type="text/javascript" src="../js/jquery-confirm.js"></script>
	
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
	
	<script type="text/javascript">
		$('.example2').on('click', function () {
			$.confirm({
				title: 'Delete',
				content: 'Are You Sure Want Delete ?',
				animation: 'scaleX',
				closeAnimation: 'scaleX',
				theme: 'bootstrap',
				buttons: {
					confirm: {
						text: 'Delete',
						btnClass: 'btn-danger',
						keys: ['enter', 'shift'],
						action: function () {
							$.alert('Data Has Been Deleted!');
						}
					},
					Cancel: {
						text: 'Cancel',
						btnClass: 'btn-default',
						keys: ['enter', 'shift']
					}
				}
			});
		});
	</script>


</body>

</html>
