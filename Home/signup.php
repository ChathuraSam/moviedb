<?php
	require_once '../conf/conf.php';
	require_once '../func/signup-func.php';
	$err=null;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js""></script>
</head>
<body>
	<h1>MovieComments.com</h1>
	
	<a href="signup.php">SignUp</a>
	<a href="login.php">Login</a>

	<h1>Signup</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td>
					Username
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtusername">
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['btnRegister']) ) {
							if ($_POST['txtusername'] == '') {
								echo "<p style='color: red'>Please enter the Username</p>";
								$err = "true";
							}else{
								$err = null;
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					First Name
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtfirstname">
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['btnRegister']) ) {
							if ($_POST['txtfirstname'] == '') {
								echo "<p style='color: red'>Please enter the First Name</p>";
								$err = "true";
							}else{
								$err = null;
							}
						}
					?>
				</td>
			</tr>

			<tr>
				<td>
					Last Name
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtlastname">
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['btnRegister']) ) {
							if ($_POST['txtlastname'] == '') {
								echo "<p style='color: red'>Please enter the Last Name</p>";
								$err = "true";
							}else{
								$err = null;
							}
						}
					?>
				</td>
			</tr>

			<tr>
				<td>
					Age
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtage">
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['btnRegister']) ) {
							if ($_POST['txtage'] == '') {
								echo "<p style='color: red'>Please enter the Age</p>";
								$err = "true";
							}else{
								$err = null;
							}
						}
					?>
				</td>
			</tr>

			<tr>
				<td>
					New Password
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtnewpassword">
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['btnRegister']) ) {
							if ($_POST['txtnewpassword'] == '') {
								echo "<p style='color: red'>Please enter the New Password/p>";
								$err = "true";
							}else{
								$err = null;
							}
						}
					?>
				</td>
			</tr>

			<tr>
				<td>
					Comform Password
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtcomfirmpassword">
				</td>
			</tr>
			<tr>
				<td>
					<?php
						if (isset($_POST['btnRegister']) ) {
							if ($_POST['txtcomfirmpassword'] == '' || !($_POST['txtcomfirmpassword'] == $_POST['txtnewpassword'])) {
								echo "<p style='color: red'>Please enter the New Password Correct/p>";
								$err = "true";
							}else{
								$err = null;
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnRegister" value="Register">
				</td>
			</tr>
		</table>
	</form>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['txtusername'];
		$firstName = $_POST['txtfirstname'];
		$lastName = $_POST['txtlastname'];
		$age = $_POST['txtage'];
		$password = $_POST['txtnewpassword'];

		if (!$err) {
			$msg = usersignup($conn, $username, $firstName, $lastName, $age, $password);
		}
		
		if (isset($msg)) {
			echo $msg;
		}
	}
?>

</body>
</html>