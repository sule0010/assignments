<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Money Calculator Forms</title>
	</head>
	
	<body>
	
	<form method="post" action="index.php">
			<label id="number">Number 1</label>
			<input type="number" name="number" min="1" max="">
			
			<label id="number">Number 2</label>
			<input type="number" name="number" min="1" max="">
			
			<label id="function">function</label>
			<select>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
				
			<button type="submit">Calculate</button>
		</form>
	
	</body>
</html>