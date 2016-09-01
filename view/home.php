<?php 
include_once '../controllers/default_functions.php';
include_once '../model/db.php';
landing_page_session_check();
$userDetails = $_SESSION['userDetails'];
$details = extract_user_details($userDetails);
$id = $details['id'];
$date = date("Y-m-d", time());
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
<br/>
<div class="container">
<br/>
	<div class="header clearfix">
		<nav>
			<ul class="nav nav-pills pull-right">
				<li role="presentation"><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<img src="../images/logo.jpg" height="70px" width="170px">
		
		
		
	</div>
	<blockquote>Welcome <?php echo get_name($id); ?> </blockquote>
	<hr/>
	<form action="../app/add_reference_details.php" method="post">
		<input type="textbox" name="customer_name" class="form-control" placeholder="customer name" required autofocus><br/>
		<input type="number" name="customer_phone_number" class="form-control" placeholder="customer phone number" required><br/>
		<input type="email" name="customer_email" class="form-control" placeholder="customer email" ><br/>
		<input type="date" name="event_date" class="form-control" placeholder="date of surprise" value="<?php echo $date; ?>" required><br/>
		<input type="hidden" name="refered_by" value="<?php echo $id; ?>">
		<p style="text-align:center">
		<button type="submit" class="btn btn-success">Earn 25 Rupees</button>
		</p>
	</form>
	<h3 style="text-align:center">Total Refered :- <?php echo get_total_reference($id); ?></h3>
	<?php
			if(isset($_GET['status'])){
				$status = $_GET['status'];
			}else{
				$status = "";
			}
			switch ($status) {
				case 'updated':
					echo '<div class="alert alert-success"><strong>Success!</strong> Added successfully.</div>';
					break;
				
				case 'error':
					echo '<div class="alert alert-warning"><strong>Sorry!</strong> Something went wrongly.</div>';
					break;
				default:
					echo "";
					break;
			}
			
		?>
</div>
</body>
</html>



