<?php 
	include_once '../../controllers/default_functions.php';
	include_once '../../model/db.php';
	delete_catagory($_GET['id']);
	function delete_catagory($id){
		$con = db_connect();
		$sql = "DELETE FROM `users` WHERE id=$id";
		if(execute_query($sql, $con)){
			echo "deleted";
			header('location: ../view/manage_user.php?status=deleted_success');
		}else{
			echo "not deleted";
			header('location: ../view/manage_user.php?status=deleted_error');
		}
	}