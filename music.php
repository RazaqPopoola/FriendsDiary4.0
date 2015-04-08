<?php
	
	include('config/init.php'); 
	
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
			<?php include('template/planNav.php') ?>;
				<div class="container">
					
					
					
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

