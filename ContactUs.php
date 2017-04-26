<?php include("Connections.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOME</title>
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
	<div id="contact" class="container-fluid bg-grey">
		<h2 class="text-center">CONTACT</h2>
		<div class="row">
			<div class="col-sm-5">
				<p>Contact us and we'll get back to you within 24 hours.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
				<p><span class="glyphicon glyphicon-phone"></span> 085956526225</p>
				<p><span class="glyphicon glyphicon-envelope"></span> b3ng.b3ng16@gmail.com</p>
			</div>
			<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-default pull-right" type="submit">Send</button>
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
