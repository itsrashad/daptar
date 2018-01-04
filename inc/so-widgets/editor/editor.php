<?php
/**
 * Editor Widget.
 *
 * @package Daptar
 */

class Daptar_Editor_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-editor-widget',
			__( 'Daptar Editor', 'daptar' ),
			array(
				'description' => __( 'Daptar Editor Widget', 'daptar' ),
			),
			array(),

			array(
				'alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'daptar' ),
					'default' => 'text-left',
					'options' => array(
						'text-left' => __( 'Text Left', 'daptar' ),
						'text-center' => __( 'Text Center', 'daptar' ),
						'text-right' => __( 'Text Right', 'daptar' ),
					)
				),
				'icon' => array(
					'type' => 'icon',
					'label' => __('Select an icon', 'daptar'),
				),
				'icon_size' => array(
					'type' => 'number',
					'label' => __( 'Icon Size', 'daptar' ),
					'default' => '24'
				),
				'icon_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Color', 'daptar' ),
					'default' => '#000'
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'daptar' ),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Heading', 'daptar' ),
				),
				'texteditor' => array(
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
				'button_text' => array(
					'type' => 'text',
					'label' => __('Button Title', 'daptar'),
					'default' => ''
				),
				'button_style' => array(
					'type' => 'select',
					'label' => __( 'Button Style', 'daptar' ),
					'default' => 'btn-default',
					'options' => array(
						'btn-default' => __( 'Default', 'daptar' ),
						'btn-primary' => __( 'Primary', 'daptar' ),
						'btn-success' => __( 'Success', 'daptar' ),
					)
				),
				'button_url' => array(
					'type' => 'link',
					'label' => __('Button URL', 'daptar'),
					'default' => ''
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'daptar-editor-widget', __FILE__, 'Daptar_Editor_Widget' );
