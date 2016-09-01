<?php
	include_once '../controllers/default_functions.php';
	include_once '../model/db.php';
	$con = db_connect();
	update_reference_list($_POST, $con);

	function update_reference_list($raw_input, $con){
		$raw_input['refered_date'] = date("Y-m-d h:i:sa");
		insert('reference_list', array('customer_name', 'customer_phone_number', 'customer_email', 'event_date', 'refered_by', 'refered_date' ), $raw_input, $con);
		$userDetails = $_SESSION["userDetails"];
		$details = extract_user_details($userDetails);
		$id = $details['id'];
		$total_reference = get_total_reference($id);
		$update_refer = $total_reference+1;

		$sql = 'UPDATE `users` SET `total_refered_count` = "'.$update_refer.'" WHERE id = "'.$id.'"';
		if(execute_query($sql, $con)){
			send_message_to_sakthi($id,$raw_input, $con);
			send_mail_to_sakthi($id,$raw_input, $con);
			header('location: ../view/home.php?status=updated');
		}else{
			header('location: ../view/home.php?status=error');
		}
	}

	function send_message_to_sakthi($id, $raw_input, $con){
		$selected_user = select('`username`, `institution/company`', 'users', array("id"=>$id),$con);
		$message_content = "Hi Sakthi, ".$selected_user['0']['username']." from ".$selected_user['0']['institution/company']." refered a customer. Details are :- Name :- ".$raw_input['customer_name'].", Email :- ".$raw_input['customer_email'].", Phone Number :- ".$raw_input['customer_phone_number'].", Event date is :-".$raw_input['event_date'] ;
		echo $message_content;
		$link = sms_db_connect();
		$number = "9842972047";
		$sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('THESIX', '$number', '$message_content')";
		mysqli_set_charset($link, 'utf8mb4'); 
		execute_query($sql, $link);
		
	}


	
	function send_mail_to_sakthi($id, $raw_input, $con){
		$selected_user = select('`username`, `institution/company`', 'users', array("id"=>$id),$con);
		if (empty($raw_input['customer_email'])) {
			$email = "no email presents";
		}else{
			$email = $raw_input['customer_email'];
		}
		$message_content = "<br>"."<br>Hi Sakthi, <br><blockquote> ".$selected_user['0']['username']." from ".$selected_user['0']['institution/company']." refered an customer. Details are :<b><ol><li> Name : ".$raw_input['customer_name']."</li><li> Email : ".$email."<li> Phone Number : ".$raw_input['customer_phone_number']."</li><li> Event date is :".$raw_input['event_date']."</li></b>"."<br>visit our <a href='http://vefetch.com/sakthiadmin/'>panel</a> for more details </blockquote><br/>Regards,<br/> Team vefetch" ;
		echo $message_content;
		$subject  = $selected_user['0']['username']. " refered an user - Reg";
		$headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
		            'MIME-Version: 1.0' . "\r\n" .
		            'Content-type: text/html; charset=utf-8';
		if(mail('sakthi@the6.in', $subject , $message_content , $headers))
			    echo "Email sent";
			else
			    echo "Email sending failed";
		
	}	


	function sms_db_connect(){
		$connection = mysqli_connect('10.0.2.1', "thesix", "thesix1234", "thesix", 3306);
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
	}

