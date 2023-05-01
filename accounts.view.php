<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['Id'])) {
        header("Location:login.view.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<title>Account</title>
</head>
<body>
	<a href="main.php"><ion-icon name="home"></ion-icon></a>
	<h1>Account Settings</h1>
	<form action="accounts.php" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" id="usernameInput" disabled>
		<label for="email">Email:</label>
		<input type="text" name="email" id="emailInput" disabled>
		<input type="submit" id="submitButton" name="editForm" hidden>
	</form>
	<button onclick=editAccount() id="editButton">Edit<ion-icon name="cog"></ion-icon></button>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
	require "accounts.php";
?>