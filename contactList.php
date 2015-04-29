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
									 Add Contact
								</div>
								<div class="panel-body">
									<form role="form">
									    <div class="form-group">
									      <label for="name">Names:</label>
									      <input type="text" class="form-control" id="name" placeholder="Enter name">
									    </div>
									    <div class="form-group">
									      <label for="address">Address:</label>
									      <input type="text" class="form-control" id="address" placeholder="Enter address">
									    </div>
									    <div class="form-group">
									      <label for="email">Email:</label>
									      <input type="email" class="form-control" id="email" placeholder="Enter email">
									    </div>
									    <div class="form-group">
									      <label for="phone">Phone:</label>
									      <input type="text" class="form-control" id="phone" placeholder="Enter phone">
									    </div>
									    <button type="submit" class="btn btn-success">Submit</button>
									  </form>
								</div><!--- End panel body-->
							</div><!--- End panel -->
						</div>
						<div class="col-md-9">
							<div class="panel panel-success">
								<div class="panel-heading">
									Contact List
								</div>
								<div class="panel-body">
					
					
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

