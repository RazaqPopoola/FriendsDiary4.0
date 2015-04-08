<?php
	include('config/init.php'); 
	
	$gallery = new Gallery();
	$gallery->setPath('images');
	
	$images = $gallery->getImages(array('jpg', 'png', 'jpeg', 'gif'));
?>


<!DOCTYPE >
<html>
	<head>
		<title>Image Gallary</title>
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
	</head>
	<body>
		<?php include('template/contentNav.php') ?>;
		<div class="gcontainer">
			<?php if ($images): ?>
			<div class="gallery cf">
				<?php foreach($images as $image): ?>
				<div class="gallery-item">
					<a href="<?php echo $image['full']; ?>"><img src="<?php echo $image['thumb']; ?>"></a>
				</div>
				<?php endforeach; ?>
			</div>
			<?php else: ?>
				There are no images.
			<?php endif; ?>
		</div>
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>