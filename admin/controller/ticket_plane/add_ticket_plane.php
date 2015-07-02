<?php
	$active="ticket_plane"; 
	$lang = get_lang();
if (isset($_POST['submit'])) {
	$ticket_plane_name=$_POST['ticket_plane_name'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ticket_plane_id=get_a_record('ticket_plane','ticket_plane_name',$ticket_plane_name);
	$ticket_plane=array('ticket_plane_id'=>$ticket_plane_id['ticket_plane_id'],'ticket_plane_title'=>$title,'ticket_plane_content'=>$content);
	save('ticket_plane_content',$ticket_plane);
	$success="Thêm thành công ! ";
}
$ticket_plane_name=get_all('ticket_plane');
require('view/ticket_plane/add_ticket_plane.php');

 ?>