<?php
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Sign Up</title>
</head>

<body>
	<article id="logsi">
		<div class="logsi-box">
		<h1 class="logsi-head">Sign Up</h1>
	<form action="register.php" method="post" class="logsi-form">
		<div class="logsi-inputs">
			<input type="text" placeholder="Enter Username" name="uname" class="logsi-input" required>
			<input type="text" placeholder="Enter Email" name="email" class="logsi-input" required>
			<input type="password" placeholder="Enter Password" name="psw" class="logsi-input" required>
			<input type="password" placeholder="Repeat Password" name="psw-confirm" class="logsi-input" required>
		</div>
		<button type="submit" name='register' class="logsi-submit">Sign Up</button>
	</form>
	<a href="login.view.php" class="logsi-link">Already have an account?</a>
		</div>
	</article>
</body>
</html>
<?php
	require "login.php";
?>