<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	$conn = db_connect();
	$condition = "`refered_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'";
	$datas = select('*', 'reference_list', $condition, $conn);
	if($datas != "empty"){
	?>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Refered Date</th>
        <th>Referer</th>
        <th>Customer Name</th>
        <th>Customer Phonenumber</th>
        <th>Event Date</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $html_content = "";
    foreach ($datas as $key => $data) {
      $html_content = $html_content."<tr><td>".$data['refered_date']."</td><td><a href='user_referals.php?id=".$data['refered_by']."'>".get_user_name($data['refered_by'])."</a></td><td>".$data['customer_name']."</td><td>".$data['customer_phone_number']."</td><td>".$data['event_date']."</td></tr>";
    }
    echo $html_content;
    ?>

    </tbody>
  </table>

  <?php }else{
  	echo "sorry, no data found!";
  }


  function get_user_name($id){
		$con = db_connect();
		$username = select('username', 'users',"id = '$id'", $con);
		if($username == "empty"){
			return "something went wrong";
		}else{
			return $username[0]['username'];
		}
	}
	