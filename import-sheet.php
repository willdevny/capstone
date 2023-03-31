<?php
?>
<script>
	var $fileInput = $('#fileInput');

	// change inner text
	$fileInput.on('change', function() {
		var filesCount = $(this)[0].files.length;
		var $textContainer = $(this).prev();

		var fileName = $(this).val().split('\\').pop();
		$textContainer.text(fileName);
	});
</script>