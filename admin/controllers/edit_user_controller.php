<?php 

	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	function get_user_all_details($id){
		$conn = db_connect();
		return select("*","users","id=$id",$conn);
	}