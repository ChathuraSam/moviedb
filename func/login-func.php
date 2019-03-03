<?php
session_start();
	function authenticate($conn, $username, $password, $rememberMe) {
		$query = "select * from users where username='$username' and password='$password'";
		$result = mysqli_query($conn, $query);
		$msg = "";
		if ($result) {
			$rows = mysqli_num_rows($result);
			if ($rows == 1) { // Success
				$msg = "Login Success!";
				$_SESSION['user'] = $username;
				if ($rememberMe == "yes") {
					setcookie('rememberMe', $rememberMe, time()+60);
				}
				header('location:../index.php');
			}else{
				$msg = "Login Not Success!";
			}
		}else{
			$msg = "No result!";
		}
		return $msg;
	}
//select * from login_details where username='user1' and password='pass1'
?>