<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	$con = db_connect();
	if(insert('catagories', 'catagory_name', $_POST, $con)=="error"){
		header('location: ../view/add_catagory.php?status=error');
	} else{
		header('location: ../view/add_catagory.php?status=inserted');
	}