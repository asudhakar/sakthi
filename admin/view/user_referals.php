<?php include_once 'header.php'; ?>

<?php 
	include_once '../app/user_referals.php';
	$id=$_GET['id'];
	$referal_details=get_user_referals($id);
	$name=get_username($id); 
?>
<div class="home_header">
	<h1><?php echo $name; ?> has reffered totally <?php  echo count($referal_details); ?> customers till now!</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<?php if($referal_details!="empty"){?>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>CustomerName</th>
				<th>Customer PhoneNumber</th>
				<th>Email ID</th>
				<th>Event Date</th>
				<th>Reffered Date</th>
			</tr>
		</thead>
		<tbody>
<?php
    $html_content = "";
    foreach ($referal_details as $key => $referal_detail) {
    	if(empty($referal_detail['customer_email'])){
    		$email = "No email given!";
    	}else{
    		$email = $referal_detail['customer_email'];
    	}
      $html_content = $html_content."<tr><td>".$referal_detail['customer_name']."</td><td>".$referal_detail['customer_phone_number']."</td><td>".$email."</td><td>".$referal_detail['event_date']."</td><td>".$referal_detail['refered_date']."</td></tr>";
    }
    echo $html_content;
    ?>
		</tbody>
	</table>

<?php }else{ ?>

<?php }?>




<?php include_once 'footer.php'; ?>