<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Welcome <?php echo $details['name']; ?>, Today's Events</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<div class="home_content">
<?php
  include_once '../app/home.php';
  $todays_events = get_event_details();
  if($todays_events != "empty"){
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
    foreach ($todays_events as $key => $todays_event) {
      if(empty($todays_event['customer_email']))
      {
        $email = "no email given";
      }else{
        $email = $todays_event['customer_email'];
      }
      $html_content = $html_content."<tr><td>".$todays_event['customer_name']."</td><td>".$todays_event['customer_phone_number']."</td><td>".$email."</td><td>".$todays_event['event_date']."</td><td><a href='user_referals.php?id=".$todays_event['refered_by']."'>".get_user_name($todays_event['refered_by'])."</a></td></tr>";
    }
    echo $html_content;
    ?>

    </tbody>
  </table>

<?php
  }else{
    echo "No event found on today";
  }
?>
</div>

<?php include_once 'footer.php'; ?>