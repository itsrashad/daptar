<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daptar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-12">
						<?php the_archive_title( '<h2 class="entry-title archive-title">', '</h2>' ); ?>
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile; ?>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<?php the_posts_navigation(); ?>
							</div>
							<?php the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main>
		<!-- END MAIN -->
	</div>
	<!-- END PRIMARY -->
<?php get_footer();