<?php
	define('SERVER', 'localhost');
	define('USER', 'user2');
	define('PASSWORD', 'abc123');
	define('DB', 'moviedb');

	$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);

	if (!$conn) {
		die("Database Connection Error!");
	}else{
		echo "Connection Sucess!";
	}
?>