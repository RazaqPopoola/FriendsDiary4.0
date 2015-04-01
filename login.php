<?php 

	include('config/init.php'); 
	loggedInRedirect();
	
	if (empty($_POST) === false) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if (empty($username) === true || empty($password) === true) {
			
			$errors[] = 'You must enter a username and password';
			
		}else if (memberExists($username) === false){
			
			$errors[] = 'Username do not exsits. You have to registered first';
			
		}else if (memberActive($username) === false){
			
			$errors[] = 'You need to activated your account! through your email account';
			
		}else{
			
			if(strlen($password) > 32){
				$errors[] = 'Password is too long';
			}
			
			$login = login($username, $password);
			if ($login === false) {
				
				$errors[] = 'That username/password combination is incorrect';
			} else{
				
				$_SESSION['memberID'] = $login;
				$data = loginRole($_SESSION['memberID']);
				if ($data['type'] == 0) {
					header('Location: profile.php');
				} else if ($data['type'] == 1) {
					header('Location: admin.php');
				}
				exit();	
			}
		}
	}else {
		$errors[] = 'No data received';
	}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/planNav.php') ?>;
			
			<?php if(empty($errors) === false)
				 echo outputErrors($errors);  ?>
			<div class="container">
				
				<div class="row"> 
					<div class="col-md-4 col-md-offset-4"> 
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
									
									<input type="submit" class="btn btn-success" name="login" value="Login">
								</form>
							</div><!--- End panel body -->	
						</div>	<!--- End panel-->
					</div><!--- End Col-->
				</div><!--- End Row -->
			</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>