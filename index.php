<?php
	session_start();
	if (isset($_SESSION['user'])) {
		echo "Hi ".$_SESSION['user'];
	}else{
		header('location:Home/login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<h1>MovieComments.com</h1>
	
	<a href="Home/signup.php">My Comments</a>
	<a href="Home/logout.php">Logout</a>


</body>
</html>