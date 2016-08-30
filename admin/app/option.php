<?php 
	$raw_input = $_GET;
	if(!empty($raw_input)){
		$id = $raw_input['id'];
		switch ($raw_input['option']) {
			case 'delete':
				if(false){
					header('location: ../view/manage_user.php?status=success');
				}else{
					header('location: ../view/manage_user.php?status=error');
				}
				break;
			
			case 'edit':
				
				break;
		}
	}