<?php 
	$title = "Tourist Details";
	$lang = get_lang();
	$news = get_all('news_event');
	if(isset($_GET['tour_content_code']))
	{
		$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
		$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
		$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
		$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
		$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
		$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
		$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
		$tour_region = get_all('tour_region');
		$tour_content_code = $_GET['tour_content_code'];
		$tour =	get_a_record('tour_content','tour_content_code',$tour_content_code);
		$tour_relate = get_all_record('tour_content','tour_region_code',$tour['tour_region_code']);
		if($lang ='vi')
			$current_possition = array(array('name' =>'Du lịch giá tốt','link'=>'index.php?controller=tour&amp;lang='.$lang), array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code'].'&amp;lang='.$lang));
		else
			$current_possition = array(array('name' =>'Tourist good price','link'=>'index.php?controller=tour&amp;lang='.$lang), array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code'].'&amp;lang='.$lang));
		require_once(BASEPATH.'view/tour/tour_detail.php');
	}
	else
		header('location: index.php?lang='.$lang);
	
 ?>