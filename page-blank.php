<?php
/**
 * Template Name: Blank Page
 *
 * A completely blank page
 *
 * @package wp-website-portfolio
 */

?>

<?php echo get_field("html"); ?>


<?php while ( have_posts( ) ) : the_post(); ?>

	<?php //the_content( ); ?>

<?php endwhile; ?>
