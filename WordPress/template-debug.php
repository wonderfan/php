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

<?php

function define_current_theme_file( $template ) {
    $GLOBALS['current_theme_template'] = basename($template);
    return $template;
}

add_action('template_include', 'define_current_theme_file', 1000);

function print_template_name(){
    echo "<em>";
    echo $GLOBALS['current_theme_template'];
    echo "</em>";
}

?>
