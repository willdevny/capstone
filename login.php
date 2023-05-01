<?php
	if (!isset($_SESSION)) session_start();

	if (isset($_POST['login'])) {
		$db_connection = pg_connect("host=localhost dbname=postgres user=macowner password=password");

		$email = $_POST["email"];
		$psw = $_POST["psw"];

		$query =  pg_query_params($db_connection, "SELECT id, email, password FROM users WHERE email = $1 AND password = $2;", array($email, $psw));
		if(pg_num_rows($query) == 0) {
			header("Location:login.view.php?login=invalid");
		} elseif (pg_num_rows($query) == 1) {
			$result = pg_fetch_row($query);
			$_SESSION['Id'] = $result[0];
			header("Location:main.php");
		}
	}
?>
<script>
	const urlParams = new URLSearchParams(window.location.search);
	if (urlParams.has('login')) {
		$("#wrongLogin").show();
	}
</script>