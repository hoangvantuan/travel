<?php
	$title = "AD Tourist";
	$lang = get_lang();
	$news = get_all('news_event');
	$news_event_content = get_all('news_event_content');
	$tour_region = get_all('tour_region');
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	if(isset($_GET['news_event_content_code'])){
		$news_event_content_code = $_GET['news_event_content_code'];
		$news_event_content = get_a_record('news_event_content','news_event_content_code', $news_event_content_code);
		$news_event = get_a_record('news_event','news_event_code',$news_event_content['news_event_code']);
		require_once(BASEPATH.'view/news/content_new.php');
	}
	else
		header('location:index.php?lang='.$lang.'&controller=news');
 ?>