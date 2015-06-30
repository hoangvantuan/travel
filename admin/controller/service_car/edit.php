<?php 
	$active = 'car';
	$lang = get_lang();
	$title = "Sửa nội dung";
	if(isset($_GET['code']) && !isset($_POST['submit'])){
		$code = $_GET['code'];
		$service = get_a_record('car_service','mshx',$code);
		$current_possition = array(array('name'=>'Danh sách hãng xe','link'=>'index.php?lang='.$lang.'&controller=service_car'),
									array('name'=>$service['tenhangxe'],'link'=>'index.php?lang='.$lang.'&controller=service_car&amp;action=detail_service&amp;code='.$service['mshx']));
		require_once('view/service_car/edit.php');
	}
	else if(isset($_POST['submit']) && isset($_GET['code'])){
		$code = $_GET['code'];
		$service = get_a_record('car_service','mshx', $code);
		$current_possition = array(array('name'=>'Danh sách hãng xe','link'=>'index.php?lang='.$lang.'&controller=service_car'),
									array('name'=>$service['tenhangxe'],'link'=>'index.php?lang='.$lang.'&controller=service_car&amp;action=detail_service&amp;code='.$service['mshx']));
		$success = null;
		$errors = 0;
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
		$check = update_record('car_service', 'mshx',$code, $data);
		if($check){
				$success = "Bạn đã cập nhật thành công";
			}
		else 
			{
				$success = "Cập nhật thất bại";
			}
		header('location:index.php?lang='.$lang.'&controller=service_car');
		}
		else{
			header('location: index.php?lang='.$lang);	
		}
 ?>	
