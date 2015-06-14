<?php
	if (isset($_SESSION['email'])) {
		header('location:index.php?controller=dashboard');
	}elseif (isset($_POST['submit'])){
		$email=$_POST['Email'];
		$pass=$_POST['Password'];
		$check=get_a_record('account','email',$email);
		if ($check!=null) {
			if ($pass==$check['password']) {
				$_SESSION['email']=$email;
				header('location:index.php?controller=dashboard');
			}else $error='Sign in Fail ! Please try again !';
		}else $error='Sign in Fail ! Please try again !';
		

	}

?>




<?php require('view/sign/index.php'); ?>