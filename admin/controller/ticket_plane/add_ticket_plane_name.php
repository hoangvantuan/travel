<?php
	$active="ticket_plane"; 
	$lang = get_lang();
if (isset($_POST['submit'])) {
	$ticket_plane_name=$_POST['ticket_plane_name'];
	$ticket_plane=array('ticket_plane_name'=>$ticket_plane_name);
	save('ticket_plane',$ticket_plane);
}
if (isset($_GET['del'])) {
	delete('ticket_plane','ticket_plane_id',$_GET['del']);
	delete('ticket_plane_content','ticket_plane_id',$_GET['del']);
}
	$ticket_plane=get_all('ticket_plane');
require('view/ticket_plane/add_ticket_plane_name.php');

 ?>