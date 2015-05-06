<?php

	include_once('config/init.php'); 
	securePage();

	if(empty($_POST) === false){
		
		$requiredFields = array('name', 'phone');
		foreach ($_POST as $key=>$value) {
		
			if(empty($value) && in_array($key, $requiredFields) === true){
			
				$errors[] = 'Please enter name and email please';
				break 1;	
			}
		}
		
	}
	
	$sql = "SELECT * FROM `contactstb` WHERE `memberID` = $sessionMemberID ";
	$result = mysql_query($sql);
	if(!$result){
		$errors[] = 'Could not connect and show your data.';
	}else if(!mysql_num_rows($result)){
		
		$errors[] = 'There is no contact record in the database.';
	}
	

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact List</title>
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
									 <strong> Add Contact </strong>
								</div>
								<div class="panel-body">
									<?php
											if(isset($_POST['addContact']) && empty($errors) === true){
										
													$contactData = array(
															'memberID' 	 => $sessionMemberID,
															'conName'	 => $_POST['conName'],
															'phoneNo'	 => $_POST['phoneNo'],
															'conEmail'	 => $_POST['conEmail'],
															'address'	 => $_POST['address']
													);
													
											insertContact($sessionMemberID, $contactData);
													
												}else if (empty($errors) === false){
													echo outputErrors($errors);
												}	
										?>
									
									
									<form action="" method="post">
									    <div class="form-group">
									      <label for="name">Names:</label>
									      <input type="text" class="form-control" name="conName" placeholder="Enter name">
									    </div>
									    <div class="form-group">
									      <label for="phone">Phone:</label>
									      <input type="number" class="form-control" name="phoneNo" placeholder="Enter phone">
									    </div>
									    <div class="form-group">
									      <label for="email">Email:</label>
									      <input type="email" class="form-control" name="conEmail" placeholder="Enter email">
									    </div>
									    <div class="form-group">
									      <label for="address">Address:</label>
									      <input type="text" class="form-control" name="address" placeholder="Enter address">
									    </div>
									    <button type="submit" name="addContact" class="btn btn-success">Save Contact</button>
									  </form>
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div>
						<div class="col-md-9">
							<div class="panel panel-success">
								<div class="panel-heading">
									<strong>Contact List</strong>
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
								            <th>Date</th>
								            <th>Phone</th>
								            <th>Email</th>
								            <th>Address</th>
								          </tr>
								        </thead>
								        <tbody>
								       	<?php 
								       		if(is_resource($result)){
									       		while($row = mysql_fetch_array($result)){
									       			echo "<form action=change.php method=POST>";
										            echo "<tr>";
										            echo "<td>"."<input class=form-control type=text   name=conName value=".$row['conName']."</td>";
										            echo "<td>"."<input class=form-control type=text name=phoneNo value=". $row['phoneNo']."</td>";
										            echo "<td>"."<input class=form-control type=email name=conEmail value=".$row['conEmail']."</td>";
													echo "<td>"."<input class=form-control type=text  name=address value=".$row['address']."</td>";
													echo "<td>"."<input class=form-control type=submit name=update value=update />"."</td>";
													echo "<td>"."<input class=form-control type=submit name=delete value=delete />"."</td>";
										            echo "</tr>";
										            echo "</form>";
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
				</div>
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

