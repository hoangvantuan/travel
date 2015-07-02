<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
    delete('ticket_plane_content','ticket_plane_content_id',$_GET['delete']);
}
  $active='ticket_plane';
  $ticket_plane=get_all('ticket_plane');
  if(isset($_POST['ticket_plane_id']))
    {
        $ticket_plane_id = $_POST['ticket_plane_id'];
        if($ticket_plane_id == 0 )
        {
            $products = get_all('ticket_plane_content');

        }
        else{
            $selected = $ticket_plane_id;
            $products = get_all_record('ticket_plane_content','ticket_plane_id',$ticket_plane_id);
        } 

    }
    else
    {
          $products = get_all('ticket_plane_content');
    }
   require('view/ticket_plane/index.php');
   ?>