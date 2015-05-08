
<html>
	<head>
		<title>Watch Video </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
				
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Audio Player
								</div>
								<div class="panel-body">
									<div >
										<?php 
											
											$music = $_GET['music'];
										
										 ?>
										<audio controls>
											
											<source src="uploads/musics/<?php echo $music; ?>" type="audio/mpeg">
													
										</audio>
									
									<!---
										<div class="buttons">
										    <button type="button" class="btn btn-default btn-lg button-skip-backward">
										      <span class="glyphicon glyphicon-fast-backward"></span>
										    </button>
										    <button type="button" class="btn btn-default btn-lg button-pause">
										      <span class="glyphicon glyphicon-pause"></span>
										    </button>
										    <button type="button" class="btn btn-default btn-lg button-stop">
										      <span class="glyphicon glyphicon-stop"></span>
										    </button>
										    <button type="button" class="btn btn-default btn-lg button-play">
										      <span class="glyphicon glyphicon-play"></span>
										    </button>
										    <button type="button" class="btn btn-default btn-lg button-skip-forward">
										      <span class="glyphicon glyphicon-fast-forward"></span>
										    </button>
										</div> -->
									</div>
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div><!--- End col -->	
				</div><!--- End row -->	
			</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
</html>