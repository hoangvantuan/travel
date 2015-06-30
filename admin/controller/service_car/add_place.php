<?php 
	$title = "Thêm địa điểm";
	$active = 'car';
	$lang = get_lang();
	$all_place = get_all('car_area');
	if(isset($_POST['submit'])){
		$msdd = $_POST['msdd'];
		$tendiadiem = $_POST['tendiadiem'];
		$error = 0;
		foreach ($all_place as $key) {
			if($key['tendiadiem'] == $tendiadiem || $key['msdd'] == $msdd){
				$success = "Trùng mã số địa điểm hoặc tên địa điểm";
				$error = 1;
			}
		}
			if($error == 0)
			{
				$data = array('msdd'=>$msdd,'tendiadiem'=>$tendiadiem);
				save('car_area',$data);
				header('location:index.php?controller=service_car&action=add_place&lang='.$lang);
				
			}
			else 
				require_once('view/service_car/add_place.php');
			
		}
	else if(isset($_GET['delete'])){
		$msdd = $_GET['delete'];
		delete('car_area','msdd',$msdd);
		delete('car_service','msdd',$msdd);
		header('location:index.php?controller=service_car&action=add_place&lang='.$lang);
	}
	else 
		require_once('view/service_car/add_place.php');

 ?>