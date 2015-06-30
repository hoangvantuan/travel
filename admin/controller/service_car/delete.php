<?php 
	$active = 'car';
	$lang = get_lang();
	$title = 'Danh sách các dịch vụ xe';
	$service = get_all('car_service');
	if(isset($_GET['code']))
	{
		
		$current_possition = array(array('name'=>'Danh sách các dịch vụ xe','link'=>'index.php?lang='.$lang.'&controller=service_car'));
		$code = $_GET['code'];
		$check = delete('car_service','mshx',$code);
		
		if($check){
			$success = 'Xóa thành công';
		}
		else
			$success = 'Xóa chưa thành công';

		$tour = get_all('tour_content');
		header('location: index.php?lang='.$lang.'&controller=service_car');

	}
	else
		header('location: index.php?lang='.$lang.'&controller=service_car');
 ?>