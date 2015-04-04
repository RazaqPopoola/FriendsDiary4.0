<?php 
	include('config/init.php'); 
	/*
	if(isset($_GET['username']) === true && empty($_GET['username']) === false){
		
		$username = $_GET['username'];
		
		if(memberExists($username) === true){
			
			$memberID = memberidFromUsername($username);
			$profileData = memberData(memberID, 'fName', 'lName', 'email');
		}else{
			
			echo 'Sorry, that Member do not exist!';
		}
	}else{
		
		header('Location: index.php');
		exit();
	}*/
	
	
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
								<div class="img-thumbnail">
									<?php
      	                 				if(empty($memberData['profile']) === false){
      	                 					echo '<img src="',  $memberData['profile'], 'width="171"', 'height="180"', '" alt="' , $memberData['fName'], Profile Image">';
      	                 				}
      	                 			?>
      	                 			 <div class="caption">
        								<h5>Profile Picture</h5>
        									<p>...</p>
        									<p><input type="file" id="inputeFile" value="Choose Picture"> <br/>
        										<a href="#" class="btn btn-default" role="button">Button</a></p>
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
								<form action="" method="post">
									
									<div class="form-group">
										<input type="text" class="form-control" name="title" id="title" placeholder="Enter Diary Title">
									</div>
									
									<div class="form-group">
										<input type="date" class="form-control" name="datec" id="datec">
									</div>
									
									<div class="form-group">
										<textarea class="form-control" rows="10"  id="enterdiary" placeholder="Enter Daily Diary Note"></textarea>
									</div>

									<input type="submit" class="btn btn-success" value="Save">
					
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
								          <tr>
								            <td>1</td>
								            <td>Anna</td>
								          </tr>
								          <tr>
								            <td>2</td>
								            <td>Debbie</td>
								          </tr>
								          <tr>
								            <td>3</td>
								            <td>John</td>
								          </tr>
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
