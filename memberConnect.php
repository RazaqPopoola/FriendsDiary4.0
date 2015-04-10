<?php
	include('config/init.php')

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Member Connect</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/planNav.php') ?>;
				<div class="container">
					<div class="row">
					    <div class="col-md-8"> 
					    	<div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>Search for Members</strong>
										</div><!--- End panel heading -->
										
										
									</div>	<!--- End panel-->
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-6">Span 3</div>
					            <div class="col-md-6">Span 3</div>
					        </div>
					    </div>
					    <div class="col-md-4">
					        <div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>List of Friends</strong>
										</div><!--- End panel heading -->
										
										
									</div>	<!--- End panel-->
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>People on FsD</strong>
										</div><!--- End panel heading -->
										
										
									</div>	<!--- End panel-->
					            </div>
					        </div>
					    </div>
					</div>
					<div class="row">
					    <div class="col-md-8">Span 4</div>
					</div>
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

