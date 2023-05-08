<?php
	if (!isset($_SESSION)) session_start();

	if (isset($_POST['register'])) {
		$db_connection = pg_connect("host=localhost dbname=postgres user=macowner password=password");

		$email = $_POST['email'];
		$uname = $_POST["uname"];
		$psw = $_POST["psw"];

		$query =  pg_query_params($db_connection, "INSERT INTO users (email, username, password) VALUES ($1,$2, $3);", array($email, $uname, $psw));
		$query = pg_query_params($db_connection, "SELECT id FROM users WHERE email = $1 AND username = $2", array($email, $uname));
		$result = pg_fetch_row($query);
		foreach($result as $row) echo($result[0]);
		$_SESSION['Id'] = $result[0];
		header("Location:main.php");
	}
?>