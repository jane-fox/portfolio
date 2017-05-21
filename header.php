<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-website-portfolio
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-website-portfolio' ); ?></a>

<header id="site-nav" class="site-header navbar color-bg" role="banner">
    <div class="container"><div class="row">

        <?php
        if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
        endif;

        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
        <?php
        endif; ?>


        <nav id="collapse-menu" class=" nav navbar-nav navbar-right collapse navbar-collapse" role="navigation">
            <?php wp_nav_menu( array( 
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
                'menu_class' => ''
            ) ); ?>
        </nav><!-- #site-navigation -->


		<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#collapse-menu">
			<span class="sr-only">Toggle navigation</span>
			<span class="glyphicon glyphicon-menu-hamburger"></span>
		</button>


    </div></div><!-- .row .container -->
</header><!-- #masthead -->

            
<?php /*  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wp-website-portfolio' ); ?></button> */ ?>