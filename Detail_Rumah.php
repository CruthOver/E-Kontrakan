<?php include("Connections.php")?>
<!-- Coba -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery_3_2_0.min.js"></script>
	<style>
		/* Remove the navbar's default rounded borders and increase the bottom margin */ 
		.navbar {
		  margin-bottom: 50px;
		  border-radius: 0;
		}
		
		/* Remove the jumbotron's default bottom margin */ 
		 .jumbotron {
		  margin-bottom: 0;
		}
	   
		/* Add a gray background color and some padding to the footer */
		footer {
		  background-color: #f2f2f2;
		  padding: 25px;
		}
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="Home.php">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">Perumahan
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="List-Permata-Buah-Batu.php">Permata Buah Batu</a></li>
							<li><a href="List-Permata-Buah-Batu_2.php">Permata Buah Batu 2</a></li>
							<li><a href="List-Palem_1.php">Palem 1</a></li> 
							<li><a href="List-Palem_2.php">Palem 2</a></li> 
							<li><a href="List-Pesona-Bali.php">Pesona Bali</a></li> 
						</ul>
					</li>
					<li><a href="AboutUs.php">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php session_start();
						if(isset($_SESSION['login']) == true){ ?>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown"><a data-toggle="dropdown" href=""><span class="glyphicon glyphicon-user"></span> Hello <?php echo $_SESSION['login'] ?></a>
									<ul class="dropdown-menu">
										<li><a href="">Profile</a></li>
										<li><a href="Logout.php">Logout</a></li>
									</ul>
								</li>
							</ul> <?php
						} else { ?>
							<li><a href="FormLogin.php"><span class="glyphicon glyphicon-user"></span> Login</a></li> <?php
						}
						?>
				</ul>
				
			</div>
		</div>
	</nav>
	<?php
		$query = mysqli_query($conn, "SELECT * FROM rumah_kontrakan");
		$jsArray = "var rmhName = new Array();\n";
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><h4><b>Spesifikasi Rumah</b></h4></div>
					<div class="panel-body">
						<table class="table table-striped table table-bordered">
							<tbody>
								<tr>
									<td>Perumahan</td>
									<td>Doe</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>Moe</td>
								</tr>
								<tr>
									<td>Harga</td>
									<td>Dooley</td>
								</tr><tr>
									<td>Kamar Tidur</td>
									<td>Dooley</td>
								</tr><tr>
									<td>Kamar Mandi</td>
									<td>Dooley</td>
								</tr><tr>
									<td>Air</td>
									<td>Dooley</td>
								</tr><tr>
									<td>Fasilitas</td>
									<td>Dooley</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
							<center><button type="button" class="btn btn-success" style="width:250px">Booking</button></center>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer class="container-fluid text-center">
		<p>3Hats Team Copyright</p>
		<p>Term And Privacy</p>
	</footer>
</body>
</html>
