<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

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

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading"><b>Sign In</b>
						<a style="margin-left:150px" data-toggle="modal" data-target="#forgot" href="">Forgot Passoword?</a>
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
                    </div><br>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input class="form-control" placeholder="Enter Password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="signIn">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>