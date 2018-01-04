<?php
/**
 * Testimonial widget.
 *
 * @package daptar
 */

class Daptar_Testimonial_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-testimonial-widget',
			__( 'Daptar Testimonial', 'daptar' ),
			array(
				'description' => __( 'Testimonial Widget', 'daptar' ),
			),
			array(),
			array(
				'alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'daptar' ),
					'default' => 'text-center',
					'options' => array(
						'text-left' => __( 'Text Left', 'daptar' ),
						'text-center' => __( 'Text Center', 'daptar' ),
						'text-right' => __( 'Text Right', 'daptar' ),
					)
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'daptar' ),
				),

				'testimonial' => array(
					'type'       => 'repeater',
					'label'      => __( 'Testimonial', 'daptar' ),
					'item_name'  => __( 'Item', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-testimonial-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'name' => array(
							'type'  => 'text',
							'label' => __( 'Name', 'daptar' ),
						),
						'texteditor' => array(
							'type' => 'tinymce',
							'label' => __( 'Description', 'daptar' ),
							'default' => '',
							'rows' => 5,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'daptar' ),
							'fallback' => true,
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

siteorigin_widget_register( 'daptar-testimonial-widget', __FILE__, 'Daptar_Testimonial_Widget' );
