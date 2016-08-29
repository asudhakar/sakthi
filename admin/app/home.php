<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	
	function get_todays_referals(){
		$con = db_connect();
		$date = date("Y-m-d");
		$todays_referals = select('*', 'reference_list',"refered_date like '%$date%' ", $con);
		return $todays_referals;
	}

	function get_user_name($id){
		$con = db_connect();
		$username = select('username', 'users',"id = '$id'", $con);
		return $username[0]['username'];
	}