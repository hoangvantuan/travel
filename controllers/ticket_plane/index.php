<?php 
	$title = "AD Tourist - Dịch vụ Vé máy bay";
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
	$ticket_plane_name=get_all('ticket_plane');
	if (isset($_GET['ticket_plane_id'])&&isset($_GET['ticket_plane_content_id'])) {
		$ticket_plane_id=$_GET['ticket_plane_id'];
		$ticket_plane_content_id=$_GET['ticket_plane_content_id'];
		$ticket_plane_content=get_a_record('ticket_plane_content','ticket_plane_content_id',$ticket_plane_content_id);
		
		
	}
	elseif (isset($_GET['ticket_plane_id'])) {
		$ticket_plane_id=$_GET['ticket_plane_id'];
	}else $ticket_plane_id=$ticket_plane_name[0]['ticket_plane_id'];
	$id= get_a_record('ticket_plane','ticket_plane_id',$ticket_plane_id);
	$content=get_all_record('ticket_plane_content','ticket_plane_id',$id['ticket_plane_id']);
	require_once(BASEPATH.'view/ticket_plane/index.php');
 ?>