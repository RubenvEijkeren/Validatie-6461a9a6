<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form method="POST">
		<input type="email" name="email" placeholder="Type your email here">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
			echo $_POST["email"] . " is a valid email address";
		else
			echo $_POST["email"] . " is not a valid email address";
	?>
</body>
</html>