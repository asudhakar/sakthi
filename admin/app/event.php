<?php 
	
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	
	function get_event_details(){
		$conn = db_connect();
		$sql = "SELECT * FROM `reference_list` where `event_date` like '%".date("Y-m-d")."%'";
		$condition = "`event_date` like '%".date("Y-m-d")."%'";
		return select('*', 'reference_list', $condition, $conn);
	}