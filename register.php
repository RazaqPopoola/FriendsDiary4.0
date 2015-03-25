<?php 
	
	include('config/setup.php');
	loggedInRedirect();
	
	if (empty($_POST) === false) {
		
		$requiredFields = array('username', 'password', 'password_again', 'fName', 'lName', 'email');
		foreach ($_POST as $key=>$value) {
		
			if(empty($value) && in_array($key, $requiredFields) === true){
			
				$errors[] = 'All fields are required please';
				break 1;	
			}
		}
		
		if(empty($errors) === true) {
			
			if(memberExists($_POST['username']) === true) {
				$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';	
		}
			
		if(preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Your username must not contain any spaces.';
		}
		
		if(strlen($_POST['password']) <= 6) {
			
			$errors[] = 'Your password must be at least 6 characters';		
		}
		
		if($_POST['password'] !== $_POST['password_again']) {
			
			$errors[] = 'Your passwords do not match';
		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			
			$errors[] = 'Your  email address is not valid';
		}
		if(emailExists($_POST['email']) === true) {
			
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use';
		}
	}
		
}
	
	print_r($errors);
		

 ?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/planNavigation.php') ?>;
			
			<?php 
				
				if(isset($_GET['success']) && empty($_GET['success'])){
					
					echo 'Welcome to FriendsDiary your regissration is successful. Please activate your FriendsDairy account through your email.';
				}else{
				
					if(empty($_POST) === false && empty($errors) === true){
						
						$registerData = array(
						
							'username' => $_POST['username'],
							'password' => $_POST['password'],
							'email' => $_POST['email'],
							'emailCode' => md5($_POST['emailCode'] + date()),
							'fName' => $_POST['fName'],
							'lName' => $_POST['lName']
						);
						
						registerMember($registerData);
						header('Location: register.php?success');
					}else if(empty($errors) === false){
						
						echo outputErrors($errors);
					}
			
			?>
			<div class="container">
				<div class="row"> 
					<div class="col-md-4 col-md-offset-4"> 
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
								<?php } ?>
							</div><!--- End panel body -->	
						</div>	<!--- End panel-->
					</div><!--- End Col-->
				</div><!--- End Row -->
			</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php') ?>
	</footer>
	
</html>
