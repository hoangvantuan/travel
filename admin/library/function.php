<?php 
function check_admin($email, $password){
	$check = get_a_record('account', 'email', $email);
	if($check != null){
		if($password == $check['password']){
			return true;
		}
	}
	return false;
}

 ?>