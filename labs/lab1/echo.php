<?php
	echo htmlentities($_REQUEST["data"]);
?>	
<script>
	function encodeInput(input) {
		const encoded = document.createElement('div');
		encoded.innerText = input;
		return encoded.innerHTML;
	}
</script>