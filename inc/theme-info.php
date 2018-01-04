<?php
/**
 * Daptar Theme Info Page
 *
 * @package Daptar
 **/

// Add the theme page
add_action('admin_menu', 'daptar_theme_info');

function daptar_theme_info ()
{
    $theme_info = add_theme_page(__('Theme Info', 'daptar'), __('Theme Info', 'daptar'), 'manage_options', 'daptar-info.php', 'daptar_theme_info_admin_page');
    add_action('load-' . $theme_info, 'daptar_theme_info_style');
}

// Callback
function daptar_theme_info_admin_page ()
{
    ?>
    <div class="daptar-info">
        <h2 class="info-title"><?php _e('Daptar Theme Info', 'daptar'); ?></h2>
        <div class="col-daptar-info">
            <div class="dashicons dashicons-desktop info-icon"></div>
            <a href="<?php echo esc_url( __( 'http://itsrashad.info/lab/daptar/', 'daptar' ) ); ?>" target="_blank"><?php _e('Theme demo', 'daptar'); ?></a>
        </div>
        <div class="col-daptar-info">
            <div class="dashicons dashicons-book-alt info-icon"></div>
            <a href="<?php echo esc_url( __( 'http://itsrashad.info/lab/daptar/docs/', 'daptar' ) ); ?>" target="_blank"><?php _e('Documentation', 'daptar'); ?></a>
        </div>
        <div class="col-daptar-info">
            <div class="dashicons dashicons-sos info-icon"></div>
            <a href="<?php echo esc_url( __( 'http://itsrashad.info/lab/daptarpro/support', 'daptar' ) ); ?>" target="_blank"><?php _e('Support', 'daptar'); ?></a>
        </div>
        <div class="col-daptar-info">
            <div class="dashicons dashicons-smiley info-icon"></div>
            <a href="<?php echo esc_url( __( 'http://itsrashad.info/lab/daptarpro/', 'daptar' ) ); ?>" target="_blank"><?php _e('DaptarPro Version', 'daptar'); ?></a>
        </div>
    </div>
    <?php
}

// Styles
function daptar_theme_info_style ()
{
    add_action('admin_enqueue_scripts', 'daptar_theme_info_admin_page_styles');
}

function daptar_theme_info_admin_page_styles ()
{
    wp_enqueue_style('daptar-info-admin-style', get_template_directory_uri() . '/assets/css/theme-info.css', array(), true);
}