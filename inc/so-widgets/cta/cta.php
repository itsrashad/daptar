<?php
/**
 * Call To Action widget.
 *
 * @package Daptar
 */

class Daptar_Cta_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-cta',
			__( 'Daptar: Call To Action', 'daptar' ),
			array(
				'description' => __( 'Simple Call to action widget', 'daptar' ),
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
					'type' => 'text',
					'label' => __( 'Subtitle', 'daptar' ),
				),
				'button' => array(
					'type' => 'widget',
					'class' => 'SiteOrigin_Widget_Button_Widget',
					'label' => __( 'Button', 'daptar' ),
				),
			),
			plugin_dir_path( __FILE__ )
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}

	function modify_child_widget_form( $child_widget_form, $child_widget ) {
		// Remove alignment option in Button.
		unset( $child_widget_form['design']['fields']['align'] );
		return $child_widget_form;
	}

	/**
	 * Initialize the CTA widget
	 */
	function initialize() {
		// This widget requires the button widget.
		if ( ! class_exists( 'SiteOrigin_Widget_Button_Widget' ) ) {
			SiteOrigin_Widgets_Bundle::single()->include_widget( 'button' );
		}
	}
}

siteorigin_widget_register( 'daptar-cta', __FILE__, 'Daptar_Cta_Widget' );
