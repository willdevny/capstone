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
	<title>Roster</title>
</head>

<body>
	<header>
		<div class="horizontal-container else-nav nav">
			<!-- Open Menu For Profile Options -->
			<a href="main.php">
				<ion-icon class="else-profile-button" name="home"></ion-icon>
			</a>
		</div>
	</header>

	<article id="account">
		<h1 class="account-head">Character Roster</h1>
		<p id="loginError" hidden>You must be logged in to view saved characters.</p>
		<div id="characterList" class="spacing vertical-container">

		</div>
	</article>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
<?php
require 'roster.php';
?>