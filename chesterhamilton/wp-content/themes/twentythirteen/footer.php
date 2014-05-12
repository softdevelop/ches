<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<script src="<?php echo get_template_directory_uri();?>//js/modernizr.custom.js"></script>

<!-- jquery-->

<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"/js/jquery.min.js\"")</script>

<!-- Bootstrap-->
<script src="<?php echo get_template_directory_uri();?>//js/bootstrap.js"></script>

<!-- easing -->
<script src="<?php echo get_template_directory_uri();?>//js/jquery.easing.1.3.js" type="text/javascript"></script>

<!-- UItoTop plugin -->
<script src="<?php echo get_template_directory_uri();?>//js/gototop/jquery.ui.totop.js" type="text/javascript"></script>

<!-- fancybox -->
<script src="<?php echo get_template_directory_uri();?>//js/fancy/jquery.fancybox.js" type="text/javascript"></script>

<!-- team -->
<script src="<?php echo get_template_directory_uri();?>//js/owl-carousel/owl.carousel.js"></script>

<!-- Custom js-->
<script src="<?php echo get_template_directory_uri();?>//js/jquery-func.js"></script>
	<?php wp_footer(); ?>
</body>
</html>