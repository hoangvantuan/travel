<?php 
	$title = "AD Tourist, Everywhere, Everyone...";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$tour_region = get_all('tour_region');
	$tour = get_all('tour_content');
	$news = get_all('news_event');
	$lang = get_lang();
	if($lang =='en')
		$current_possition = array(array('name'=>"Tourist good price",'link'=>"index.php?controller=tour&amp;lang=".$lang));
	else
		$current_possition = array(array('name'=>"Du lịch giá tốt",'link'=>"index.php?controller=tour&amp;lang=".$lang));
	require_once(BASEPATH.'view/tour/show_tour.php');

?>
