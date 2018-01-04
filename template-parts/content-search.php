<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daptar
 */
$margin[] = 'search-wrap';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($margin); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php daptar_posted_on(); ?>
		</div>
		<!-- END ENTRY META -->
		<?php endif; ?>
	</header>
	<!-- END ENTRY HEADER -->

	<?php daptar_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<!-- END ENTRY SUMMARY -->

	<footer class="entry-footer">
		<?php daptar_entry_footer(); ?>
	</footer>
	<!-- END ENTRY FOOTER -->
</article>
<!-- END POST ID-<?php the_ID(); ?> -->