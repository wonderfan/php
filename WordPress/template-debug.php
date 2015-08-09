<style type="text/css">
	.debug {
		background-color: black;
		color: white;
	}
</style>
<div class="debug">
	<?php 
		$included_files = get_included_files();
		var_dump($included_files);
	?>
</div>
