<?php
	
	include('config/init.php'); 
	
	$gallery = new Gallery();
	$gallery->setPath('images');
	
	$videos = $gallery->getVideos(array('mp4', 'avi', 'wmv'));

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Video Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
				<div class="container">
					
					<div class="row">
						<?php if ($videos): ?>
						<div class="col-md-3">
							<?php foreach($videos as $video): ?>
							<div class="thumbnail">
								<a href="<?php echo $video['full']; ?>"><img src="<?php echo $video['thumb']; ?>"></a>
							</div><!--- End thumbnail -->
							<?php endforeach; ?>
						</div><!--- End col -->
						<?php else: ?>
							There are no video.
						<?php endif; ?>
					</div><!--- End row -->
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

