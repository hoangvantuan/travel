<?php
	$active="ticket_plane"; 
	$lang = get_lang();
	if (isset($_GET['ticket_plane_content_id'])&&!isset($_POST['submit'])) {
	$ticket_plane_content_id=$_GET['ticket_plane_content_id'];
	$ticket_plane = get_a_record('ticket_plane_content','ticket_plane_content_id',$ticket_plane_content_id);
	$ticket_plane_name1=get_a_record('ticket_plane','ticket_plane_id',$ticket_plane['ticket_plane_id']);
	$ticket_plane_name=get_all('ticket_plane');
	require('view/ticket_plane/change.php');
}elseif (isset($_GET['ticket_plane_content_id'])&&isset($_POST['submit'])) {
	$ticket_plane_content_id=$_GET['ticket_plane_content_id'];
	$ticket_plane_name=$_POST['ticket_plane_name'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ticket_plane_id=get_a_record('ticket_plane','ticket_plane_name',$ticket_plane_name);

	$data = array('ticket_plane_id'=>$ticket_plane_id['ticket_plane_id'], 'ticket_plane_title'=>$title,'ticket_plane_content'=>$content);
	update_record('ticket_plane_content','ticket_plane_content_id',$ticket_plane_content_id,$data);

	$ticket_plane = get_a_record('ticket_plane_content','ticket_plane_content_id',$ticket_plane_content_id);
	$ticket_plane_name1=get_a_record('ticket_plane','ticket_plane_id',$ticket_plane['ticket_plane_id']);
	$ticket_plane_name=get_all('ticket_plane');
$success="Thay đổi thành công !";
require('view/ticket_plane/change.php');


}

 ?>