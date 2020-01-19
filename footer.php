<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yo_theme
 */

?>

	</div><!-- #content -->
	<nav id="site-navigation"  class="navbar navbar-expand-md navbar-dark top bg-dark">
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'yo_theme' ); ?></button>
	<?php
            wp_nav_menu([
            'menu'            => 'footer menu',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'functions::fallback',
            'walker'          => new yo_theme_navbar()
            ]);
        ?>
		</nav>
		
		</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yo-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'yo-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'fvkmkmkm: %1$s by %2$s.', 'yo-theme' ), 'yo-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
