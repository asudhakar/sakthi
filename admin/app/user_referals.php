<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';

	function get_user_referals($id)
	{
		$conn=db_connect();
		return select("*","reference_list","refered_by=$id",$conn);
	}
	function get_username($id){
		$con = db_connect();
		$username = select('username', 'users',"id = '$id'", $con);
		return $username[0]['username'];
	}