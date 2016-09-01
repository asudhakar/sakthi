<?php 
 include_once '../../controllers/default_functions.php';
 include_once '../../model/db.php';
 $conn=db_connect();
 $sql="UPDATE `users` SET `email`='".$_POST['email']."',`username`='".$_POST['username']."',`password`='".$_POST['password']."',`catagory`='".$_POST['catagory']."',`institution/company`='".$_POST['institution/company']."' WHERE `id`=".$_POST['id'];
 echo "$sql";
if(execute_query($sql,$conn)){
	header('location: ../view/manage_user.php?status=edited_success');

}else{
	header('location: ../view/manage_user.php?status=edited_failed');

}
?>
