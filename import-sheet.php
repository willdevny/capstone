<?php
?>
<script>
	
	$("#fileInput").on('change', function() {
		var filesCount = $(this)[0].files.length;
		var textContainer = $(this).prev();
		
		var fileName = $(this).val().split('\\').pop();
		textContainer.text(fileName);
	});
	
	$("#inputForm").on('submit', function() {
		let fileReader = new FileReader();
            fileReader.onload = function () {
                let parsedJSON = JSON.parse(fileReader.result);
                lssave(parsedJSON);                 
            }
            fileReader.readAsText(document.querySelector('#fileInput').files[0]);
	})
	function lssave(json) {
    	localStorage.setItem('json', JSON.stringify(json));
	}
</script>