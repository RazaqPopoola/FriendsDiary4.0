<?php
	
	include('config/init.php');
	securePage();
	
	//$gallery = new Gallery();
	//$gallery->setPath('uploads/videos');
	
	//$videos = $gallery->getVideos(array('mp4', 'flv', 'wmv', mov));

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Video Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
			
			
			<script type="text/css">
				.videoPlayerBox{ 
					width:550px; 
					background:#000; 
					margin: 0px auto; 
					}
					
				.videoControlBar{ 
					background: #333; 
					padding: 10px;
					}
			</script>
			<script>
				 var vid, playbtn;
				 
				 fuction initializePlayer(){
				 	vid = document.getElementById("myVideo");
				 	palybtn = document.getElementById("playpausebtn");
				 	
				 	playbtn.addEventListener("click", playpause, false);
				 }
				 window.onload = intializePlayer;
				 
				function palyPause(){
				
					if(vid.paused){
						vid.play();
						playbtn.innerHTML = "Pause";
					}else{
						vid.pause();
						playbtn.innerHTML = "Play";
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
									<div align"center" class="embed-responsive embed-responsive-16by9">
										<video autoplay controls class="embed-responive-item">
											<source src="Wildlife.wmv">
										</video>
 									</div
							
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

