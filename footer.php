<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Daptar
 */

?>

	</div>
	<!-- END CONTENT -->

	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<?php do_action('daptar_footer_widget'); ?>
		<section class="footer-bottom">
			<div class="site-info container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<p class="float-left">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'daptar' ) ); ?>">
								<?php printf( esc_html__( 'Proudly powered by %s', 'daptar' ), 'WordPress' ); ?>
							</a>
						</p>
						<p class="float-right"><?php printf( __( 'Design &amp; Developed by ', 'daptar' ) ); ?><a href="<?php echo esc_url( __( 'http://itsrashad.info/', 'daptar' ) ); ?>"><?php printf( __( 'itsRashad', 'daptar' ) ); ?></a></p>
					</div>
				</div>
			</div>
			<!-- END SITE INFO -->
		</section>
	</footer>
	<!-- END FOOTER -->
	<a href="#" class="scrollToTop"><i class="fa fa-3x fa-angle-double-up" aria-hidden="true"></i></a>
</div>
<!-- END PAGE -->
<?php wp_footer(); ?>
</body>
</html>
