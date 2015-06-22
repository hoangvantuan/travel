<?php 
	$active = 'tour';
	$lang = get_lang();
	$title = "Thêm tour du lịch";
	$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?lang='.$lang.'&controller=tour'));
	$tour_region = get_all('tour_region');
	if(isset($_POST['submit']))
	{
		$title = $_POST['title'];
		$description = $_POST['description'];
		$tour_region_code = $_POST['tour_region_name'];
		$time = $_POST['time'];
		$total_cost = $_POST['total_cost'];
		$content = $_POST['content'];
		$content_cost = $_POST['content_cost'];
		$possition = $_POST['possition'];
		$image_relate = $_POST['image_relate'];

		$tour_country_code = get_a_record('tour_region','tour_region_code',$tour_region_code);
		$tour_country_code = $tour_country_code['tour_country_code'];
		if($tour_country_code == 1) $tour_country_name = 'incountry';
		else if ($tour_country_code == 2) $tour_country_name = 'outcountry';
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
					$image_new_path = ROOTPATH.'asset/image/tour/'.$lang.'/'.$tour_country_name.'/'.$image;

					if(file_exists($image_new_path))
					{
						$image_error = 'File ảnh đã tồn tại';
						$errors = 1;
					}
					else
					{
					$upload = move_uploaded_file($_FILES['upload_image']['tmp_name'], $image_new_path);
					if(!$upload)
					{
						$errors = 1;
						$image_error = "Có lỗi trong khi upload ảnh";
					}
					else
						$image_path = 'asset/image/tour/'.$lang.'/'.$tour_country_name.'/'.$image;
					}
				}
			}
		}

		if($errors ==0 ){
			$create_at = get_time();
			$data = array('title'=>$title, 'image'=>$image_path, 'description'=>$description, 'time'=>$time,
				'total_cost'=>$total_cost, 'content'=>$content, 'content_cost'=>$content_cost, 'possition'=>$possition, 'image_relate' => $image_relate, 'create_at'=>$create_at,'tour_country_code'=>$tour_country_code, 'tour_region_code'=>$tour_region_code);
		

			$check = save('tour_content',$data);
			if($check){
				$success = "Thêm tour thành công";
			}
			else
			{
				$success ="Thêm tour thất bại";
				unlink(ROOTPATH.$image_path);
			}



		
	}
}
		require('view/tour/add.php');
 ?>