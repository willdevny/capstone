<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['Id'])) {
        echo("
			<script type='text/javascript'>	$('#loginError').prop('hidden', false); </script>
		");
    }

	$db_connection = pg_connect("host=localhost dbname=postgres user=macowner password=password");
?>
<script>
	function createRoster(row, name) {
		let characterHTML = `
		<div onclick=print(`+row+`) style='cursor:pointer;'>
			<input type="text" id='` + row + `' value=` + row + ` hidden>
			<p>` + name + `<p>
		</div>`

		$("#characterList").append(characterHTML)
	}

	function print(row){
		window.location.href= "character-sheet.view.php?id=" + $("#" + row).val()
	}
</script>
<?php
	if (isset($_SESSION['Id'])) {
		$query = pg_query_params($db_connection, "SELECT characterid, character FROM characters WHERE userid = $1;", array($_SESSION['Id']));
		$data = pg_fetch_all($query, $mode = PGSQL_NUM);
        foreach ($data as $row) {
            echo("<script>console.log('$row[0]')</script>");
			$character = str_replace("%22", '"', $row[1]);
			$startName = strpos($character, "characterName") + 16;
			$endName = strpos($character, '","characterRace') - $startName;
			$characterName = substr($character, $startName, $endName);

			echo("<script>createRoster('$row[0]', '$characterName')</script>");
		}
	}
?>