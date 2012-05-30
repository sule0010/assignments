<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Validation</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
	
		<form method="post" action="index.php">
			<div>
				<label for="name">Name </label>
				<input type="text" id="name" name="name" required value="">
			</div>
			
			<div>
				<label for="email">E-mail Address </label>
				<input type="email" id="email" name="email" required value="">
			</div>
			
			<div>
				<label for="name">User-Name</label>
				<input type="text" id="name" name="name" required value="" max="25">
			</div>
			
			<div>
				<label for="password">Password</label>
				<input type="password" id="password" name="name" required value="">
			</div>
			
			<div>
				<fieldset>
					<legend>Preferred Language</legend>
					
					<input type="radio" id="eng" name="lang">
					<label for="eng">English</label>
					
					<input type="radio" id="frn" name="lang">
					<label for="frn">French</label>
					
					<input type="radio" id="esp" name="lang">
					<label for="esp">Spanish</label>
			</div>
			
			<div>
				<label for="message">Notes</label>
				<textarea id="message" name="message"></textarea>
			</div>
			
			<div>
				<label for="terms">Accept terms?</label>
				<input type="checkbox" id="terms" name="terms" required value="">
			</div>
			
			<button type="submit">Send</button>
		</form>
	
	</body>
</html> 