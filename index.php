<?php
/**
 * The main template file
 */

get_header();

?>

<?php
/*
 * 'flex_example' refer to the *ID* of the Flexible Content field.
 * All layouts in the given field will have their init.php file included.
 */

ACFListener::fields('module');


/*

	TODO

*/
get_footer();

?>
