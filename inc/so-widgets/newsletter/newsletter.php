<?php
/**
 * Newsletter widget.
 *
 * @package daptar
 */

class Daptar_newsletter_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'daptar-newsletter-widget',
            __( 'Daptar Newsletter', 'daptar' ),
            array(
                'description' => __( 'Newsletter Widget', 'daptar' ),
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
                    'label' => __( 'Heading', 'daptar' ),
                    'default' => 'Follow Us'
                ),
                'text' => array(
                    'type'  => 'textarea',
                    'label' => __( 'Paragraph', 'daptar' ),
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                ),
                'action_url' => array(
                    'type'  => 'textarea',
                    'label' => __( 'Action URL', 'daptar' ),
                    'default' => '',
                    'description' => __( 'Newsletter for Mailchimp https://mailchimp.com/', 'daptar' ),
                ),
            )

        );
    }

    function get_template_name( $instance ) {
        return 'default';
    }
}

siteorigin_widget_register( 'daptar-newsletter-widget', __FILE__, 'Daptar_newsletter_Widget' );
