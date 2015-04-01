

<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/planNav.php') ?>;
				<div class="container">
					<div class="row">
  						<div class="col-sm-8">
    						.col-sm-8
    						<div class="row">
     				    		<div class="col-sm-6">
     				    			
     				    			<div class="panel panel-success">
										<div class="panel-heading">
											<strong>Login</strong>
										</div><!--- End panel heading -->
										<div class="panel-body">	
											
											<form action="" method="post">
												<div class="form-group">
													<input type="text" class="form-control" name="username" autocomplete="off" placeholder="Enter Your Username">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" name="password" placeholder="Enter Your Password">
												</div>
												
												<div class="checkbox">
													<label for="remember">
													<input type="checkbox" name="remember" id="remember"> Remember Me
													</label>
												</div>
												
												<input type="submit" class="btn btn-success" value="Login">
											</form>
										</div><!--- End panel body -->	
									</div>	<!--- End panel-->
									<!--- End of loginand start of register-->
									<div class="panel panel-success">
										<div class="panel-heading">
											<strong>Register</strong>
										</div><!--- End panel heading -->
										<div class="panel-body">	
											<form action="" method="post">
												<div class="form-group">
													<input type="text" class="form-control" name="username" autocomplete="off" placeholder="Enter Your Username">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" name="password" placeholder="Enter Your Password">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" name="password_again"  placeholder="Enter Your Password Again">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="fName"  placeholder="Enter Your Full First Names">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="lName"  placeholder="Enter Your Full Last Name">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="email"  placeholder="Enter Your Acitive Email">
												</div>
												
												<input type="submit" class="btn btn-success" value="Register">
											</form>
										</div><!--- End panel body -->	
									</div>	<!--- End panel-->
     				    		</div> <!--- End col for login and register-->
      							<div class="col-sm-6">
      								
      								
      							</div>
    						</div><!--- End row--col 8 -->
 					 	</div><!--- End row l&r -->
					</div><!--- End row-->
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>
