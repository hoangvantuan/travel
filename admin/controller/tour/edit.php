<?php 

	$active = 'tour';
	$title = "Sửa Nội Dung";
	require_once('template/header.php');
	if(isset($_GET['tour_content_code']) && !isset($_POST['submit'])){
		$tour_content_code = $_GET['tour_content_code'];
		$tour = get_a_record('tour_content','tour_content_code',$tour_content_code);
		$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?controller=tour'),
									array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code']));
		require_once('view/tour/tour_edit.php');
	}
	else if(isset($_POST['submit']) && isset($_GET['tour_content_code'])){
		$tour_content_code = $_GET['tour_content_code'];
		$tour = get_a_record('tour_content','tour_content_code', $tour_content_code);
		$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?controller=tour'),
									array('name'=>$tour['title'],'link'=>'index.php?controller=tour&amp;action=tour_detail&amp;tour_content_code='.$tour['tour_content_code']));
		if($tour['tour_country_code'] == 1) $tour_country_name = 'incountry';
		else if ($tour['tour_country_code'] == 2) $tour_country_name = 'outcountry';
		$success = null;
		$errors = 0;


		//Processing upload image
		$image = $_FILES['upload_image']['name'];
		if($image){
			$extension = getExtension($image);
			$extension = strtolower($extension);
			if(($extension !='jpg') && ($extension !='jpeg') && ($extension !='png')){
				$image_error = "Chỉ cho phép upload ảnh định dạng jpg, jpeg, png";
				$errors = 1;
			}
			else
			{
				$size_image = filesize($_FILES['upload_image']['tmp_name']);
				if($size_image > MAXSIZE *8000)
				{
					$image_error = "Dung lượng file ảnh không được quá 4mb";
					$errors = 1;
				}
				else{
					$image_new_path = ROOTPATH.'asset/image/tour/'.$tour_country_name.'/'.$image;

					if(file_exists($image_new_path))
					{
						$image_error = 'File ảnh đã tồn tại';
						$errors = 1;
					}
					else
					{
					$upload = move_uploaded_file($_FILES['upload_image']['tmp_name'], $image_new_path);
					echo $_FILES['upload_image']['tmp_name'];
					if(!$upload)
					{
						$errors = 1;
						$image_error = "Có lỗi trong khi upload ảnh";
					}
					else
						$image_path = 'asset/image/tour/'.$tour_country_name.'/'.$image;
						unlink(ROOTPATH.$tour['image']);
					}
				}
			}
		}

		if($errors ==0){
			$title = $_POST['title'];
			$description = $_POST['description'];
			$time = $_POST['time'];
			$total_cost = $_POST['total_cost'];
			$content = $_POST['content'];
			$content_cost = $_POST['content_cost'];
			$policy = $_POST['policy'];
			$update_at = get_time();
			if(!isset($image_path))
			$data = array('title' => $title, 'description'=>$description, 'time' => $time, 'total_cost' =>$total_cost, 'content'=>$content, 
						'content_cost'=>$content_cost, 'policy' => $policy, 'update_at' =>$update_at);
			else
			$data = array('title' => $title,'image'=>$image_path, 'description'=>$description, 'time' => $time, 'total_cost' =>$total_cost, 'content'=>$content, 
						'content_cost'=>$content_cost, 'policy' => $policy, 'update_at' =>$update_at);
			$check = update_record('tour_content', 'tour_content_code',$tour_content_code, $data);
				if($check){
			$success = "Bạn đã cập nhật thành công";
			}
			else 
			{
				$success = "Cập nhật thất bại";
				unlink($image_new_path);
			}
		}
			require_once('view/tour/tour_detail.php');

}
	else
	header('location: index.php');	
 ?>	
