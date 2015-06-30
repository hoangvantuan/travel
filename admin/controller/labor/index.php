<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
    delete('labor_content','labor_content_id',$_GET['delete']);
}
  $active='labor';
  $labor=get_all('labor');
  if(isset($_POST['labor_id']))
    {
        $labor_id = $_POST['labor_id'];
        if($labor_id == 0 )
        {
            $products = get_all('labor_content');

        }
        else{
            $selected = $labor_id;
            $products = get_all_record('labor_content','labor_id',$labor_id);
        } 

    }
    else
    {
          $products = get_all('labor_content');
    }
   require('view/labor/index.php');
   ?>