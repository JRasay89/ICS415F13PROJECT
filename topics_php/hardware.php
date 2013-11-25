<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Forum Menu</title>
		<link rel="stylesheet" type="text/css" href="../css/menu-style.css">
		<!-- Bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../js/bootstrap.min.js"></script>
		<!--Custom Javascript -->
		<script src="../js/topics.js"></script>
		<script src='../js/checkuser.js'></script>
		
	</head>
	<body>
		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li class="active">
						<a href="../menu.html">Home</a>
					</li>
					<li>
						<a href="../about.html">About</a>
					</li>
					<li>
						<a href="#" onClick="logout()" id="logout_link">Logout</a>
					</li>
				</ul>
				<h3 class="text-muted" id="welcome_message"></h3>
			</div>
			<div class="jumbotron">
				<h1 id="title">Hardware</h1>
			</div>
			<p>
				<button type="button" class="btn btn-xs btn-primary" id="new_topic"><span class="glyphicon glyphicon-pencil"></span> New Topic</button>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>Subject</th>
					<th>Created By</th>
				</tr>
			</table>
			<div class="footer">
				<p>© ICS 415 </p>
			</div>
			<!--/footer-->
		</div>
		<!-- /container-->
	</body>
</html>