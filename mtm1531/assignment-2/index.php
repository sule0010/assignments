<?php
	$number1 = 0;
	$number2 = 0;
	$function = '';
	$answer =  0;
	
	if (isset($_POST['number-one'])) {
		$number1 = $_POST['number-one'];
		}
		
	if (isset($_POST['number-two'])) {
		$number2 = $_POST['number-two'];
		}
		
	if (isset($_POST['function'])) {
		$function = $_POST['function'];
		}
		
	switch ($function) {
		case '+' :
			$answer = $number1 + $number2;
		break;
		
		case '-' :
			$answer = $number1 - $number2;
		break;
		
		case '*' :
			$answer = $number1 * $number2;
		break;
		
		case '/' :
			$answer = $number1 / $number2;
		break;
	}
	
	$output = $answer * 1.13;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Money Calculator Form</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
	<form method="post" action="index.php">
			<label id="number">Number 1</label>
			<input type="number" name="number-one" min="1" max="">
			
			<label id="number">Number 2</label>
			<input type="number" name="number-two" min="1" max="">
			
			<label id="function">function</label>
			<select id="function" name="function">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
				
			<button type="submit">Calculate</button>
		</form>
		
		<h2>$<?php echo number_format($output, 2, '.', ''); ?></h2>
	</body>
</html>