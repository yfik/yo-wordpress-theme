<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yo_fik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yo-theme' ); ?></a>

<!-- dshgyufegsyug -->

	<nav id="site-navigation"  class="navbar navbar-expand navbar-light  bg-light">
	<?php the_custom_logo();?>
	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php bloginfo('name'); ?>
    </a>
    <button class="navbar-toggler navbar-toggler-icon navbar-toggler-right bg-light" type = "button" data-toggle="collapse" data-target="#bs4navbar" aria-controls = "bs4navbar" aria-expanded="false" aria-label="Toggle navigation"><?php esc_html_e( '', 'yo_fik' ); ?></button> 
	<?php
    wp_nav_menu( array(
      'theme_location'  => 'menu-1',
      'menu_id'         => 'primary-menu',
      'container'       => 'div',
            'container_id'    => 'bs4navbar',
      'container_class' => 'collapse navbar-collapse',
      'menu_class'      => 'navbar-nav ml-auto',
            'walker'          => new yo_fik_navbar()
    ) );
    ?>
		</nav>
		
		</div>

		<!-- ygyugu -->
	<header id="masthead" class="site-header">
		<!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'yo-theme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> -->
		<!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
