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
	<title>Roster</title>
</head>
<body>
	<a href="main.php"><ion-icon name="home"></ion-icon></a>

	<h1>Character Roster</h1>
	<p id="loginError" hidden>You must be logged in to view saved characters.</p>
	<div id="characterList">
		
	</div>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
	require 'roster.php';
?>