<?php

function sakola_footer_widget_ext_opt() {

	$sakola_footer_widget_opt = array(

		/* 3.7. Footer Options */
		array(
			'id'=>'footer-layout',
			'type' => 'image_select',
			'compiler'=>true,
			'title' => esc_html__('Footer Widget Layout', 'sakola'), 
			'subtitle' => esc_html__('Select footer and widget alignment. Choose between 1, 2, 3 or 4 column layout.', 'sakola'),
			'options' => array(
					'1widget-footer' => array('alt' => esc_html__('1widget-footer', 'sakola'), 'img' => get_template_directory_uri() .'/img/widget-1.png'),
					'2widget-footer' => array('alt' => esc_html__('2widget-footer', 'sakola'), 'img' => get_template_directory_uri() .'/img/widget-2.png'),
					'3widget-footer' => array('alt' => esc_html__('3widget-footer', 'sakola'), 'img' => get_template_directory_uri() .'/img/widget-3.png'),
					'4widget-footer' => array('alt' => esc_html__('4widget-footer', 'sakola'), 'img' => get_template_directory_uri() .'/img/widget-4.png')
				),
			'default' => '3widget-footer',
			'required' => array( 'footer_type', '=', array('default') ),
		),

		/* 3.8. Footer Area Padding */
		array(
			'id'       => 'footer_widget_padding',
			'type'     => 'spacing',
			'output'   => array( '#footer .footer-widget-wrapper' ),
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Footer Widget', 'sakola' ),
			'default'  => array(
				'padding-top'    => '0',
				'padding-right'  => '0',
				'padding-bottom' => '0',
				'padding-left'   => '0'
			),
			'required' => array( 'footer_type', '=', array('default') ),
		),
		array(
			'id'       => 'footer_bottom_padding',
			'type'     => 'spacing',
			'output'   => array( '#footer .footer-bottom' ),
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Footer Bottom', 'sakola' ),
			'default'  => array(
				'padding-top'    => '0',
				'padding-right'  => '0',
				'padding-bottom' => '0',
				'padding-left'   => '0'
			),
			'required' => array( 'footer_type', '=', array('default') ),
		),
		array(
			'id'       => 'footer_widget_border',
			'type'     => 'border',
			'title'    => __( 'Footer Widget Border', 'sakola' ),
			'output'   => array( '.footer-widget-wrapper' ),
			'all'      => false,
			'default'  => array(
				'border-color'  => '#efefef',
				'border-style'  => 'solid',
				'border-top'    => '0px',
				'border-right'  => false,
				'border-bottom' => false,
				'border-left'   => false,
			)
		),
		array(
			'id'       => 'footer_bottom_border',
			'type'     => 'border',
			'title'    => __( 'Footer Bottom Border', 'sakola' ),
			'output'   => array( '.footer-bottom' ),
			'all'      => false,
			'default'  => array(
				'border-color'  => '#efefef',
				'border-style'  => 'solid',
				'border-top'    => '0px',
				'border-right'  => false,
				'border-bottom' => false,
				'border-left'   => false,
			)
		),

	);

return $sakola_footer_widget_opt;
}