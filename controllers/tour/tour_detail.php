<?php 
	$title = "Tourist Details";
	$lang = get_lang();
	if(isset($_GET['tour_content_code']))
	{
		$tour_region = get_all('tour_region');
		$tour_content_code = $_GET['tour_content_code'];
		$tour =	get_a_record('tour_content','tour_content_code',$tour_content_code);
		if($lang ='vi')
			$current_possition = array(array('name' =>'Du lịch giá tốt','link'=>'index.php?controller=tour&amp;lang='.$lang), array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code'].'&amp;lang='.$lang));
		else
			$current_possition = array(array('name' =>'Tourist good price','link'=>'index.php?controller=tour&amp;lang='.$lang), array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code'].'&amp;lang='.$lang));
		require_once(BASEPATH.'view/tour/tour_detail.php');
	}
	else
		header('location: index.php?lang='.$lang);
	
 ?>