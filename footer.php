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
	
		</div>

	<footer id="colophon" class="site-footer">
	<div class="row">
		<div id= bottom nav class="col-sm-12">
		<div id="yo2-sidebar" class="col-sm-4">
    <?php get_sidebar(); ?>
	</div>
	<div id="yo2-sidebar" class="col-sm-4">
	<?php get_archives(); ?>
	<div id="yo2-sidebar" class="col-sm-4">
    <?php get_categories(); ?>
    </div>
		</div>
		</div>
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
