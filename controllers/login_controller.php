<?php 

	include_once 'default_functions.php';
	include_once '../model/db.php';
	
	$con = db_connect();
	$email = sanitize($_POST['email'], $con);
	$password = sanitize($_POST['password'], $con);
	$id = get_id($email, $password, $con);
	if($id!="empty"){
		create_session($id[0]['id']);
		header('Location: ../view/home.php');
	}else{
		header('Location: ../view/login.php?type=login_error');
	}

	function get_id($email, $password, $con){
		$selected_row = select('id', 'users', array("email"=>$email, "password"=>$password), $con);

		return $selected_row;
	}


