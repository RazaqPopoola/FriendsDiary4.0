
<!DOCTYPE HTML>
<html>
	<head>
		<title>FriendsDiay Chating Box</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
			<?php include('config/css.php'); ?>
			<?php include('config/css.php'); ?>
	</head>
	<body>
		<div id="wrap">
			<?php include('template/planNav.php') ?>;
				<div class="container">
				    <div class="row">
				        <div class="col-md-5">
				            <div class="panel panel-primary">
				                <div class="panel-heading">
				                    <span class="glyphicon glyphicon-comment"></span> Chat
				                    <div class="btn-group pull-right">
				                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				                            <span class="glyphicon glyphicon-chevron-down"></span>
				                        </button>
				                        <ul class="dropdown-menu slidedown">
				                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-refresh">
				                            </span>Refresh</a></li>
				                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
				                            </span>Available</a></li>
				                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
				                            </span>Busy</a></li>
				                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
				                                Away</a></li>
				                            <li class="divider"></li>
				                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>
				                                Sign Out</a></li>
				                        </ul>
				                    </div>
				                </div>
				                <div class="panel-body">
				                    <ul class="chat">
				                        <li class="left clearfix"><span class="chat-img pull-left">
				                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
				                        </span>
				                            <div class="chat-body clearfix">
				                                <div class="header">
				                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
				                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
				                                </div>
				                                <p>
				                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
				                                    dolor, quis ullamcorper ligula sodales.
				                                </p>
				                            </div>
				                        </li>
				                        <li class="right clearfix"><span class="chat-img pull-right">
				                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
				                        </span>
				                            <div class="chat-body clearfix">
				                                <div class="header">
				                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
				                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
				                                </div>
				                                <p>
				                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
				                                    dolor, quis ullamcorper ligula sodales.
				                                </p>
				                            </div>
				                        </li>
				                        <li class="left clearfix"><span class="chat-img pull-left">
				                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
				                        </span>
				                            <div class="chat-body clearfix">
				                                <div class="header">
				                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
				                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
				                                </div>
				                                <p>
				                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
				                                    dolor, quis ullamcorper ligula sodales.
				                                </p>
				                            </div>
				                        </li>
				                        <li class="right clearfix"><span class="chat-img pull-right">
				                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
				                        </span>
				                            <div class="chat-body clearfix">
				                                <div class="header">
				                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
				                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
				                                </div>
				                                <p>
				                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
				                                    dolor, quis ullamcorper ligula sodales.
				                                </p>
				                            </div>
				                        </li>
				                    </ul>
				                </div>
				                <div class="panel-footer">
				                    <div class="input-group">
				                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
				                        <span class="input-group-btn">
				                            <button class="btn btn-warning btn-sm" id="btn-chat">
				                                Send</button>
				                        </span>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

		</div><!--- End wrap -->
	</body>
	<footer>
		<?php include('template/footer.php')?>
	</footer>
</html>
