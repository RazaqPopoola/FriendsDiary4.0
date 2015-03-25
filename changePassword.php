<?php

	include('config/setup.php'); 
	//securePage();
	
	if(empty($_POST) === false) {
		
		
		$requiredFields = array('currentPassword', 'password', 'passwordAgain');
		foreach($_POST as $key=>$value) {
			if(empty($value) && in_array($key, $requiredFields) === true) {
				$errors[] = 'Fields marked with an asterisk are required';
				break 1;
			}	
		}
		
		
		if (md5($_POST['currentPassword']) === $memberData['password']) {
			
			if (trim($_POST['password']) !== trim($_POST['passwordAgain'])) {
				$errors[] = 'Your new passwords do not match';
			}else if (strlen($_POST['password']) < 6) {
				
				$errors[] = 'Your password must be at least 6 characters';
			}
		} else {
			
			$errors[] = 'Your current password is incorrect';
		}
		
		echo $memberData['password'];

	}
	
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Change Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/navigation.php') ?>;
				<?php 
				
					if(isset($_GET['success']) && empty($_GET['success'])){
					
						echo 'Welcome to FriendsDiary your regissration is successful';
					}else{
				
						if(empty($_POST) === false && empty($errors) === true){
						
							changePassword($sessionMemberID, $_POST['password']);
							header('Location: changePassword.php?success');
						}else if(empty($errors) === false){
						
							echo outputErrors($errors);
						}
				?>
			<div class="container">
				<div class="row"> 
					<div class="col-md-4 col-md-offset-4"> 
						<div class="panel panel-success">
							<div class="panel-heading">
								<strong>Change Password</strong>
							</div><!--- End panel heading -->
							<div class="panel-body">	
								<form action="" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="currentPassword" autocomplete="off" placeholder="Enter Current Password">
									</div>
									<div class="form-group">
										<input type="ext" class="form-control" name="password" placeholder="Enter Your Password">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="passwordAgain"  placeholder="Enter Your Password Again">
									</div>
								
										<input type="submit" class="btn btn-success" value="Change Password">
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



