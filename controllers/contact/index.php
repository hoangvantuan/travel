<?php
	$title="AD Touris Liên hệ";
	$tour_region = get_all('tour_region');
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$lang = get_lang();
	if($lang =='en')
		$current_possition = array(array('name'=>"Contact",'link'=>"index.php?controller=contact&amp;lang=".$lang));
	else
		$current_possition = array(array('name'=>"Liên hệ",'link'=>"index.php?controller=contact&amp;lang=".$lang));
	require_once(BASEPATH.'view/contact/index.php');
	// content site
	// end - thank site is not compete
?>;