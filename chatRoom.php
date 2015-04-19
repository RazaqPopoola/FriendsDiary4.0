<?php

	include('config/init.php');
	
	if(isset($_POST['send'])){
		if(sendMessage($_POST['sender'], $_POST['message'])){
			echo 'Message Sent';
		}else{
			echo 'Message Failed to Sent';
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chat Room</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/contentNav.php') ?>;
				<div class="container">
					<div class="row">
					<div class="col-md-6 ">
						<div class="panel panel-success">
							<div class="panel-heading">
								<strong>Sent Message</strong>
							</div>
							<div class="panel-body">
								<form method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="sender" placeholder="Enter Sender Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="message" placeholder="Enter Message">
									</div>
									<input type="submit" class="btn btn-success" name="send" value="Send Message">
								</form>
							</div><!--- End panel body-->
						</div><!--- End panel -->
					</div><!--- End col -->
					<div class="col-md-6 ">
						<div class="panel panel-success">
							<div class="panel-heading">
								<strong>Messages</strong>
							</div>
								<div class="panel-body">
								<?php
								
									$messages = getMessage();
									foreach($messages as $message){
										
										echo '<strong>' .$message['sender'].' Sent</strong><br/>';
										echo $message['message']. '<br/><br/>';
									}
								?>
							</div><!--- End panel body-->
						</div><!--- End panel -->
					</div><!--- End col -->
				</div><!--- End row-->		
			</div><!--- End container -->
		</div><!--- End wrap -->			
	</body>
</html>