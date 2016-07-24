<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	
	$con = db_connect();
	// print_r($con);
	$username = sanitize($_POST['username'], $con);
	$password = sanitize($_POST['password'], $con);
	$id = check($username, $password);
	print_r($id);
	if(!emptty($id)){
		if(create_admin_session($id)){
			header('Location: ../view/home.php');
		} else{
			header('Location: ../view/login.php?type=login_error');
		}
	}else{
		header('Location: ../view/login.php?type=login_error');
	}

	function check($username, $password){
		if($username == "sakthi" && $password == "sakthi1234"){
			$data['name'] = "sakthi";
			$data['company'] = "the6.in";
			return $data; 
		}else{
			return null;
		}
	}
