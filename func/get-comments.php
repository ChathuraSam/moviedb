<?php
	function getSpecificComments($conn, $movieId) {
		$query = "select * from comments where movieId='$movieId'";
		$result = mysqli_query($conn, $query);
		$comments = array();
		$i = 0;
		if ($result) {
			$noOfRows = mysqli_num_rows($result);
			if ($noOfRows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$comments[$i] = $row;
					$i++;
				}
			}else{
				$comments = null;
			}
		}else{
			$comments = null;
		}
		return $comments;
	}
?>

