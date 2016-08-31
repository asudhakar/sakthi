<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	function get_catagory_options(){
		$conn = db_connect();
		$catagory_options = select("catagory_name","catagories","",$conn);
		return $catagory_options;
	}
	