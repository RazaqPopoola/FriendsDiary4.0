
<html>
	<head>
		<title>Watch Video </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
				
		<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
		<script src="//vjs.zencdn.net/4.12/video.js"></script>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
			<div class="container">
				<div class="row">
					<div class="col-md-6">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Video Player
								</div>
								<div class="panel-body">
									<div >
										<?php 
											
											$video = $_GET['video'];
										
										 ?>
										<video id="example_video_1" class="video-js vjs-default-skin"
										  controls preload="auto" width="540" height="364"
										  poster="http://video-js.zencoder.com/oceans-clip.png"
										  data-setup='{"example_option":true}'>
										 <source src="uploads/videos/<?php echo $video; ?>" type='video/wmv'>
										 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
										</video>
									</div>
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div><!--- End col -->	
				</div><!--- End row -->	
			</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
</html>