<?php
/**
 * Fact widget.
 *
 * @package daptar
 */

class Daptar_Fact_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-fact-widget',
			__( 'Daptar Fact', 'daptar' ),
			array(
				'description' => __( 'Show your visitors some facts about your company.', 'daptar' ),
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
				'fact' => array(
					'type'       => 'repeater',
					'label'      => __( 'Fact', 'daptar' ),
					'item_name'  => __( 'Item', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-fact-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'daptar' ),
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
					),
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'daptar-fact-widget', __FILE__, 'Daptar_Fact_Widget' );
