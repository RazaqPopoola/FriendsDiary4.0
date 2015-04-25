<?php
	
	include('config/init.php');
	securePage();
	
	
	
	$query = mysql_query("SELECT `videoID`, `name`, `videoURL` FROM videostb");
	while($run = mysql_fetch_array($query)){
		
		$videoID = $run['videoID'];
		$videoName = $run['name'];
		$videoURL = $run['videoURL'];
	}
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
											
													
										if($type != 'mp4' && $type != 'wmv' && $type != 'flv' && $type != 'avi' && $type != 'mov'){
												
												$errors[] = "Video format is not supported !";
										}else{
												
												move_uploaded_file($tmp, 'uploads/videos/'.$randomName.'.'.$type);
												
												mysql_query("INSERT INTO `videostb` VALUES('', '$name', '$randomName.$type')");
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
						<div class="col-md-3">
							<div class="panel panel-success">
								<div class="panel-heading">
									<strong>List of Videos</strong>
								</div><!--- End panel heading -->
								<a href='video.php?video=<?php echo $videoURL; ?>'>
									<ul class="list-group">
									  <li class="list-group-item list-group-item-success"><?php echo $videoName; ?></li>
									</ul>
								</a>	
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

