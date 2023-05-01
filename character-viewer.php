<script>
	$(document).ready(function() {
		let jsonObj = JSON.parse(localStorage.getItem('json'))
		$.each(jsonObj, function(i){
			if(jsonObj[i] == "on") {
				$(":input[name=" + i + "]").prop('checked', true)
			} else {
				$(":input[name=" + i + "]").val(jsonObj[i]) 
			}
		})
	})
</script>