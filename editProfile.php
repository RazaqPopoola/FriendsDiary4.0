<?php

	include('config/init.php'); 
	
	if(empty($_POST) === false){
		
		$requiredFields = array('fName', 'lName', 'email');
		foreach ($_POST as $key=>$value) {
		
			if(empty($value) && in_array($key, $requiredFields) === true){
			
				$errors[] = 'All fields are required please';
				break 1;	
			}
		}
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
										<input type="text" class="form-control" name="fName" value="<?php echo $memberData['fName']; ?>" placeholder="Enter first Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="lName" value="<?php echo $memberData['lName']; ?>" placeholder="Enter Last Name>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="email"  value="<?php echo $memberData['email']; ?>" placeholder="Enter Your email">
									</div>
								
										<input type="submit" class="btn btn-success" value="Update">
								</form>
								
								
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



