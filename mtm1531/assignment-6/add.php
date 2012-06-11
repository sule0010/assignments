<?php

$errors = array();

require_once 'includes/db.php';

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_NUMBER_INT);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
$rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(strlen($title) < 1 || strlen($title) > 60) {
		$errors['title'] = true;
	}
	
	if(strlen($director) < 1 || strlen($director) > 30) {
		$errors['director'] = true;
	}
	
	if(strlen($genre) < 1 || strlen($genre) > 20) {
		$errors['genre'] = true;
	}
	
	if(($rating) < 1 || strlen($title) > 10) {
		$errors['rating'] = true;
	}
	if (empty($errors)) {
		//Do DB stuff
		$sql = $db->prepare('
			INSERT INTO movies (title, release_date, director, genre, rating)
			VALUES (:title, :release_date, :director, :genre, :rating)
		');
		$sql->bindValue(':title', $title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_INT);
		$sql->bindValue(':director', $director, PDO::PARAM_INT);
		$sql->bindValue(':genre', $genre, PDO::PARAM_INT);
		$sql->bindValue(':rating', $rating, PDO::PARAM_INT);
		$sql->execute();
		
		header('Location: index.php');
		exit;
	}
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add New Movie</title>
	</head>

	<body>
		<h1>Add New Movie</h1>
		
		<form method="post" action="add.php">
			<div>
				<label for="title">Title<?php if (isset($errors['title'])) : ?><strong class="errors">is required</strong><?php endif; ?></label>
				<input id="title" name="title" required value="<?php echo $title; ?>">
			</div>
			<div>
				<label for="release_date">Release Date<?php if (isset($errors['release_date'])) : ?><strong class="errors">is required</strong><?php endif; ?></label>
				<input id="release_date" name="release_date" required value="<?php echo $release_date; ?>">
			</div>
			<div>
				<label for="director">Director<?php if (isset($errors['director'])) : ?><strong class="errors">is required</strong><?php endif; ?></label>
				<input id="director" name="director" required value="<?php echo $director; ?>">
			</div>
			<div>
				<label for="genre">Genre<?php if (isset($errors['genre'])) : ?><strong class="errors">is required</strong><?php endif; ?></label>
				<input id="genre" name="genre" required value="<?php echo $genre; ?>">
			</div>
			<div>
				<label for="rating">Rating<?php if (isset($errors['rating'])) : ?><strong class="errors">is required</strong><?php endif; ?></label>
				<input id="rating" name="rating" required value="<?php echo $rating; ?>">
			</div>
			<button type="submit">Add</button>
		</form>
	</body>
</html>