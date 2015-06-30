<?php 
	$title = "AD Tourist - Dịch vụ xuất khẩu lao động ";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$area = get_all('car_area');
	$lang = get_lang();
	$news = get_all('news_event');
	$tour_region = get_all('tour_region');
	$labor_name=get_all('labor');
	if (isset($_GET['labor_id'])&&isset($_GET['labor_content_id'])) {
		$labor_id=$_GET['labor_id'];
		$labor_content_id=$_GET['labor_content_id'];
		$labor_content=get_a_record('labor_content','labor_content_id',$labor_content_id);
		
		
	}
	elseif (isset($_GET['labor_id'])) {
		$labor_id=$_GET['labor_id'];
	}else $labor_id=1;
	$id= get_a_record('labor','labor_id',$labor_id);
	$content=get_all_record('labor_content','labor_id',$id['labor_id']);
	require_once(BASEPATH.'view/labor/index.php');
 ?>