<?php

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = $db->prepare('
	SELECT id, title, release_date, director, genre, rating
	FROM movies
	WHERE id = :id
');
//bindValue(placeholder, variable, datatype)
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $results['title']; ?> &middot; Movies</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<h1><?php echo $results['title']; ?></h1>
			<dl>
				<dt>Release Date</dt>
				<dd><?php echo $results['release_date']; ?></dd>
				<dt>Director</dt>
				<dd><?php echo $results['director']; ?></dd>
				<dt>Genre</dt>
				<dd><?php echo $results['genre']; ?></dd>
				<dt>Rating</dt>
				<dd><?php echo $results['rating']; ?></dd>
			</dl>
		
			<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
			<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
		</div>
	</body>
</html>