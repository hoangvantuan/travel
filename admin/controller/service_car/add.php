<?php 
	$active = 'car';
	$lang = get_lang();
	$title = "Thêm dịch vụ xe";
	$car_area = get_all('car_area');
	$current_possition = array(array('name'=>'Danh sách các nhà cung cấp dịch vụ xe','link'=>'index.php?lang='.$lang.'&controller=service_car'));
	if(isset($_POST['submit']))
	{
		$mshx = $_POST['mshx'];
		$msdd = $_POST['msdd'];
		$tenhangxe = $_POST['tenhangxe'];
		$diemden = $_POST['diemden'];
		$diemdi = $_POST['diemdi'];
		$soghe = $_POST['soghe'];
		$gia = $_POST['gia'];
		$lienhe = $_POST['lienhe'];
		$data = array('msdd'=>$msdd, 'mshx' => $mshx, 'tenhangxe' => $tenhangxe, 'diemden' =>$diemden, 'diemdi'=>$diemdi, 
						'soghe'=>$soghe, 'gia' => $gia, 'lienhe' =>$lienhe);
		$data2 = array('msdd' => $msdd, 'tendiadiem' => $diemden);
		$check2 = save('car_service', $data2);
		$check = save('car_service', $data);
		if($check){
				$success = "Bạn đã cập nhật thành công";
			}
		else 
			{
				$success = "Cập nhật thất bại";
			}
		require_once('view/service_car/add.php');
	}
	else{
		require_once('view/service_car/add.php');
	}
 ?>