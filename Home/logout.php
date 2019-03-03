<?php
	session_unset();
	setcookie('rememberMe',time()-60);

	header('location:login.php');
	session_start();


?>