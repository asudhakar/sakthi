<?php 
include_once '../controllers/default_functions.php';
landing_page_session_check();
$userDetails = $_SESSION['userDetails'];
$details = extract_user_details($userDetails);
$id = $details['id'];
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
		<nav style="margin-bottom: -11px;">
			<ul class="nav nav-pills pull-right">
				<li role="presentation"><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<img src="../images/logo.jpg" height="70px" width="170px">
		<p style="text-align:center">Total Refered :-<?php //get_total_refered($id); ?></p>

	</div>
	<hr/>
</div>
</body>
</html>
