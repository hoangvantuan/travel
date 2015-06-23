<?php 
	$title = "AD Tourist, Everywhere, Everyone...";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$tour_region = get_all('tour_region');
	$tour = get_all('tour_content');
	$lang = get_lang();
	if($lang =='en')
		$current_possition = array(array('name'=>"Tourist good price",'link'=>"index.php?controller=tour&amp;lang=".$lang));
	else
		$current_possition = array(array('name'=>"Du lịch giá tốt",'link'=>"index.php?controller=tour&amp;lang=".$lang));
	require_once(BASEPATH.'view/tour/show_tour.php');

?>
