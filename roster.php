<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['Id'])) {
        echo("
			<script type='text/javascript'>	$('#loginError').prop('hidden', false); </script>
		");
    }
?>