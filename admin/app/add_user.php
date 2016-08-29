<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	$con = db_connect();
	if(insert('users', array('username', 'email', 'password', 'catagory', 'institution/company'), $_POST, $con)=="error"){
		header('location: ../view/add_user.php?status=error');
	} else{
		echo "inserted";
		header('location: ../view/add_user.php?status=inserted');
	}