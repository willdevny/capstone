<?php
if (!isset($_SESSION)) session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
	<p>Import your character sheet below:</p>
	<div id="dropBox">
		<span id="chooseFileBtn">Choose files</span>
		<span id="dropBoxText">or drag and drop files here</span>
		<input id="fileInput" type="file" multiple>
	</div>
</body>

</html>
<style>
	#dropBox {
		position: relative;
		display: flex;
		align-items: center;
		width: 450px;
		max-width: 100%;
		padding: 25px;
		border: 1px dashed black;
		border-radius: 3px;
		transition: 0.2s;
	}

	#chooseFileBtn {
		flex-shrink: 0;
		border: 1px solid black;
		border-radius: 3px;
		padding: 8px 15px;
		margin-right: 10px;
		font-size: 12px;
		text-transform: uppercase;
	}

	#dropBoxText {
		font-size: small;
		font-weight: 300;
		line-height: 1.4;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	#fileInput {
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		cursor: pointer;
		opacity: 0;
	}
</style>
<?php
require "import-sheet.php"
?>