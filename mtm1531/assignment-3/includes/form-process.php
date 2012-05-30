<?php

$errors = array();

$finished = false;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$uName = filter_input(INPUT_POST, 'uName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$lang = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(empty($name)) {
		$errors['name'] = true;
	}
	if(empty($uName)) {
		$errors['uName'] = true;
	}
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	
	if(mb_strlen($message) < 5 || mb_strlen($message) > 100) {
		$errors['message'] = true;
	}
	if(!isset($_POST['terms'])) {
		$errors['terms'] = true;
	}
	if ($lang != 'eng' || $lang != 'frn' || $lang != 'esp') {
		$errors['lang'] = true;
	}
	if(empty($errors)) {
		$finished = true;
		$headers = 'From: ' . $name . ' <' . $email . ' >';
		mail('kurodeshiro@gmail.com', $uName, $message, $headers);  
	}
}
?>