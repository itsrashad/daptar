<?php
/**
 * Call To Action widget.
 *
 * @package Daptar
 */

class Daptar_Social_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-social',
			__( 'Daptar: Social', 'daptar' ),
			array(
				'description' => __( 'A simple Social widget.', 'daptar' ),
			),
			array(),
			array(
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
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'daptar' ),
				),
				'secondary_title' => array(
					'type'  => 'text',
					'label' => __( 'Secondary Title', 'daptar' ),
				),
				'title_content' => array(
					'type'  => 'textarea',
					'label' => __( 'Sub Title', 'daptar' ),
				),
			)
		);

	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'daptar-title-subtitle', __FILE__, 'Daptar_Title_Subtitle_Widget' );
