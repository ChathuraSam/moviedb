<?php
	require_once '../conf/conf.php';
	require_once '../func/get-comments.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Movie Details</title>
</head>
<body>
	<?php
		$movieName = $_GET['moviename'];
		echo "<h3>$movieName</h3>";
	?>
	<hr>

	<?php
		$coverName = $_GET['covername'];
		echo "<img src=\"../coverimage/$coverName\">";
	?>

	
	<p style="font-weight: bold;">Movie Name</p>
	<?php
		$movieName = $_GET['moviename'];
		echo "$movieName";
	?>

	<p style="font-weight: bold;">Casts</p>
	<?php
		$stars = $_GET['stars'];
		echo "$stars";
	?>

	<p style="font-weight: bold;">Writer</p>
	<?php
		$writer = $_GET['writer'];
		echo "$writer";
	?>

	<p style="font-weight: bold;">Director</p>
	<?php
		$director = $_GET['director'];
		echo "$director";
	?>

	<p style="font-weight: bold;">Genere</p>
	<?php
		$genere = $_GET['genere'];
		echo "$genere";
	?>

	<p style="font-weight: bold;">Year</p>
	<?php
		$year = $_GET['year'];
		echo "$year";
	?>

	<p style="font-weight: bold;">Story Line</p>
	<?php
		$story = $_GET['story'];
		echo "$story";
	?>

	<a href="AddComment.php?movieId=''">
		<button>Add Comment</button>
	</a>

	<?php
		$movieId = str_replace( "'", "", $_GET['movieId'] );  // Here use this function to remove single quotes.
		echo "<br>$movieId<br>";
		$commentList = array();
		$commentList = getSpecificComments($conn, $movieId);

		if ($commentList == null) {
			echo "No comments";
		}

		foreach ($commentList as $key => $value) {
			$user = $value['user'];
			$comment = $value['comment'];
			$dateTime = $value['dateandtime'];
			echo "

			<table border=\"1\" style=\"margin-top: 10px\">
					<tr>
						<td>
							By $user
						</td>
					</tr>
					<tr>
						<td>
							$comment
						</td>
					</tr>
					<tr>
						<td>
							Commsnted on $dateTime
						</td>
					</tr>
				</table>
			";
		}
		// Have to Load Comments Here
	?>

	


</body>
</html>


<a href=\"movie-detail.php?movieId='$movieId'&moviename='$movieName'&stars='$stars'&writer='$writer'&director='$director'&genere='$genere'&year='$year'&story='$story'&covername=$coverName\">