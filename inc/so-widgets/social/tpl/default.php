<div class="title-widget widget-margin-fix <?php echo esc_attr($instance['alignment']); ?>">
	<?php if(get_theme_mod('enable_social_settings')) :
    ?>
    <ul class="list-inline header-social text-right pull-right">
        <?php
        if(get_theme_mod('header_fb') ) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_fb')).'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
        }
        if(get_theme_mod('header_tw')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_tw')).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
        }
        if(get_theme_mod('header_li')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_li')).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
        }
        if(get_theme_mod('header_pint')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_pint')).'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
        }
        if(get_theme_mod('header_ins')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_ins')).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';
        }
        if(get_theme_mod('header_dri')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_dri')).'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
        }
        if(get_theme_mod('header_plus')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_plus')).'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
        }
        if(get_theme_mod('header_you')) {
            echo '<li><a href="'.esc_url(get_theme_mod('header_you')).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
        }
        ?>
    </ul>
    <?php  endif; ?>
</div><!-- .section-content -->
