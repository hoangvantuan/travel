<?php
	$title = "Danh sách Tour";
	$active = 'tour';
	$lang = get_lang();
	$tour_region = get_all('tour_region');
	$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?lang='.$lang.'&controller=tour'));
	if(isset($_POST['tour_region_code']))
	{
		$tour_region_code = $_POST['tour_region_code'];
		if($tour_region_code == 0 )
		{
			$tour = get_all('tour_content');

		}
		else{
			$selected = $tour_region_code;
			$tour = get_all_record('tour_content','tour_region_code',$tour_region_code);
		} 

	}
	else
	{
		$tour = get_all('tour_content');
	}
	require_once('view/tour/index.php');
 ?>