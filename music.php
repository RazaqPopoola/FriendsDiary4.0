
<?php
	
	include('config/init.php'); 
	securePage();
	
	$query = mysql_query("SELECT `musicID`, `name`, `musicURL` FROM musictb");
	while($run = mysql_fetch_array($query)){
		
		$musicID = $run['musicID'];
		$musicName = $run['name'];
		$musicURL = $run['musicURL'];
		
	}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>MusicPage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
				<div class="container">
					
					<div class="row">
						<div class="col-md-3">
							<div class="panel panel-success">
								<div class="panel-heading">
									<strong>Video Music</strong>
								</div><!--- End panel heading -->
								<div class="panel-body">
									
									<form method='post' enctype='multipart/form-data'>
										<?php
										
										if(isset($_FILES['music'])){
												
											$name = $_FILES['music']['name'];
											$type = explode('.', $name);
											$type = strtolower(end($type));
											$size = $_FILES['music']['size'];
											$randomName = rand();
											$tmp = $_FILES['music']['tmp_name'];
												
														
											if($type != 'mp3' && $type != 'wav' && $type != 'ogg'){
													
													$errors[] = "Audio format is not supported !";
											}else{
													
													move_uploaded_file($tmp, 'uploads/musics/'.$randomName.'.'.$type);
													
													mysql_query("INSERT INTO `musictb` VALUES('', '$name', '$randomName.$type')");
													echo  'Successfully Uploaded! ';
		
												
											} 
												 echo outputErrors($errors);
										}
										
										
									?>
										
									<div class="form-group">
										<input type="file" class="form-control" name="music">
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-success" name="uploadM" value="Upload">
									</div>
								</form>
							</div><!--- End panel body -->	
						</div>	<!--- End panel-->
						</div>
						<div class="col-md-5">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Audio Player
								</div>
								<div class="panel-body">
					
									
					
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div><!--- End col -->
						<div class="col-md-4">
							<div class="panel panel-success">
								<div class="panel-heading">
									<strong>Music List</strong>
								</div>
								<div class="panel-body">
									<a href='playMusic.php?music=<?php echo $musicURL; ?>'>
									<ul class="list-group">
									  <li class="list-group-item list-group-item-success">
									  	<?php echo $musicName; ?>
									  </li>
									</ul>
								</a>
								</div><!--- End panel body-->	
							</div><!--- End panel -->
						</div>
					</div><!--- End row -->
					
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

