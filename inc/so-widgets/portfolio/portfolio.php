<?php
/**
 * Portfolio widget.
 *
 * @package daptar
 */

class Daptar_Portfolio_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-portfolio-widget',
			__( 'Daptar Portfolio', 'daptar' ),
			array(
				'description' => __( 'Displays Portfolio Widget', 'daptar' ),
			),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'daptar' ),
				),
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
				'portfolio_category' => array(
					'type'       => 'repeater',
					'label'      => __( 'Category', 'daptar' ),
					'item_name'  => __( 'Item', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-portfolio-category-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'title' => array(
							'type'     => 'text',
							'label'    => __( 'Title', 'daptar' )
						),
					),
				),
				'portfolio' => array(
					'type'       => 'repeater',
					'label'      => __( 'Portfolio', 'daptar' ),
					'item_name'  => __( 'Item', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-portfolio-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'daptar' ),
							'fallback' => true,
						),
						'button_url' => array(
							'type' => 'link',
							'label' => __('Button URL', 'daptar'),
							'default' => ''
						),
						'title' => array(
							'type'     => 'text',
							'label'    => __( 'Past The Category Tile', 'daptar' )
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'per row', 'daptar' ),
					'default' => 3,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'4' => 3,
						'3' => 4,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'daptar-portfolio-widget', __FILE__, 'Daptar_Portfolio_Widget' );
