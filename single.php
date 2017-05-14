<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-website-portfolio
 */

get_header(); ?>

<header class="color-bg">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</header>


<?php

// Get custom gallery for project heading display
$above_page = get_field('above_page');


if( $above_page ): ?>

	<div class="project-gallery">
    	<div class="container">

	    	<?php foreach ( $above_page as $image ) { ?>
	    		<div class="col-sm-3 project-thumb">
		    		<a class=""
	    			   href="<?php echo $image["url"]; ?>"
	    			   data-lightbox="header"
	    			   data-title="<?php echo $image["title"]; ?>"
		    		>
		    			<img src="<?php echo $image["sizes"]["thumbnail"]; ?>" alt="alt test">
	    			</a>
    			</div>
	    	<?php } //foreach ?>

	    </div><!-- .container -->
    </div><!-- .gallery -->
<?php endif; ?>


<div class="container">
<div class="row">

	<div class="col-md-8">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', "project" );
			//get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<div class="col-md-4"><?php get_sidebar(); ?></div>

</div><!-- .row -->
</div><!-- .container -->

<?php 
get_footer();
