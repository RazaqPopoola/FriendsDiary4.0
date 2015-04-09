<?php 
	include('config/init.php');
	//securePage();
	//secureAdmin();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/adminNav.php') ?>;
				<div class="container">
					<?php 
						if(isset($_GET['success']) === true && empty($_GET['success']) === true){
						?>
							<p>Email has been sent to all the members</p>
					<?php
						}else{
							
							if (empty($_POST) === false) {
								if (empty($_POST['subject']) === true) {
									$errors[] = 'Subject is required';
								}
							
								if (empty($_POST['body']) === true) {
									$errors[] = 'Body is required';
								}
								if (empty($errors) === false) {
									echo outputErrors($errors);
								} else {
									
									mailMember($_POST['subject'], $_POST['body']);
									header('Location: mail.php?success');
									exit();		
								}
							}
					?>
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<strong>Email All Member</strong>
							</div><!--- End panel heading -->
								<div class="panel-body">
									<form action="" method="post">
										<div class="form-group">
											<input type="text" class="form-control" name="subject"  placeholder="Subject">
										</div>
										
										<div class="form-group">
											<textarea class="form-control" rows="10" name="body" placeholder="Body"></textarea>
										</div>
	
										<input type="submit" class="btn btn-success" value="Send">
									</form>
							</div><!--- End panel body -->		
						</div>	<!--- End panel-->
					</div><!--- End Col-->
				</div><!--- End Container-->
		</div><!--- End wrap -->
		
		<?php } ?>
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

