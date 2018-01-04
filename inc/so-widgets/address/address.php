<?php
/**
 * Address widget.
 *
 * @package Daptar
 */

class Daptar_Address_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-address',
			__( 'Daptar: Address', 'daptar' ),
			array(
				'description' => __( 'Displays Contact Address Details', 'daptar' ),
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
					'type' => 'text',
					'label' => __( 'Title', 'daptar' ),
				),
				'sub_title' => array(
					'type'  => 'text',
					'label' => __( 'Sub Title', 'daptar' ),
				),
				'address_repeater' => array(
					'type'      => 'repeater',
					'label'     => __( 'Enter Contact Details.', 'daptar' ),
					'item_name' => __( 'Details', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-address-contact']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'icon' => array(
							'type'  => 'icon',
							'label' => __( 'Select Icon', 'daptar' ),
						),
						'icon_size' => array(
							'type'  => 'number',
							'label' => __( 'Icon Font Size', 'daptar' ),
							'default' => '18'
						),
						'icon_color' => array(
							'type'  => 'color',
							'label' => __( 'Icon Color', 'daptar' ),
							'default' => '#000'
						),
						'contact' => array(
							'type'  => 'text',
							'label' => __( 'Enter Title like Phone Number / Address / E-Mail', 'daptar' ),
						),
						'contact_detail' => array(
							'type'  => 'text',
							'label' => __( 'Enter Details for Above Fields', 'daptar' ),
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

siteorigin_widget_register( 'daptar-address', __FILE__, 'Daptar_Address_Widget' );
