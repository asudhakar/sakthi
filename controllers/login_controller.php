<?php 

	include_once 'default_functions.php';
	include_once '../model/db.php';
	
	$con = db_connect();
	$username = sanitize($_POST['username'], $con);
	$password = sanitize($_POST['password'], $con);
	$id = get_id($username, $password, $con);
	if(!emptty($id)){
		create_session($id);
		header('Location: ../view/home.php');
	}else{
		header('Location: ../view/login.php?type=login_error');
	}

	function get_id($username, $password, $con){
		$selected_row = select('id', 'users', array("username"=>$username, "password"=>$password), $con);
		return $selected_row[0]['id'];
	}


