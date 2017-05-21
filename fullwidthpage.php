<?php
/**
 * Template Name: Full Width Page
 *
 * Blank page
 *
 * @package 
 */

get_header();

while ( have_posts() ) : the_post(); 

?>

<header class="color-bg">
	<div class="container">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
</header>


<?php the_content(  ); ?>

	
	
<?php endwhile;  ?>

<?php get_footer(); ?>
