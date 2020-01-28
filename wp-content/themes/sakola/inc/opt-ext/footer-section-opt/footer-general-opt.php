<?php

function sakola_footer_general_ext_opt() {

	$sakola_footer_general_opt = array(

		/* 3.1. Footer Style Type */
		array(
			'id'       => 'footer_style_type',
			'type'     => 'select',
			'title'    => esc_html__('Footer Style Type', 'sakola'),
			'options'  => array(
				'bottom-footer'		=> esc_html__('Always on Bottom of desktop.', 'sakola'),
				'fixed-footer'		=> esc_html__('Fixed Footer.', 'sakola'),
			),
			'default'  => 'bottom-footer'
		),
		array(
			'id'    => 'footer_fixed_info',
			'type'  => 'info',
			'notice' => true,
			'title' => esc_html__( 'You are currently using Header 4, 5, or 6.', 'sakola' ),
			'desc'  => esc_html__( 'This header type does not allow you to use fixed footer.', 'sakola' ),
			'required' => array(
				array( 'footer_style_type', '=', 'fixed-footer' ),
				array( 'header_type', '=', array( 'style-4', 'style-5', 'style-6' )),
			),
		),
		/* end of footer style type*/

		/* 3.2. Footer Type */
		array(
			'id'       => 'footer_type',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Footer Type', 'sakola' ),
			'subtitle' => esc_html__( 'Select Your Footer Type', 'sakola' ),
			'options' => array(
				'no-footer' => array('alt' => 'no-footer', 'img' => get_template_directory_uri() .'/img/footer-no.png'),
				'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/footer-1.png'),
			),
			'default'  => 'default'
		),
		
		array(
			'id'       => 'footer_general_opt_select',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'footer-dimensions'		=> esc_html__('Footer Dimensions', 'sakola'),
				'footer-background' 	=> esc_html__('Footer Background', 'sakola'),
				'footer-features'		=> esc_html__('Footer Features', 'sakola'),
			),
			'default'  => 'footer-dimensions'
		),

		/* 3.3. Footer Container */
		array(
			'id'       => 'footer_container_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Footer Container Width.', 'sakola'),
			'subtitle' => esc_html__('Define width for footer container', 'sakola'),
			'height'   => false,
			'default'  => array(
				'width'   => '1170', 
				'Height'  => false
			),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-dimensions' ),
			),
		),
		/* end of footer container */

		/* 3.4. Footer Padding */
		array(
			'id'       => 'footer_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Padding Footer', 'sakola' ),
			'subtitle' => esc_html__( 'Allow your users to choose the spacing or padding they want.', 'sakola' ),
			'desc'     => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'sakola' ),
			'default'  => array(
				'padding-top'    => '40px',
				'padding-right'  => '0',
				'padding-bottom' => '40px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-dimensions' ),
			),
		),

		/* footer fatures */
		array(
			'id' => 'foot_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Footer Logo', 'sakola'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'sakola'),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id' => 'foot_address',
			'type' => 'textarea',
			'title' => esc_html__('Footer Address', 'sakola'), 
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id'=>'footer-text',
			'type' => 'editor',
			'title' => esc_html__('Footer Copyright', 'sakola'), 
			'subtitle' => esc_html__('Add Your Copyright Here', 'sakola'),
			'default' => esc_html__('Built by Themes Awesome', 'sakola'),
			'required' => array(
				array( 'footer_type', '=', array('default') ),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		/* 3.5. Boxed Footer */
		array(
			'id' => 'footer_background',
			'type' => 'background',
			'title' => esc_html__('Footer Custom Background', 'sakola'),
			'subtitle' => esc_html__('Footer background with image, color, etc.', 'sakola'),
			'default' => '',
			'required' => array(
				array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' )),
				array( 'footer_general_opt_select', '=', 'footer-background' ),
			),
		),
		array(
			'id'       => 'footer_boxed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Use Boxed Footer', 'sakola' ),
			'subtitle' => esc_html__( 'Make your footer boxed', 'sakola' ),
			'default'  => false,
			'required' => array(
				array( 'footer_type', '=', array('default')),
				array( 'header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' )),
			),
		),
		array(
			'id'       => 'footer_boxed_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Content Boxed Width.', 'sakola'),
			'subtitle' => esc_html__('Define width for footer box.', 'sakola'),
			'output'   => array('#footer'),
			'height'   => false,
			'default'  => array(
				'Width'   => '1170', 
				'Height'  => false
			),
			'required' => array(
				array('footer_boxed','=', true),
				array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
			),
		),
		array(
			'id'       => 'footer_margin',
			'type'     => 'spacing',
			'output'   => array( '#footer' ),
			'mode'     => 'margin',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Margin Boxed Footer', 'sakola' ),
			'subtitle' => esc_html__( 'Allow your users to choose the spacing or margin they want.', 'sakola' ),
			'desc'     => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'sakola' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array('footer_boxed','=', true),
				array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
			),
		),
		
		/* 3.6. Footer 2 Options */
		

	);

return $sakola_footer_general_opt;
}