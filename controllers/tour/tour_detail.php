<?php 
	$title = "Tourist Details";

	if(isset($_GET['tour_content_code']))
	{
		$tour_region = get_all('tour_region');
		$tour_content_code = $_GET['tour_content_code'];
		$tour =	get_a_record('tour_content','tour_content_code',$tour_content_code);
		$current_possition = array(array('name' =>'Du lịch giá tốt','link'=>'index.php?controller=tour'), array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code']));
		require_once(BASEPATH.'view/tour/tour_detail.php');
	}
	else
		header('location'.BASEURL);
	
 ?>