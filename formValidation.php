<!--Forms validation and security-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td align="right">Reg No :</td>
				<td><input type="text" name="regNo"
				value="<?php if (isset($_POST['regNo'])) {
					echo $_POST['regNo'];
				} 
				?>" 
				></td>
				<td>
					<?php
					if ($_SERVER['REQUEST_METHOD'] == "POST") {
						setErrorMessage1($_POST['regNo']);
					}
					?>
				</td>
			</tr>
			<tr>
				<td align="right">Name :</td>
				<td><input type="text" name="name"
					value="<?php if (isset($_POST['name'])) {
					echo $_POST['name'];
				} 
				?>"></td>
				<td>
					<?php
					if ($_SERVER['REQUEST_METHOD'] == "POST") {
						setErrorMessage2($_POST['name']);
					}
					?>
				</td>
			</tr>
			<tr>
				<td align="right">Email address :</td>
				<td><input type="text" name="email"
				value="<?php if (isset($_POST['email'])) {
					echo $_POST['email'];
				} 
				?>"></td>
				<td>
					<?php
					if ($_SERVER['REQUEST_METHOD'] == "POST") {
						setErrorMessage3($_POST['email']);
					}
					?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnRegister" value="Register"></td>
				<td></td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php

function secureInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//Validation
function setRegnoRequiredFields($reg)
{
	$regError = null;
	if (empty($reg) ) {
		$regError = "Please enter a registration number !";
	}
	return $regError;
}
function setNameRequiredFields($name)
{
	$nameError = null;
	if (empty($name) ) {
		$nameError = "Please enter Your name !";
	}
	else{
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  			$nameError = "name can contain only letters and white space"; 
		}
	}
	return $nameError;
}
function setEmailRequiredFields($email)
{
	$emailError = null;
	if (empty($email) ) {
		$emailError = "Please enter an email address !";
	}
	else{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailError = "Invalid email format"; 
		}
	}
	return $emailError;
}
function setErrorMessage1($value)
{
	//Set Error message
	$reg = secureInput($value);
	echo "<span style='color: red'>".setRegnoRequiredFields($reg)."</span>";
}
function setErrorMessage2($value)
{
	//Set Error message
	$reg = secureInput($value);
	echo "<span style='color: red'>".setNameRequiredFields($reg)."</span>";
}
function setErrorMessage3($value)
{
	//Set Error message
	$reg = secureInput($value);
	echo "<span style='color: red'>".setEmailRequiredFields($reg)."</span>";
}

/* if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}*/
?>