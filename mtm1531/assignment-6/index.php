<?php

require_once 'includes/db.php';

$sql = $db->query('
	SELECT id, title, release_date, director, genre, rating
	FROM movies
	ORDER BY title ASC
');

$results = $sql->fetchAll();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Movies</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	<body>
	<div class="wrapper">
		<a href="add.php"> Add A Movie</a>
		<h1>Movies</h1>
		<?php foreach ($results as $movies) : ?>
			<h2><a href="single.php?id=<?php echo $movies['id']; ?>"><?php echo $movies['title']; ?></a></h2>
			<dl>
				<dt>Release Date</dt>
				<dd><?php echo $movies['release_date']; ?></dd>
				<dt>Director</dt>
				<dd><?php echo $movies['director']; ?></dd>
				<dt>Genre</dt>
				<dd><?php echo $movies['genre']; ?></dd>
				<dt>Rating</dt>
				<dd><?php echo $movies['rating']; ?></dd>
			</dl>
		<?php endforeach; ?>
	</div>
	</body>
</html>