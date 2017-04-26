<?php include("Connections.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
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
		  margin-top:200px;
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
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Perumahan
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
	<div class="container text-center">
		<h1>About Us</h1>      
		<p>Web ini untuk memudahkan masyrakat untuk mencari kontrakan dengan mudah.<br> Termasuk untuk membantu mahasiswa yang membutuhkan kontrakan
		yang dekat dengan universitas nya. <br>Web ini menyediakan list-list rumah yang dikontrakan disetiap daerah, </p>
	</div><br><br>
<center>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail" style="width:250px">
				<a href="#">
					<img src="user-icon.png" class="img-thumbnail img-responsive" alt="Image" style="width:100%">
					<div class="caption">
						<p>3Hats Team Developer</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail" style="width:250px">
				<a href="ContactUs.php">
					<img src="phone-icon.png" class="img-thumbnail img-responsive" alt="Image" style="width:100%">
					<div class="caption">
						<p>Contact Us</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail" style="width:250px">
				<a href="#">
					<img src="user-icon.png" class="img-thumbnail img-responsive" alt="Image" style="width:100%">
					<div class="caption">
						<p>Lorem ipsum...</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</center>
	<footer class="container-fluid text-center">
		<p>3Hats Team Copyright</p>
		<p>Term And Privacy</p>
	</footer>
</body>
</html>
