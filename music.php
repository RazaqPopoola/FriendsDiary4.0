
<?php
	
	include('config/init.php'); 
	securePage();
	
	$query = "SELECT `musicID`, `name`, `musicURL` FROM musictb";
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
						<div class="col-md-4">
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
													
													mysql_query("INSERT INTO `musictb` VALUES('', '$sessionMemberID', '$name', '$randomName.$type')");
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
						<div class="col-md-8">
							<div class="panel panel-success">
								<div class="panel-heading">
									FriendsDairy Audio 
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
								            <th>Music Link</th>
								             <th>Delete</th>
								          </tr>
								        </thead>
								        <tbody>
								       	<?php 
								       		if(is_resource($result)){
									       		while($row = mysql_fetch_array($result)){
										            echo '<tr>';
										            echo '<td>'.$row['name'].'</td>';
										            echo '<td><a href="playMusic.php?music='.$row['musicURL'].'">'.$row['name'].'</a></td>';
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
					</div><!--- End row -->
					
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

