<?php
require 'classes/Gallery.php';

$gallery = new Gallery();
$gallery->setPath('gallery/images');

$images = $gallery->getImages(array('jpg'));
?>


<!DOCTYPE >
<html>
	<head>
		<title>Image Gallary</title>
		<link rel="stylesheet" href="settings/css.php">
	</head>
	<body>
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
		
	</footer>
</html>