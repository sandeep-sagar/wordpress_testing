<?php

function sakola_top_header_opt_ext() {

	$sakola_top_header_opt = array(

		array(
			'id'       => 'header_top_opt',
			'type'     => 'switch',
			'title'    => __( 'Use Top Header', 'sakola' ),
			'subtitle' => __( 'Use top header for your site.', 'sakola' ),
			'default'  => false,
			'required' => array( 'header_type', '=', array( 'default' ) ),
		),

		array(
			'id'    => 'header_top_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Top header just available for Header Style 1', 'sakola' ),
			'required' => array( 'header_type', '!=', array( 'default' ) ),
		),
		
		/* 1.2.1.1 Header 1 Top Options */
		array(
			'id'=>'header_top_layout',
			'type' => 'image_select',
			'title' => esc_html__('Header Top Layout', 'sakola'), 
			'subtitle' => esc_html__('Select header between 1, 2 or 3 column layout.', 'sakola'),
			'options' => array(
					'1column-header' => array('alt' => '1column-header', 'img' => get_template_directory_uri() .'/img/col-opt1.png'),
					'2column-header' => array('alt' => '2column-header', 'img' => get_template_directory_uri() .'/img/col-opt2.png'),
					'3column-header' => array('alt' => '3column-header', 'img' => get_template_directory_uri() .'/img/col-opt3.png'),
				),
			'default' => '2column-header',
			'required' => array(
				array('header_top_opt','=', true),
				array('header_type','=', 'default')
			),
		),
		array(
			'id'       => 'header_top_col_3',
			'type'     => 'button_set',
			'title'    => '',
			'subtitle' => '',
			'options'  => array(
				'header_top_3_col_1'     => esc_html__('Header First Column', 'sakola'),
				'header_top_3_col_2'     => esc_html__('Header Second Column', 'sakola'),
				'header_top_3_col_3'     => esc_html__('Header Third Column', 'sakola'),
			),
			'default'  => 'header_top_3_col_1',
			'required' => array(
				array('header_top_opt','=', true),
				array('header_type','=', 'default')
			),
		),

		/* first column */
		array(
			'id'       => 'header_top_col1_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Top Column 1 Setting', 'sakola'),
			'subtitle' => '',
			'options'  => array(
				'header_top_col1_content'	=> esc_html__('Column 1 Content', 'sakola'),
				'header_top_col1_display'	=> esc_html__('Column 1 Display', 'sakola'),
				'header_top_col1_align'		=> esc_html__('Column 1 Align', 'sakola'),
			),
			'default'  => 'header_top_col1_content',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '1column-header', '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_1' ),
			),
		),
		array(
			'id'      => 'header_top_customize_first',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Top First Content', 'sakola' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header top first column', 'sakola' ),
			'options' => array(
				'enabled'  => array(
					'sakola-logo' => esc_html__('Logo','sakola'),
				),
				'disabled' => array(
					'sakola-menus'   => esc_html__('Menus','sakola'),
					'sakola-social'   => esc_html__('Social Links','sakola'),
					'sakola-search' => esc_html__('Search Button','sakola'),
				)
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '1column-header', '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_1' ),
				array( 'header_top_col1_set', '=', 'header_top_col1_content' ),
			),
		),
		array(
			'id'       => 'header_top_first_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Top First Column Display', 'sakola'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'sakola'),
				'vertical'		=> esc_html__('Vertical Item', 'sakola'),
			),
			'default'  => 'horizontal',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '1column-header', '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_1' ),
				array( 'header_top_col1_set', '=', 'header_top_col1_display' ),
			),
		),
		array(
			'id'       => 'header_top_first_align',
			'type'     => 'button_set',
			'title'    => __( 'Top Bar Column 1 Align', 'sakola' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'sakola'),
				'text-center' => esc_html__('Text Center', 'sakola'),
				'text-right' => esc_html__('Text Right', 'sakola')
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '1column-header', '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_1' ),
				array( 'header_top_col1_set', '=', 'header_top_col1_align' ),
			),
			'default'  => 'text-left'
		),

		/* second column */
		array(
			'id'       => 'header_top_col2_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Top Column 2 Setting', 'sakola'),
			'subtitle' => '',
			'options'  => array(
				'header_top_col2_content'	=> esc_html__('Column 2 Content', 'sakola'),
				'header_top_col2_display'	=> esc_html__('Column 2 Display', 'sakola'),
				'header_top_col2_align'		=> esc_html__('Column 2 Align', 'sakola'),
			),
			'default'  => 'header_top_col2_content',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_2' ),
			),
		),
		array(
			'id'      => 'header_top_customize_second',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Top Second Content', 'sakola' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header top second column', 'sakola' ),
			'options' => array(
				'enabled'  => array(
					
				),
				'disabled' => array(
					'sakola-menus'   => esc_html__('Menus','sakola'),
					'sakola-social'   => esc_html__('Social Links','sakola'),
					'sakola-search' => esc_html__('Search Button','sakola'),
					'sakola-logo' => esc_html__('Logo','sakola'),
				)
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_2' ),
				array( 'header_top_col2_set', '=', 'header_top_col2_content' ),
			),
		),
		array(
			'id'       => 'header_top_second_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Second Column Display', 'sakola'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'sakola'),
				'vertical'		=> esc_html__('Vertical Item', 'sakola'),
			),
			'default'  => 'horizontal',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_2' ),
				array( 'header_top_col2_set', '=', 'header_top_col2_display' ),
			),
		),
		array(
			'id'       => 'header_top_second_align',
			'type'     => 'button_set',
			'title'    => __( 'Top Bar Column 2 Align', 'sakola' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'sakola'),
				'text-center' => esc_html__('Text Center', 'sakola'),
				'text-right' => esc_html__('Text Right', 'sakola')
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '2column-header', '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_2' ),
				array( 'header_top_col2_set', '=', 'header_top_col2_align' ),
			),
			'default'  => 'text-center'
		),
		array(
			'id'    => 'header_top_col2_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Second Column not available for current choice.', 'sakola' ),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', '1column-header' ),
				array( 'header_top_col_3', '=', 'header_top_3_col_2' ),
			),
		),

		/* third column */
		array(
			'id'       => 'header_top_col3_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Header Top Column 3 Setting', 'sakola'),
			'subtitle' => '',
			'options'  => array(
				'header_top_col3_content'	=> esc_html__('Column 3 Content', 'sakola'),
				'header_top_col3_display'	=> esc_html__('Column 3 Display', 'sakola'),
				'header_top_col3_align'		=> esc_html__('Column 3 Align', 'sakola'),
			),
			'default'  => 'header_top_col3_content',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_3' ),
			),
		),
		array(
			'id'      => 'header_top_customize_third',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Header Right Content', 'sakola' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the header top third column', 'sakola' ),
			'options' => array(
				'enabled'  => array(
					'sakola-menus'   => esc_html__('Menus','sakola'),
					'sakola-search' => esc_html__('Search Button','sakola'),
				),
				'disabled' => array(
					'sakola-logo' => esc_html__('Logo','sakola'),
					'sakola-social'   => esc_html__('Social Links','sakola'),
				)
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_3' ),
				array( 'header_top_col3_set', '=', 'header_top_col3_content' ),
			),
		),
		array(
			'id'       => 'header_top_third_display',
			'type'     => 'select',
			'title'    => esc_html__('Header Third Column Display', 'sakola'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'sakola'),
				'vertical'		=> esc_html__('Vertical Item', 'sakola'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_3' ),
				array( 'header_top_col3_set', '=', 'header_top_col3_display' ),
			),
		),
		array(
			'id'       => 'header_top_third_align',
			'type'     => 'button_set',
			'title'    => __( 'Top Bar Column 3 Align', 'sakola' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'sakola'),
				'text-center' => esc_html__('Text Center', 'sakola'),
				'text-right' => esc_html__('Text Right', 'sakola')
			),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '3column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_3' ),
				array( 'header_top_col3_set', '=', 'header_top_col3_align' ),
			),
			'default'  => 'text-right'
		),
		array(
			'id'    => 'header_top_col3_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => __( 'Third Column not available for current choice.', 'sakola' ),
			'required' => array(
				array( 'header_type', '=', 'default' ),
				array( 'header_top_layout', '=', array( '1column-header', '2column-header' )),
				array( 'header_top_col_3', '=', 'header_top_3_col_3' ),
			),
		),
		/* end of header 1 options */
	);

return $sakola_top_header_opt;
}