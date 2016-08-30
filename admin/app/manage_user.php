<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';

	
	
	function get_total_user_details(){
		$con = db_connect();
		$total_users = select('*', 'users',"", $con);
		return $total_users;
	}
