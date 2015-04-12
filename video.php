<?php
	
	include('config/init.php'); 
	
	//$gallery = new Gallery();
	//$gallery->setPath('uploads/videos');
	
	//$videos = $gallery->getVideos(array('mp4', 'avi', 'wmv'));

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Video Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
			<script type="text/css">
				div#videoPlayerBox{ width:550px; background:#000; margin:0px auto; }
				div#videoControlBar{ background:#333; padding:10px;}
			</script>
			<script>
				function palyPause(btn, vid){
					var vid = document.getElementById(vid);
					if(vid.pause){
						vid.play();
						btn.innerHTML = "Pause";
					}else{
						vid.pause();
						btn.innerHTML = "Play";
					}
				}
			</script>
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
									<div id=videoPlayerBox>
										<video id="myVideo" controls="controls" width="550" height="320">
											<source src="uploads/videos/Wildlife.wmv">
										</video>
										<div id="videoControlBar">
											<button id="playpausebtn" onclick="playPause(this, 'myVideo')">Pause</button>
										</div>
									</div>
									<!-- 16:9 aspect ratio 
									<div class="embed-responsive embed-responsive-16by9" hidden-xs>
										<iframe class="embed-responsive-item" src="uploads/videos/Wildlife.wmv" allowfullscreen></iframe>
									</div>
									<p Class="visible-xs hidden-sm">The video has been remove on an extar small size please mov to bigger screen to view</p>
									-->
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

