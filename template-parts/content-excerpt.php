<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-website-portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post-excerpt"); ?>>
	<header class="entry-header">

		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-website-portfolio' ),
			'after'  => '</div>',
		) );
	?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_website_portfolio_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
