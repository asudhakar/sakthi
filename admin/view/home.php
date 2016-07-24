<?php 
include_once '../../controllers/default_functions.php';
include_once '../../model/db.php';
landing_page_admin_session_check();
$userDetails = $_SESSION['adminDeatils'];
$details = extract_user_details($userDetails);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right" style="margin-top: 37px;"">
					<li role="presentation" class="active"><a href="../index.php">Add User</a></li>
					<li role="presentation"><a href="http://vefetch.com/">About</a></li>
					<li role="presentation"><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			<img src="../../images/logo.jpg" height="125px" width="220px">
		</div>
		<hr/>
		<h2 style="text-align: center;">Add User</h2>
		<?php
			$status = $_GET['status'];
			switch ($status) {
				case 'inserted':
					echo '<div class="alert alert-success"><strong>Success!</strong> New user added successfully.</div>';
					break;
				
				case 'error':
					echo '<div class="alert alert-warning"><strong>Sorry!</strong> Something went wrongly.</div>';
					break;
				default:
					echo "";
					break;
			}
			
		?>
		<form method="post" action="../app/add_user.php">
			<input type="textbox" name="username" class="form-control" placeholder="user name" required autofocus><br/>
			<input type="email" name="email" class="form-control" placeholder="email" required autofocus><br/>
			<input type="password" name="password" class="form-control" placeholder="password" required><br/>
			<input type="textbox" name="catagory" class="form-control" placeholder="catagory" required><br/>
			<input type="textbox" name="institution/company" class="form-control" placeholder="institution/company" required><br/>
			<p style="text-align:center;">
				<button type="submit" class="btn btn-success" style="width: 208px;">Add User</button>
			</p>
		</form>
	</div>
</body>
</html>