<?php
	include('config/init.php'); 
	securePage();
	
	$gallery = new Gallery();
	$gallery->setPath('uploads/images');
	
	$images = $gallery->getImages(array('jpg', 'png', 'jpeg', 'gif'));
	
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Image Gallary</title>
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
		<?php include('config/gcss.php'); ?>
	</head>
	<body>
		<?php include('template/contentNav.php') ?>;
		<div class="gcontainer">
		<?php if($images): ?>
			<div class="gallery cf">
				<?php foreach($images as $image): ?>
					<div class="gallery-item">
						<a href="<?php echo $image['full']; ?>"><img src="<?php echo $image['thumb']; ?>"></a>
					</div>
				<?php endforeach; ?>
			</div>
			<?php else: ?>
				There are no images available.
			<?php endif; ?>
		</div>
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>
