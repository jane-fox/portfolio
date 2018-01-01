<?php
/**
 * Template Name: Blank Page
 *
 * A completely blank page: 
 * No header or styles, just your HTML.
 *
 * @package wp-website-portfolio
 */

?>

<?php if (function_exists('get_field')) { ?>

	<?php echo get_field("html"); ?>
	
<?php } // if ?>
