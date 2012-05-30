<?php
require_once 'includes/form-process.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Validation</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
	<?php if ($finished == true) :?>
		<h2>Thanks for registering</h2>
	<?php else : ?>
			
		<form method="post" action="index.php">
			<div>
				<label for="name">Name<?php if (isset($errors['name'])): ?><strong class="error"> is required</strong><?php endif; ?></label>
				<input type="text" id="name" name="name" required value="<?php echo $name; ?>">
			</div>
			
			<div>
				<label for="email">E-mail Address<?php if (isset($errors['email'])): ?><strong class="error"> is required</strong><?php endif; ?></label>
				<input type="email" id="email" name="email" required value="<?php echo $email; ?>">
			</div>
			
			<div>
				<label for="u-name">User-Name<?php if (isset($errors['uName'])): ?><strong class="error"> is required</strong><?php endif; ?></label>
				<input type="text" id="uName" name="uName" required value="<?php echo $uName; ?>" max="25">
			</div>
			
			<div>
				<label for="password">Password<?php if (isset($errors['password'])): ?><strong class="error"> is required</strong><?php endif; ?></label>
				<input type="password" id="password" name="password" required value="<?php echo $password; ?>">
			</div>
			
			<div>
				<fieldset>
					<legend>Preferred Language<?php if (isset($errors['lang'])): ?><strong class="error"> please pick one of the options</strong><?php endif; ?></legend>
					
					<input type="radio" id="eng" name="lang" value="eng"<?php if($lang == 'eng'){ echo '✓';} ?>>
					<label for="eng">English</label>
					
					<input type="radio" id="frn" name="lang" value="frn"<?php if($lang == 'frn'){ echo '✓';} ?>>
					<label for="frn">French</label>
					
					<input type="radio" id="esp" name="lang" value="esp"<?php if($lang == 'esp'){ echo '✓';} ?>>
					<label for="esp">Spanish</label>
				</fieldset>
			</div>
			
			<div>
				<label for="message">Notes<?php if (isset($errors['message'])): ?><strong class="error"> must be between 5 and 100 chracters</strong><?php endif; ?></label>
				<textarea id="message" name="message"></textarea>
			</div>
			
			<div>
				<label for="terms">Accept terms?<?php if (isset($errors['terms'])): ?><strong class="error"> Terms must be accepted</strong><?php endif; ?></label>
				<input type="checkbox" id="terms" name="terms" required value="1">
			</div>
			
			<button type="submit">Send</button>
		</form>
	<?php endif; ?>
	
	</body>
</html> 