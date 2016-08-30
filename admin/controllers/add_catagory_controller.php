<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';

	function get_total_catagory()
	{
		$conn=db_connect();
		return select("*","catagories","",$conn);
	}