<?php 
include_once '../../controllers/default_functions.php';
 include_once '../../model/db.php';
 $conn=db_connect();
 $sql="UPDATE `catagories` SET `catagory_name`='".$_POST['catagory_name']."' WHERE `id`=".$_POST['id'];
 if(execute_query($sql,$conn)){
		header('location: ../view/add_catagory.php?status=edited_success');

 }else{
		header('location: ../view/add_catagory.php?status=edited_failed');

 }



