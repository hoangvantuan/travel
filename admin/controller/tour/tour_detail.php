<?php 
	$active = 'tour';
	$title = "Chi tiết Tour";
	if(isset($_GET['tour_content_code'])){
		$tour_content_code = $_GET['tour_content_code'];
		$tour = get_a_record('tour_content','tour_content_code',$tour_content_code);
		$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?controller=tour'),
									array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code']));
		require_once('view/tour/tour_detail.php');
	}
	else
		header('location: index.php')
 ?>