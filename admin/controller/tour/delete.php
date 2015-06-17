<?php 
	$active = 'tour';
	$lang = get_lang();
	$title = 'Danh sách các tour';
	if(isset($_GET['tour_content_code']))
	{
		
		$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?lang='.$lang.'&controller=tour'));
		$tour_content_code = $_GET['tour_content_code'];
		$image = get_a_record('tour_content','tour_content_code',$tour_content_code);
		$image = $image['image'];
		$check = delete('tour_content','tour_content_code',$tour_content_code);
		if($check){
			$success = 'Xóa thành công';
			if($image !="")
			{
				unlink(ROOTPATH.$image);
			}
		}
		else
			$success = 'Xóa chưa thành công';

		$tour = get_all('tour_content');
		require_once('view/tour/index.php');

	}
	else
		header('location: index.php?lang='.$lang.'&controller=tour');
 ?>