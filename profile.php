<?php 
	include_once('config/init.php'); 
	
	
	if(empty($_POST) === false){
		
		$requiredFields = array('title', 'dairyNote');
		foreach ($_POST as $key=>$value) {
		
			if(empty($value) && in_array($key, $requiredFields) === true){
			
				$errors[] = 'All fields are required please';
				break 1;	
			}
		}
		
	}
	
	
	//$mysqlString = "SELECT `data`, `title` FROM `diarys` WHERE `disryID` =  $diaryID"

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Profile</title>
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
								<strong>Member Profile</strong>
							</div><!--- End panel heading -->
							<div class="panel-body">
								<div class="thumbnail">
									<?php
										if(isset($_FILES['profile']) === true && isset($_POST['upload'])){
											if(empty($_FILES['profile']['name']) === true){
												echo 'please choose a file!';
											}else{
												
												$allowed = array('jpg', 'jpeg', 'gif', 'png');
												
												$file_name = $_FILES['profile']['name'];
												$bits = (explode('.', $file_name));
												$file_extn = strtolower(end($bits));
												$file_temp = $_FILES['profile']['tmp_name'];
												
												if(in_array($file_extn, $allowed) === true){
													
													changeProfileImage($sessionMemberID, $file_temp, $file_extn);
													header('Location: ' . $currentFile);
													exit();
												}else{
													
													echo 'Incorrect file type. Allowed file type: ';
													echo implode(', ', $allowed);
												}
											}
										}
									
      	                 				if(empty($memberData['profile']) === false){
											echo '<img src="', $memberData['profile'],  '" alt="', $memberData['fName'], '\'s Profile Image">';
      	                 				}
      	                 			?>
      	                 			
      	                 			 <div>
        								<h5>Profile Picture</h5>
        									<form action="" method="post" enctype="multipart/form-data">
        										<input type="file" name="profile" value="Choose Picture"> <br/>
        										<input type="submit" class="btn btn-success" role="button" name="upload" value"Upload">
        									</form>
      								</div>
      	                 		</div>
							</div><!--- End panel body -->	
						</div>	<!--- End panel-->
					</div><!--- End Col-->
					<div class="col-md-6">
						<div class="panel panel-success">
							<div class="panel-heading">
								<strong>Daily Diary</strong>
							</div><!--- End panel heading -->
							<div class="panel-body">
								<?php
									if(empty($_POST) === false && empty($errors) === true){
										
											$insertData = array(
													'memberID' 	 => $sessionMemberID,
													'title'	 	=> $_POST['title'],
													'date'		=>$_POST['date'],
													'diaryNote'	 => $_POST['diaryNote']
											);
											
											insertDiary($sessionMemberID, $insertData);
											
										}else if (empty($errors) === false){
											echo outputErrors($errors);
										}
								?>
								<form action="" method="post">
									
									<div class="form-group">
										<input type="text" class="form-control" name='title' placeholder="Enter Diary Title">
									</div>
									<div class="form-group">
										<input type="date" class="form-control" name='date' >
									</div>
									
									<div class="form-group">
										<textarea class="form-control" rows="10"  name="diaryNote" placeholder="Enter Daily Diary Note"></textarea>
									</div>

									<input type="submit" class="btn btn-success" name="saveDiary" value="save">
					
								</form>
							</div><!--- End panel body -->		
						</div>	<!--- End panel-->
					</div><!--- End Col-->
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<strong>List of Diary</strong>
							</div><!--- End panel heading -->
								<div class="table-responsive">
									<table class="table">
								        <thead>
								          <tr>
								            <th>Date</th>
								            <th>Diary</th>
								          </tr>
								        </thead>
								        <tbody>
								       	<?php 
											for ($num = 0; $num <= 31; $num++) {
									            echo '<tr>';
									            echo '<td>'.$data1[$num]->find('a', 0).'</td>';
									            echo '<td>'.$data[$num]->find('a', 0).'</td>';
									            echo '</tr>';
									        }
								          ?>
								        </tbody>
							      </table>
								</div><!--- End table div-->
						</div>	<!--- End panel-->
					</div><!--- End Col-->
				</div><!--- End Row -->
			</div><!--- End container -->	
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>	
</html>
