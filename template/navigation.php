
<nav class="navbar navbar-inverse navbar-static-top">
	
	<div class="container">
		<ul class="nav navbar-nav">
			<div class="navbar-brand">
				FriendsDiary
			</div>
			<li><a href="memCon.php">Connect</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Music</a></li>
			<li><a href="#">Video</a></li>
		</ul>
		
		<div class="pull-right">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $memberData['fName']; ?><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php">logout</a></li>
						<li><a href="update.php">Update</a></li>
						<li><a href="changepassword.php">Change Password</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>	
</nav><!-- End Nav -->
			