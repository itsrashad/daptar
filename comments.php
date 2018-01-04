<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daptar
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required())
{
	return;
}
?>
<!-- START COMMENTS -->
<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if (have_comments()) : ?>
	<!-- START COMMENTS TITLE -->
	<h2 class="comments-title">
		<?php
		$comment_count = get_comments_number();
		if (1 === $comment_count)
		{
			printf(
				// Translators: 1: title.
				esc_html_e('One thought on &ldquo;%1$s&rdquo;', 'daptar'), 
				'<span>' . get_the_title() . '</span>'
			);
		}
		else
		{
			printf(
				// WPCS: XSS OK.
				// translators: 1: comment count number, 2: title.
				esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'daptar')), 
				number_format_i18n($comment_count), 
				'<span>' . get_the_title() . '</span>'
			);
		}
		?>
	</h2>
	<!-- END COMMENTS TITLE -->

	<?php
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<!-- START COMMENT NAV ABOVE -->
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text">
				<?php _e('Comment navigation', 'daptar'); ?>
			</h2>
			<!-- START NAV LINKS -->
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link(__('Older Comments', 'daptar')); ?></div>
				<div class="nav-next"><?php next_comments_link(__('Newer Comments', 'daptar')); ?></div>
			</div>
			<!-- END NAV LINKS -->
		</nav>
		<!-- END COMMENT NAV ABOVE -->
	<?php endif; // Check for comment navigation. ?>
	<!-- START COMMENT LIST -->
	<ol class="comment-list">
		<?php
		wp_list_comments(array(
			'style'      => 'ol',
			'short_ping' => true
		));
		?>
	</ol>
	<!-- END COMMENT LIST -->

	<?php
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<!-- START COMMENT NAV BEKOW -->
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'daptar' ); ?></h2>
			<!-- START NAV LINKS -->
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'daptar' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'daptar' ) ); ?></div>

			</div>
			<!-- END NAV LINKS -->
		</nav>
		<!-- END COMMENT NAV BEKOW -->
	<?php endif; // Check for comment navigation. ?>


	<?php
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if (!comments_open()) :
		?>
		<p class="no-comments">
			<?php esc_html_e('Comments are closed.', 'daptar'); ?>
		</p>
		<?php
	endif;
	endif;
	// Check for have_comments().
	comment_form(); ?>
</div>
<!-- END COMMENTS -->