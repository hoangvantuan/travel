<!DOCTYPE html>
<?php session_start();?>
<?php require_once('config.php');?>
<?php require_once('library/function.php'); ?>
<?php require_once('model/database.php'); ?>
<?php
//Nhận request từ trình duyệt gửi đến controller và action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'sign';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'controller/'.$controller.'/'.$action.'.php';
if(file_exists($file))
    require($file);
else
    show_404();
mysql_close($db);


 ?>
