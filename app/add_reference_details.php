<?php
	include_once '../controllers/default_functions.php';
	include_once '../model/db.php';
	$con = db_connect();
	update_reference_list($_POST, $con);

	function update_reference_list($raw_input, $con){
		insert('reference_list', array('customer_name', 'customer_phone_number', 'customer_email', 'event_date', 'refered_by' ), $raw_input, $con);
		$userDetails = $_SESSION["userDetails"];
		$details = extract_user_details($userDetails);
		$id = $details['id'];
		$total_reference = get_total_reference($id);
		$update_refer = $total_reference+1;

		$sql = 'UPDATE `users` SET `total_refered_count` = "'.$update_refer.'" WHERE id = "'.$id.'"';
		if(execute_query($sql, $con)){
			

			send_message_to_sakthi($id,$raw_input, $con);


			header('location: ../view/home.php?status=updated');
		}else{
			header('location: ../view/home.php?status=error');
		}
	}

	function send_message_to_sakthi($id, $raw_input, $con){
		$selected_user = select('`username`, `institution/company`', 'users', array("id"=>$id),$con);
		print_r($raw_input);
		$message_content = "Hi Sakthi, ".$selected_user['0']['username']." from ".$selected_user['0']['institution/company']." refered a customer. Details are :- Name :- ".$raw_input['customer_name'].", Email :- ".$raw_input['customer_email'].", Phone Number :- ".$raw_input['customer_phone_number'].", Event date is :-".$raw_input['event_date'] ;
		echo $message_content;
		$link = sms_db_connect();
		$number = "9842972047";
		$sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('THESIX', '$number', '$message_content')";
		mysqli_set_charset($link, 'utf8mb4'); 
		execute_query($sql, $link);
		
	}

	function sms_db_connect(){
		$connection = mysqli_connect('192.168.1.201', "demo", "demo1234", "demo", 3306);
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
	}

