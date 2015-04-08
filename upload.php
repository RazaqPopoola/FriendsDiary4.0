<?php 


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
								<strong>Media Upload</strong>
							</div><!--- End panel heading -->
							<div class="panel-body">	
								
								<form action="media.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="file" class="form-control" name="file[]"  multiple>
									</div>
									<!---
									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Enter Your Password">
									</div> -->
									
									<div class="form-group">
										<input type="submit" class="btn btn-success" name="upload" value="Upload">
									</div>
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