<?php 
	$visa=get_number_recored('passport_visa_offers');
	$tour =get_number_recored('tour_content');
	$contact =get_number_recored('contact');
	$news = get_number_recored('news_event_content');
	$labor = get_number_recored('labor_content');
	$lang = get_lang();
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
			header('location: index.php?lang='.$lang.'&controller=sign');
	}
	else
			header('location: index.php?lang='.$lang.'&controller=sign');
 ?>