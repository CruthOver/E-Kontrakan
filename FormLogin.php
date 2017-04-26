<?php session_start(); include("Connections.php");
	/*Login*/
	if(isset($_POST['signIn'])){
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		$query = mysqli_query($conn, "SELECT * FROM owner WHERE username = '$user' AND password = '$pass'");
		$check = mysqli_num_rows($query);
		if($check == 1){
			$_SESSION['login'] = $user;
			header('location:Home.php');
		} else{
			?><script type="text/javascript">alert("Invalid Username Or Password !!!")</script><?php
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-success" style="width:400px; margin-left:370px; margin-top:150px">
			<div class="panel-heading"><b>Sign In</b>
				<a style="margin-left:190px" data-toggle="modal" data-target="#forgot" href="">Forgot Passoword?</a>
				<div class="modal fade" id="forgot" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Forgot Password</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal" method="POST">
											<div class="form-group">
												<label class="control-label col-sm-2" for="username"><span class="glyphicon glyphicon-user"></span></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="password"><span class="glyphicon glyphicon-lock"></span></label>
												<div class="col-sm-10">          
													<input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
															title="Password Harus 8 Karakter atau Lebih dan Terdiri dari Huruf Besar, Huruf Kecil dan Angka" 
															name="password" id="password" placeholder="Enter password" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="conf-password"><span class="glyphicon glyphicon-lock"></span></label>
												<div class="col-sm-10">          
													<input type="password" class="form-control" name="confirmPass" id="conf-password" placeholder="Confirm password" required>
												</div>
											</div>
											<div class="form-group">        
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-success" name="forgot">Change</button>
												</div>
											</div>
										</form>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
									</div>
								</div>
							</div>
						</div>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST">
					<div class="form-group">
						<label class="control-label col-sm-2" for="username"><span class="glyphicon glyphicon-user"></span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="password"><span class="glyphicon glyphicon-lock"></span></label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							</div>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="signIn" class="btn btn-success">Sign In</button>
						</div>
					</div>
				</form>
				<div class="panel panel-default">
					<div class="panel-body">
						Don't Have An Account? 
						<a data-toggle="modal" data-target="#signup" href="">Sign Up Here</a>
						<div class="modal fade" id="signup" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">SignUp Form</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal" method="POST">
											<div class="form-group">
												<label class="control-label col-sm-2" for="name"><span class="glyphicon glyphicon-user"></span></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="home"><span class="glyphicon glyphicon-home"></span></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Enter Address" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="phone"><span class="glyphicon glyphicon-phone"></span></label>
												<div class="col-sm-10">
													<input type="number" class="form-control" name="noHp" id="noHp" placeholder="Enter Phone Number" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="email"><span class="glyphicon glyphicon-envelope"></span></label>
												<div class="col-sm-10">
													<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="username"><span class="glyphicon glyphicon-user"></span></label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="password"><span class="glyphicon glyphicon-lock"></span></label>
												<div class="col-sm-10">          
													<input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
															title="Password Harus 8 Karakter atau Lebih dan Terdiri dari Huruf Besar, Huruf Kecil dan Angka" name="password" id="password" placeholder="Enter password" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="conf-password"><span class="glyphicon glyphicon-lock"></span></label>
												<div class="col-sm-10">          
													<input type="password" class="form-control" name="confirmPass" id="conf-password" placeholder="Confirm password" required>
												</div>
											</div>
											<div class="form-group">        
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-success" name="signUp">Sign Up</button>
												</div>
											</div>
										</form>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


<?php
	/*Register*/
	if(isset($_POST['signUp'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$noHp = $_POST['noHp'];
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		$confPass = md5($_POST['confirmPass']);
		$sql = mysqli_query($conn, "SELECT * FROM owner WHERE username = '$user'");
		$cek = mysqli_num_rows($sql);
		if($cek == 0){
			if($confPass == $pass){
				$query = mysqli_query($conn, "INSERT INTO user VALUES('$user','$name',$email,'$pass')");
				?><script type="text/javascript">alert("Registration Successfully !!!, Data Have Been Saved")</script><?php
			} else{
				?><script type="text/javascript">alert("Password Doesn't Match !!!")</script><?php
				}
		} else{
			?><script type="text/javascript">alert("Username Can't Be Used !!!")</script><?php
		}
	}
	
	if(isset($_POST['forgot'])){
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		$confPass = md5($_POST['confirmPass']);
		$sql = mysqli_query($conn, "SELECT * FROM owner WHERE username = '$user'");
		$cek = mysqli_num_rows($sql);
		if($cek >= 1){
				if($confPass == $pass){
					$query = mysqli_query($conn, "UPDATE user SET password = '$pass' WHERE username = '$user'");
					?><script type="text/javascript">alert("Change Password Successfully")</script><?php
				} else{
					?><script type="text/javascript">alert("Password Doesn't Match !!!")</script><?php
				}
		} else{
			?><script type="text/javascript">alert("Username Can't Be Found !! Change Password Failed !!")</script><?php
		}
	}
?>
