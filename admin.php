<?php 
	include('config/init.php');
	//securePage();
	//secureAdmin();
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
										
										
									</div>	<!--- End panel-->
					            </div>
					        </div>
					    </div><!--- End Col 1 -->
					    <div class="col-md-5">
					        <div class="row">
					            <div class="col-md-12">	
									 <form class="navbar-form navbar-left" role="search">
										 <div class="form-group">
										   <input type="text" class="form-control" placeholder="Search">
										 </div>
										   <button type="submit" class="btn btn-success">Submit</button>
									</form>
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

