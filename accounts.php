<?php
	if (!isset($_SESSION)) session_start();

	$db_connection = pg_connect("host=localhost dbname=postgres user=macowner password=password");

	$query = pg_query_params($db_connection, "SELECT username, email FROM users WHERE id = $1;", array($_SESSION['Id']));

	$result = pg_fetch_row($query);

	$uname = $result[0];
	$email = $result[1];

	echo("<script type='text/javascript'>
		function fillInputs(name, email) {
			$('#usernameInput').val(name);
			$('#emailInput').val(email);
		}
		fillInputs('$uname', '$email');
		</script>"
	);

	if (isset($_POST['editForm'])) {
		$uname = $_POST['username'];
		$email = $_POST['email'];

		$query = pg_query_params($db_connection, "UPDATE users SET username = $1, email = $2 WHERE id = $3", array($uname, $email, $_SESSION['Id']));
		header("Location:accounts.view.php");
	};

	if (isset($_POST['logoutBtn'])) {
		unset($_SESSION['Id']);
		header("Location:main.php");
	};
?>
<script>
	function editAccount() {
		$(":input").prop("disabled", false);
		$("#submitButton").prop("hidden", false);
		$("#editButton").prop("hidden", true);
	}
</script>