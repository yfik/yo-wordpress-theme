<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yo_fik
 */

?>



	<footer id="colophon" class="site-footer">
	<div class="container-fluid text-center text-md-left">
      <div id="footer-sidebar" class="row secondary">
        <div class="col-md-3" id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
        </div>
        <div class="col-md-3" id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
        dynamic_sidebar('footer-sidebar-4');
        }
        ?>
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
