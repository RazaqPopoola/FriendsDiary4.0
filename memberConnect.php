<?php
	include('config/init.php');
	securePage();	
	
	
	$sql = "SELECT  `outpouringNote` FROM `outpourings` WHERE `memberID` = $sessionMemberID AND `outpouringDate` IN (SELECT MAX(`outpouringDate`) FROM `outpourings`)";
	$re = mysql_query($sql);
	$row = mysql_fetch_assoc($re);
	
	if(!$re){
		$errors[] = 'Could not connect and show your data.';
	}else if(!mysql_num_rows($re)){
		
		$errors[] = 'There is no diary record in the database.';
	}						
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Member Connect</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
				<div class="container">
					<div class="row">
					    <div class="col-md-7"> 
					    	<div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>Search for Members</strong>
										</div><!--- End panel heading -->
										<div class="panel-body">
										<form action="memberConnect.php" method="post">
										  <div class="input-group">
										    <input type="text" name="search" class="form-control"  autocomplete="off" placeholder="Search for Members" onkeydown="searchq();">
										    <span class="input-group-btn">
										    <button type="submit" class="btn btn-success">Submit</button>
										    </span>
										  </div>
										</form>
										<div id="output"></div>
										</div>
									</div>	<!--- End panel-->
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-5">
					            	<div class="thumbnail">
					            		<?php
					            		if(empty($memberData['profile']) === false){
											echo '<img src="', $memberData['profile'],  '" alt="', $memberData['fName'], '\'s Profile Image">';
      	                 				}
										?>
					            	</div>
					            </div>
					            <div class="col-md-7">
					            	<div class="panel panel-success">
					            		<div class="panel-body">
					            			<?php
												if(isset($_POST['outpouring']) && empty($errors) === true){
													
														$outpouringData = array(
																'memberID' 	 	=> $sessionMemberID,
																'outpouringNote' => $_POST['outpouringNote'],
																'outpouringDate' => date('Y-m-d H:i:s')
														);
														
														insertOutpouring($sessionMemberID, $outpouringData);
														
													}else if (empty($errors) === false){
														echo outputErrors($errors);
													}	
											?>
											<form action="" method="post">
					            				<div class="form-group">
					            				<textarea  readonly name="dispalyO" rows="6" class="form-control" placeholder="Current Mind Outpouring"><?php echo $row['outpouringNote']; ?></textarea>
					            				<div class="input-group">
										    	<input type="text" name="comment" class="form-control"  autocomplete="off" placeholder="Comment">
												    <span class="input-group-btn">
												    <button type="submit" class="btn btn-success">Comment</button>
												    </span>
											  	</div>
						            			</div>
						            			<div class="form-group">
						            				<textarea rows="3" name="outpouringNote" class="form-control" placeholder="Mind Outpouring?"></textarea>
						            				<button type="submit" name="outpouring" class="btn btn-success">Save Outpouring</button>
						            			</div>
						            		</form>	
					            		</div>
					            	</div>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-5">
					        <div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>List of Friends</strong>
										</div><!--- End panel heading -->
											      <div class="table-responsive">          
									      <table class="table">
									        <thead>
									          <tr>
									            <th>Firstname</th>
									            <th>Email</th>
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
									      </div>
										</div>	<!--- End panel-->
					            	</div>
					        	</div>
					        <div class="row">
					            <div class="col-md-12">
					            	<div class="panel panel-success">
										<div class="panel-heading">
											<strong>People on FsD</strong>
										</div><!--- End panel heading -->
											      <div class="table-responsive">          
								      <table class="table">
								        <thead>
								          <tr>
								            <th>Firstname</th>
								            <th>Lastname</th>
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
								      </div>
									</div>	<!--- End panel-->
					            </div>
					        </div>
					    </div>
					</div>
					<div class="row">
					    <div class="col-md-7">
					    	<div class="media">
							  <div class="media-left">
							    <a href="#">
							      <img class="media-object" src="..." alt="...">
							    </a>
							  </div>
							  <div class="media-body">
							    <h4 class="media-heading">Media heading</h4>
							    ...
							  </div>
							</div>
					   	</div>
					</div>
				</div><!--- End container -->
		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>

