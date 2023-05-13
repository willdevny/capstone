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
		<div onclick=print(`+row+`)>
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
		$data = pg_fetch_row($query);
		for ($i = 0; $i < count($data); $i+=2) {

			$character = str_replace("%22", '"', $data[$i + 1]);

			$startName = strpos($character, "characterName") + 16;
			$endName = strpos($character, '","characterRace') - $startName;
			$characterName = substr($character, $startName, $endName);

			echo("<script>createRoster('$data[$i]', '$characterName')</script>");
		}
	}
?>