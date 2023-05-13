<?php
if (!isset($_SESSION))
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>

<body>
	<article id="logsi">
		<div class="logsi-box">
			<h1 class="logsi-head">Log In</h1>
			<div id="wrongLogin" hidden>
					<p>The email or password you entered is incorrect.</p>
				</div>
			<form action="login.php" method="post" class="logsi-form">
				<div class="logsi-inputs">
				<input type="text" placeholder="Enter Email" name="email" class="logsi-input" required>
				<input type="password" placeholder="Enter Password" name="psw" class="logsi-input" required>
				</div>

				<button type="submit" name="login" class="logsi-submit">Login</button>
			</form>
			<a href="register.view.php" class="logsi-link">Create an account</a>
		</div>
	</article>
</body>

</html>
<?php
require "login.php";
?>