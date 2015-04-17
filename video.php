<?php
	
	include('config/init.php');
	securePage();
	
	
	
	$query = mysql_query("SELECT 'id', 'name', 'url' FROM videostb");
	While($run = mysql_fetch_array($query));
	$videoID = $run['id'];
	$videoName = $run['name'];
	$videoUrl = $run['url'];
	
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Video Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
			
			<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
			<script src="//vjs.zencdn.net/4.12/video.js"></script>
			
			<!---
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
			</script> -->
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="panel panel-success">
							<div class="panel-heading">
								<strong>Video Upload</strong>
							</div><!--- End panel heading -->
							<div class="panel-body">
								
								<form method='post' enctype='multipart/form-data'>
									<?php
									
									if(isset($_FILES['video'])){
											
										$name = $_FILES['video']['name'];
										$type = explode('.', $name);
										$type = strtolower(end($type));
										$size = $_FILES['video']['size'];
										$randomName = rand();
										$tmp = $_FILES['video']['tmp_name'];
											
													
										if($type != 'mp4' || $type != 'wmv' || $type != 'flv' || $type != 'avi' || $type != 'mov'){
												
												$errors[] = "Video format is not supported !";
										}else{
												
												$destination = 'uploads/videos/' . $randomName . '.' . $type;
												move_uploaded_file($tmp, $destination);
												
												mysql_query("INSERT INTO videostb VALUES('', '$name', 'uploads/videos/$randomName.$type')");
												echo  'Successfully Uploaded! ';
	
											
										} 
											 echo outputErrors($errors);
									}
									
									
								?>
									
									<div class="form-group">
										<input type="file" class="form-control" name="video">
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-success" name="uploadV" value="Upload">
									</div>
								</form>
							</div><!--- End panel body -->	
						</div>	<!--- End panel-->
						</div>
						<div class="col-md-6">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Video Player
								</div>
								<div class="panel-body">
									<div >
										<video id="example_video_1" class="video-js vjs-default-skin"
										  controls preload="auto" width="540" height="364"
										  poster="http://video-js.zencoder.com/oceans-clip.png"
										  data-setup='{"example_option":true}'>
										 <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
										 <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
										 <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
										 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
										</video>
									</div>
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div><!--- End col -->
						<div class="col-md-3">
							<div class="panel panel-success">
								<div class="panel-heading">
									<strong>List of Videos</strong>
								</div><!--- End panel heading -->
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
											     <th>Date</th>
											     <th>Title</th>
											   	</tr>
											 </thead>
											 <tbody>
											   <tr>
											     <td>John</td>
											     <td>john@example.com</td>
											   </tr>
											   <tr>
											     <td>Mary</td>
											     <td>mary@example.com</td>
											  </tr>
											  <tr>
											    <td>July</td>
											    <td>july@example.com</td>
											 </tr>
										 </tbody>
									</table>
								</div><!--- End table fields-->	
							</div><!--- End panel-->	
						</div>
					</div><!--- End row -->
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php'); ?>
	</footer>
</html>

