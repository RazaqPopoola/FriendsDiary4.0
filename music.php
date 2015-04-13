<?php
	
	include('config/init.php'); 
	securePage();
	
	$gallery = new Gallery();
	$gallery->setPath('images');
	
	$musics = $gallery->getMusics(array('mp3', 'wav'));

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>MusicPage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
				<div class="container">
					
					<div class="row">
						<div class="col-md-2">
						
						</div>
						<div class="col-md-8">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Video Player
								</div>
								<div class="panel-body">
					
									<audio src="uploads/musics/5525b709536701.11739433.mp3" id="myTune">Music</audio>
									
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
									</div>
					
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div><!--- End col -->
						<div class="col-md-2">
						
						</div>
					</div><!--- End row -->
					
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

