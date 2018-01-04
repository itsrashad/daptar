<?php
/**
 * Team widget.
 *
 * @package Daptar
 */

class Daptar_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'daptar-team',
			__( 'Daptar: Team', 'daptar' ),
			array(
				'description' => __( 'Displays Team Member', 'daptar' ),
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
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Title', 'daptar' ),
				),
				'members' => array(
					'type'       => 'repeater',
					'label'      => __( 'Members', 'daptar' ),
					'item_name'  => __( 'Member', 'daptar' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-daptar-members-team']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'full_name' => array(
							'type'  => 'text',
							'label' => __( 'Full Name', 'daptar' ),
						),
						'bio' => array(
							'type'  => 'textarea',
							'label' => __( 'Bio', 'daptar' ),
						),
						'position' => array(
							'type'  => 'text',
							'label' => __( 'Position', 'daptar' ),
						),
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'daptar' ),
							'fallback' => true,
						),
						'fb' => array(
							'type'  => 'link',
							'label' => __( 'Facebook URL', 'daptar' ),
						),
						'tw' => array(
							'type'  => 'link',
							'label' => __( 'Twitter URL', 'daptar' ),
						),
						'li' => array(
							'type'  => 'link',
							'label' => __( 'Linkedin URL', 'daptar' ),
						),
						'ins' => array(
							'type'  => 'link',
							'label' => __( 'Instagram URL', 'daptar' ),
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Teams Per Row', 'daptar' ),
					'default' => 4,
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

siteorigin_widget_register( 'daptar-team', __FILE__, 'Daptar_Team_Widget' );
