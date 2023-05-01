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
	<title>Login</title>
</head>

<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<div id="wrongLogin" hidden>
			<p>The email or password you entered is incorrect.</p>
		</div>
		<label for="email">Email</label>
		<input type="text" placeholder="Enter Email" name="email" required>

		<label for="psw">Password</label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<button type="submit" name="login">Login</button>
	</form>
	<a href="register.view.php">Create an account</a>
</body>
</html>
<?php
	require "login.php";
?>