<?php
/**
 * Camera Slider widget.
 *
 * @package daptar
 */

class Daptar_CameraSlider_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-camera-slider-widget',
			__( 'Daptar: Camera Slider', 'daptar' ),
			array(
				'description' => __( 'Camera Slider Widget', 'daptar' ),
			),
			array(),

			array(
				'CameraSlider' => array(
					'type'       => 'repeater',
					'label'      => __( 'Camera Slider', 'daptar' ),
					'item_name'  => __( 'Item', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-camera-slider-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'alignment' => array(
							'type' => 'select',
							'label' => __( 'Text Alignment', 'daptar' ),
							'default' => 'text-left',
							'options' => array(
								'text-left' => __( 'Left', 'daptar' ),
								'text-center' => __( 'Center', 'daptar' ),
								'text-right' => __( 'Right', 'daptar' ),
							)
						),
						'text_position' => array(
							'type' => 'select',
							'label' => __( 'Position', 'daptar' ),
							'description' => __('Float Position (like whole content will be show center or left or right)','daptar'),
							'default' => '0 auto',
							'options' => array(
								'auto auto auto 0' => __( 'Left', 'daptar' ),
								'0 auto' => __( 'Center', 'daptar' ),
								'auto 0 auto auto' => __( 'Right', 'daptar' ),
							)
						),
						'CameraSlider_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'daptar' ),
						),
						'CameraSlider_title_color' => array(
							'type' => 'color',
							'label' => __( 'Title Color', 'daptar' ),
							'default' => '#000'
						),
						'CameraSlider_subtitle' => array(
							'type'  => 'text',
							'label' => __( 'Sub Title', 'daptar' ),
						),
						'CameraSlider_subtitle_color' => array(
							'type' => 'color',
							'label' => __( 'Sub Title Color', 'daptar' ),
							'default' => '#000'
						),
						'CameraSlider_image' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Slide Image', 'daptar' ),
							'fallback' => true,
						),
						'CameraSlider_texteditor' => array(
							'type' => 'tinymce',
							'default' => '',
							'rows' => 7,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'CameraSlider_button_text' => array(
							'type' => 'text',
							'label' => __('Button Title', 'daptar'),
							'default' => ''
						),
						'CameraSlider_button_style' => array(
							'type' => 'select',
							'label' => __( 'Button Style', 'daptar' ),
							'default' => 'btn-default',
							'options' => array(
								'btn-default' => __( 'Default', 'daptar' ),
								'btn-primary' => __( 'Primary', 'daptar' ),
								'btn-success' => __( 'Success', 'daptar' ),
							)
						),
						'CameraSlider_button_url' => array(
							'type' => 'link',
							'label' => __('Button URL', 'daptar'),
							'default' => ''
						),
					),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'daptar-camera-slider-widget', __FILE__, 'Daptar_CameraSlider_Widget' );
