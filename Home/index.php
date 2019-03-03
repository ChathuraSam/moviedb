<?php

	require_once '../conf/conf.php';
	require_once '../func/get-images.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h1>MovieComments.com</h1>

	<h2>All Movies</h2>
	
	<a href="signup.php">Signup</a>
	<a href="login.php">Login</a><br>

	<?php  
		$images = array();
		$images = loadAllImages($conn);
		foreach ($images as $key => $value) {
			
			$movieId = $value['Movie_id'];
			$movieName = $value['name'];
			$stars = $value['Stars'];
			$writer = $value['writter'];
			$director = $value['director'];
			$genere = $value['genere'];
			$year = $value['Year'];
			$story = $value['story_Line'];
			$coverName =  $value['coverimage'];

			// echo "<img src='../coverimage/$coverName'>";
			// echo "$movieName";

			echo "
				<a href=\"movie-detail.php?movieId='$movieId'&moviename='$movieName'&stars='$stars'&writer='$writer'&director='$director'&genere='$genere'&year='$year'&story='$story'&covername=$coverName\">
				<img src='../coverimage/$coverName'>
				</a>
			";
		}
	?>

</body>
</html>