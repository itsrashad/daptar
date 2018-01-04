<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Daptar
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll">
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'daptar' ); ?></a>
		<!-- START NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-light" <?php if ( get_header_image() ) : ?> style="background-image: url(<?php header_image(); ?>); background-size: 100% 100%;"<?php endif; ?> style="background-color: #e3f2fd;">
			<div class="container">
				<!-- START SITE BRANDING -->
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h1>
						<?php the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
						<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<?php bloginfo( 'name' ); ?>
						<?php endif; ?>
					</h1>
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
				    <small><?php echo $description; ?></small>
					<?php endif; ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- END SITE BRANDING -->
				
				<div id="navbar-collapse" class="collapse navbar-collapse">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary-menu',
						'menu_id'			=> false,
						'menu_class'        => 'navbar-nav mr-auto',
						'container'         => '',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker()
					));
					?>
				</div>
				<?php do_action('daptar_header_social'); ?>
				<!-- START WOO CART -->
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
				<div class="cart-icon">
					<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>">
						<i class="fa fa-shopping-basket"></i>
						<span>
							<?php echo sprintf ( _n( ' %d', ' %d', WC()->cart->get_cart_contents_count(), 'daptar' ), WC()->cart->get_cart_contents_count() ); ?>
						</span>
					</a>
					<div class="mini-cart">
						<?php woocommerce_mini_cart(); ?>
					</div>
				</div>
				<?php endif; ?>
				<!-- END WOO CART -->
			</div>
		</nav>
		<!-- END NAVBAR -->
	</div>
	<!-- START DAPTAR CONTENT -->
	<div id="content" class="site-content">
		<?php if (!is_home() && ! is_front_page() ) : ?>
			<?php daptar_breadcrumbs(); ?>
		<?php endif; ?>
