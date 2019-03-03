<?php
	function usersignup($conn,$username, $firstName, $lastName, $age, $password) {
		$query = "insert into users values ('$username', '$firstName', '$lastName', $age, '$password');";
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo "Data Inserted!";
		}else{
			echo $query;
		}
	}
?>