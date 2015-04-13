<?php
	include('config/init.php')

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
										
										<form class="navbar-form navbar-left" role="search">
										  <div class="form-group">
										    <input type="text" class="form-control" placeholder="Search">
										  </div>
										  <button type="submit" class="btn btn-default">Submit</button>
										</form>
									</div>	<!--- End panel-->
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-5">Span 3
					            	
					            </div>
					            <div class="col-md-7">
					            	<div class="panel panel-success">
					            		<div class="papanel-body">
					            				<textarea name="outpouring" rows="5" class="form-control">Mind Outpouring?</textarea>
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

