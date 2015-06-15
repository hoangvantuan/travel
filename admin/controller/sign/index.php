<?php
if (isset($_POST['submit'])){
		$email=$_POST['Email'];
		$pass=$_POST['Password'];
		$check = check_admin($email, $pass);
		if($check)
		{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;
			header('location:index.php?controller=dashboard');
		}
		else 
			$error = 'Sign in Failure ! Please try again.';
	}

?>

<?php require('view/sign/index.php'); ?>