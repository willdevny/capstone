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
	<title>Sign Up</title>
</head>

<body>
	<h1>Sign Up</h1>
	<form action="register.php" method="post">
		<div class="container">
			<label for="uname">Username</label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label for="email">Email</label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label for="psw">Password</label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<label for="psw-confirm">Repeat Password</label>
			<input type="password" placeholder="Repeat Password" name="psw-confirm" required>

			<button type="submit" name='register'>Sign Up</button>
		</div>
	</form>
	<a href="login.view.php">Already have an account?</a>
</body>
</html>
<?php
	require "login.php";
?>