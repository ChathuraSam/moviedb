<?php
	require_once '../conf/conf.php';
	require_once '../func/login-func.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js""></script>
</head>
<body>

	<h1>MovieComments.com</h1>
	
	<a href="signup.php">SignUp</a>
	<a href="login.php">Login</a>

	<h1>Login</h1>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$rememberMe= null;
			if (isset($_POST['chkrememberme'])) {
				$rememberMe = "yes";
			}
			$msg = authenticate($conn, $username, $password, $rememberMe);
		}
	?>

	<form method="POST" action="<?php echo($_SERVER['PHP_SELF']);?>">
		<table>
			<tr>
				<td>
					Username
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password">			
				</td>
			</tr>
			<tr>
				<td>
					Remember Me<input type="checkbox" name="chkrememberme"> 
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit">
				</td>
			</tr>
		</table>		
	</form>

	<?php
		if (isset($msg)) {
			echo $msg;
		}
	?>
</body>
</html>