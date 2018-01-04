<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Daptar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-12 margin-top-50">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'daptar' ); ?></h1>
							</header>
							<!-- END PAGE HEADER -->

							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'daptar' ); ?></p>

								<?php
									get_search_form();

									the_widget( 'WP_Widget_Recent_Posts' );
								?>

								

								<?php

									/* translators: %1$s: smiley */
									$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'daptar' ), convert_smilies( ':)' ) ) . '</p>';
									the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

									the_widget( 'WP_Widget_Tag_Cloud' );
								?>

							</div>
							<!-- END PAGE CONTENT -->
						</section>
						<!-- END ERROR-404 -->
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main>
		<!-- END MAIN -->
	</div>
	<!-- END PRIMARY -->
<?php get_footer();