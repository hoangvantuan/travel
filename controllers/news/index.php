<?php 
	$title = "AD Tourist Tin tức";
	$news = get_all('news_event');
	$lang = get_lang();
	$news_event_content = get_all('news_event_content');
	$tour_region = get_all('tour_region');
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	if(isset($_GET['news_event_code'])){
		$news_event_code = $_GET['news_event_code'];
		$news_event_content = get_all_record('news_event_content','news_event_code',$news_event_code);

	}
	require('view/news/index.php');
?>
