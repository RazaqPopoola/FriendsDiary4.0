<?php
	
	include('config/init.php');
	securePage();
	
	
	
	$query = "SELECT `videoID`, `name`, `videoURL` FROM videostb";
	$result = mysql_query($query);
	
	if(!$result){
		
		$errors[] = 'Could not connect and show your data.';
	}else if(!mysql_num_rows($result)){
		
		$errors[] = 'There is no diary record in the database.';
	
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
						<div class="col-md-4">
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
												
												mysql_query("INSERT INTO `videostb` VALUES('', '$sessionMemberID','$name', $randomName.$type')");
												echo  'Successfully Uploaded! ';
	
											
										} 
											 echo outputErrors($errors);
									}
									
									
								?>
									
									<div class="form-group">
										<input type="file" class="form-control" name="video">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="description" placeholder="Discription">
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-success" name="uploadV" value="Upload">
									</div>
								</form>
							</div><!--- End panel body -->	
						</div>	<!--- End panel-->
						</div>
						<div class="col-md-8">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Video Player
								</div>
								<div class="panel-body">
								<?php
										if (empty($errors) === false){
												echo outputErrors($errors);
											}
									?>
									<div class="table-responsive">
									<table class="table">
								        <thead>
								          <tr>
								            <th>Name</th>
								            <th>Video link</th>
								             <th>Delete</th>
								          </tr>
								        </thead>
								        <tbody>
								       	<?php 
								       		if(is_resource($result)){
									       		while($row = mysql_fetch_array($result)){
										            echo '<tr>';
										            echo '<td>'.$row['name'].'</td>';
										            echo '<td><a href="watchVideo.php?video='.$row['videoURL'].'">'.$row['name'].'</a></td>';
													echo '<td>'.'<input class=\'btn btn-success\' type=submit name=delete value=delete />'.'</td>';
										            echo '</tr>';
												}
												
											}
								          ?>
								        </tbody>
							      </table>
								</div><!--- End table div-->
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div><!--- End col -->
						<div class="col-md-3">
						
					</div><!--- End row -->
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php'); ?>
	</footer>
</html>

