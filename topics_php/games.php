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
		<!--Connecting to Database-->
		<?php
			// Create connection to mysql
			//TABLES ARE ALSO CREATED
			//USER TABLE uses unique names and is not case sensitive
			$host = "localhost";
			$user = "bryan";
			$pwd = "password";
			$db = "forum_project";
			$con=mysqli_connect($host,$user,$pwd);
			if(mysqli_connect_errno($con)){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			//Connect to the database
			else {
				mysqli_select_db($con, $db);
			}
		?>
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
				<h1 id="title">Games</h1>
			</div>
			<!--/jumbotron-->
			<div class="row marketing" id="row_topic">
				<p class="col-md-9">
					<button type="button" class="btn btn-xs btn-primary" id="btn_topic"><span class="glyphicon glyphicon-pencil"></span> New Topic</button>
				</p>
				<!--Form for creating new topics-->
				<form role="form" id="form_topic" action="games_message.php" method="post">
					<div class="col-md-9" id="form_title">
							<h4>Create New Topic</h4>
					</div>
					<div class="form-group">
						<div class="col-md-9">
							<label for="inputTitle" class="control-label">Enter Title:</label>
							<div class="row">
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputTitle" name="title" placeholder="Subject" maxlength="10">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-9">
							<label for="inputMessage" class="control-label">Enter Message:</label>
							<div class="row">
								<div class="col-md-9">
									<textarea class="form-control" id="inputMessage" name="message" placeholder="Message" maxlength="50"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-9">
							<button type="submit" class="btn btn-primary">Create</button>
							<button type="button" class="btn btn-default" id="btn_form_cancel">Cancel</button>
						</div>
					</div>
				</form>
				<!--/form-->
			</div>
			<!--/row_topic-->
			<table class="table table-bordered">
				<tr>
					<th>Subject</th>
					<th>Created By</th>
				</tr>
				<tr>
					<!--Print Data-->
					<?php
						//EXAMPLE
						echo "<td> Batman Sucks</td>";
						echo "<td> Joe111 </td>";
					?>
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