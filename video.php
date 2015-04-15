<?php
	
	include('config/init.php');
	securePage();
	
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Video Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
			
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
								
								<form method="post" enctype="multipart/form-data">
									<?php
									if(isset($_FILES['video'])){
										
										$name = $_FILES['video']['name'];
										$type = explode('.', $name);
										$type = strtolower(end($type));
										
										echo print_r($type);
										$size = $_FILES['video']['size'];
										$randomName = rand();
										$temp = $_FILES['video']['tmp_name'];
										
										if($type == 'mp4' || $type == 'MP4' || $type == 'WMV' ||  $type == 'wmv'){
										 	$errors[] = "Video Format not Supported";
										}else{
											
											move_uploaded_file($temp, 'uploads/videos/' .$randomName.'.'.$type);
											
											mysql_query("INSERT INTO videostb VALUES('', '$name',  'uploads/videos/$randomName.$type')");
											$errors[] = "Successfully Uploaded! ";
									
										} 
										 echo outputErrors($errors);;
									}
								?>
									
									<div class="form-group">
										<input type="file" class="form-control" name="video">
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-success" value="Upload">
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
									
									<!---
									<div align"center" class="embed-responsive embed-responsive-16by9">
										<video autoplay controls class="embed-responive-item">
											<source src="Wildlife.wmv">
										</video>
 									</div -->
							
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
		<?php include('template/footer.php')?>
	</footer>
</html>

