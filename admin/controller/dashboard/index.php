<?php 
	$visa=get_number_recored('passport_visa_offers');
	if(isset($_SESSION['email']) && isset($_SESSION['password'])){
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];

		$check = check_admin($email, $password);
		if($check){
			$active = 'Dashboard';
			require('template/header.php');
			require_once('view/dashboard/index.php');
		}
		else
			header('location: index.php?controller=sign');
	}
	else
			header('location: index.php?controller=sign');
 ?>