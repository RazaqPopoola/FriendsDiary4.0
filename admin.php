<?php 
	include('config/init.php');
	securePage();
	secureAdmin();
	
	
	$sql = "SELECT `fName`, `lName`, `email` FROM `members`";
	$result = mysql_query($sql);
	if(!$result){
		$errors[] = 'Could not connect and show your data.';
	}else if(!mysql_num_rows($result)){
		
		$errors[] = 'There is no member detail in the database.';
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/adminNav.php') ?>;
				<div class="container">
					<div class="row">
					    <div class="col-md-3"> 
					    	<div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>Admin Profile</strong>
										</div><!--- End panel heading -->
										<div class="panel-body">
										<div class="thumbnail">
											<?php
												if(isset($_FILES['profile']) === true && isset($_POST['uploadA'])){
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
															//header('Location: ' . $currentFile);
															//exit();
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
        										<input type="submit" class="btn btn-success" role="button" name="uploadA" value"Upload">
        									</form>
      								</div>
      	                 		</div>
							</div><!--- End panel body -->
								<panel class="panel panel-default">
									<div class="panel-body">
										<form role="form">
										  <div class="form-group">
										    <label for="email">fName: <?php echo $memberData['fName']; ?></label>
										  </div>
										  <div class="form-group">
										    <label for="pwd">lName: <?php echo $memberData['lName']; ?></label>
										  </div>
										  <div class="form-group">
										    <label for="pwd">email: <?php echo $memberData['email']; ?></label>
										  </div>
										</form>
									</div>
								</panel>
									</div>	<!--- End panel-->
					            </div>
					        </div>
					    </div><!--- End Col 1 -->
					    <div class="col-md-5">
					        <div class="row">
					            <div class="col-md-12">	
					            	<div class="panel panel-success">
					            		<div class="panel-heading">
					            			<strong>Search Member</strong>
					            		</div>
					            		<div class="panel-body"> 
										 <form action="admin.php" method="post">
											 <div class="input-group">
											   <input type="text" name="search" class="form-control" autocomplete="off"  placeholder="Search for Members" onkeydown="searchq();">
											    <span class="input-group-btn">
											   		<button type="submit" class="btn btn-success">Submit</button>
											   </span>
											 </div>
										</form>
										<div id="output"></div>
										</div><!--- End panel body-->
									</div><!--- End panel-->
					            </div><!--- End inner col-->
					        </div><!--- End inner row-->
					        <div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>Email Member</strong>
										</div><!--- End panel heading -->
										<div class="panel-body">
											<form action="" method="post">
												<div class="form-group">
													<input type="text" class="form-control" name='title' placeholder="Enter Diary Title">
												</div>
												<div class="form-group">
													<input type="date" class="form-control" name='diaryDate' >
												</div>
												
												<div class="form-group">
													<textarea class="form-control" rows="10"  name="diaryNote" placeholder="Enter Daily Diary Note"></textarea>
												</div>
			
												<input type="submit" class="btn btn-success" name="saveDiary" value="save">
											</form>
										</div><!--- End panel body -->	
									</div>	<!--- End panel-->
					            </div><!--- End inner col-->
					        </div><!--- End inner row-->
					    </div><!--- End Col 2-->
					 	<div class="col-md-4">
					        <div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>List of Members</strong>
										</div><!--- End panel heading -->
											<div class="table-responsive">
												<table class="table table-bordered">
											    <thead>
											      <tr>
											        <th>Firstname</th>
											        <th>Email</th>
											      </tr>
											    </thead>
											    <tbody>
											      <?php 
										       		if(is_resource($result)){
											       		while($row = mysql_fetch_array($result)){
												            echo '<tr>';
												            echo '<td>'.$row['fName']. ' ' .$row['lName'].'</td>';
												            echo '<td>'.$row['email'].'</td>';
												            echo '</tr>';
												        } 
													}
										          ?>
											    </tbody>
											  </table>
										</div><!--- End table fields-->	
									</div>	<!--- End panel-->	
					            </div>
					        </div>
					 </div><!--- End Col 3 -->
				</div><!--- End row-->
			</div><!--- End Container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

