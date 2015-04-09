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
		<?php include('config/gcss.php'); ?>
	</head>
	<body>
		<?php include('template/contentNav.php') ?>;
		<div class="gContainer">
	
			<div class="gallery cf">
				<?php for($x = 1; $x <=12; $x++): ?>
				<div class="gallery-item">
					<img src="images/thumbs/79e907a763.jpg"
				</div>
				<?php endfor; ?>
			</div>
			
		</div>
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>