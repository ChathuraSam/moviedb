<?php
	function loadAllImages($conn) {
		$query = "select * from moviedetails";
		$result = mysqli_query($conn, $query);
		$images = array();
		$i = 0;
		if ($result) {
			$noOfRows = mysqli_num_rows($result);
			if ($noOfRows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$images[$i] = $row;
					$i++;
				}
			}else{
				$images = null;
			}
		}else{
			$images = null;
		}
		return $images;
	}
?>