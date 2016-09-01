<?php
include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	function get_catagory($id){
		$conn = db_connect();
		return select("*","catagories","id=$id",$conn);
	}
	?>