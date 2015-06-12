<?php require_once('config.php'); ?>

<?php
//Nhận request từ trình duyệt gửi đến controller và action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'controllers/'.$controller.'/'.$action.'.php';
if(file_exists($file))
{
	require($file);

}
else
	echo 'error';
mysql_close($db);
 ?>






