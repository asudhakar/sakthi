<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Welcome <?php echo $details['name']; ?>, Today's Referals</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<div class="home_content">
<?php
  include_once '../app/home.php';
  $todays_referals = get_todays_referals();
  if($todays_referals != "empty"){
?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Customer PhoneNumber</th>
        <th>Email ID</th>
        <th>Event Date</th>
        <th>Refered By</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $html_content = "";
    foreach ($todays_referals as $key => $todays_referal) {
      $html_content = $html_content."<tr><td>".$todays_referal['customer_name']."</td><td>".$todays_referal['customer_phone_number']."</td><td>".$todays_referal['customer_email']."</td><td>".$todays_referal['event_date']."</td><td><a href='user_referals.php?id=".$todays_referal['refered_by']."'>".get_user_name($todays_referal['refered_by'])."</a></td></tr>";
    }
    echo $html_content;
    ?>

    </tbody>
  </table>

<?php
  }else{
    echo "No data found on today";
  }
?>
</div>

<?php include_once 'footer.php'; ?>