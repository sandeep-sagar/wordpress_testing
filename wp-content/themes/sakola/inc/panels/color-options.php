<?php

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'sakola_header_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Header Section Color', 'sakola' ),
	        'description'       => esc_html__( 'Edit your header color here.', 'sakola' ),
	    )
	);

	/* HEADER DEFAULT STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_default_styling', array(
		'title'		=>	esc_html__( 'Header Style 1', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'menu_header', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_hover_header', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sub_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sub_menu', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_close', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_bar_title', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_sugges', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_desc_sugges', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_bord', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_header', array(
		'label'		=>	esc_html__( 'Menu & Search Icon Header Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_header',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_header', array(
		'label'		=>	esc_html__( 'Menu Header Hover Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_hover_header',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_border', array(
		'label'		=>	esc_html__( 'Menu Header Border Hover Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'menu_border',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_bg', array(
		'label'		=>	esc_html__( 'Submenu Background Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'sub_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_menu', array(
		'label'		=>	esc_html__( 'Submenu Text Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'sub_menu',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_close', array(
		'label'		=>	esc_html__( 'Button Search Close Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_close',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bar_title', array(
		'label'		=>	esc_html__( 'Search Bar Title Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_bar_title',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_sugges', array(
		'label'		=>	esc_html__( 'Search Suggestion Title Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_sugges',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_desc_sugges', array(
		'label'		=>	esc_html__( 'Search Suggestion Description Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_desc_sugges',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_bord', array(
		'label'		=>	esc_html__( 'Search Border Color', 'sakola' ),
		'section'	=>	'header_default_styling',
		'settings'	=>	'search_bord',
		'priority'	=>	11,
	) ) );


	/* HEADER ALTERNATIVE STYLING
	================================================== */
	
	$wp_customize->add_section( 'header_alt_styling', array(
		'title'		=>	esc_html__( 'Header Alternative', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'alt_menu_hover', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'alt_menu_border', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alt_menu_hover', array(
		'label'		=>	esc_html__( 'Menu Hover Color', 'sakola' ),
		'section'	=>	'header_alt_styling',
		'settings'	=>	'alt_menu_hover',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'alt_menu_border', array(
		'label'		=>	esc_html__( 'Menu Border Color', 'sakola' ),
		'section'	=>	'header_alt_styling',
		'settings'	=>	'alt_menu_border',
		'priority'	=>	2,
	) ) );



	/* HEADER STYLE 2
	================================================== */
	
	$wp_customize->add_section( 'header_style_2', array(
		'title'		=>	esc_html__( 'Header Style 2', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'bg_header', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_header_dalem', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_header_dalem', array(
		'default'		=> 	'#eaeaea',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'burger_menu', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_style_two', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_active_two', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'info_web_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'info_web_desc', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sugges_search', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sugges_desc_search', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_close', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_search', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_search', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header', array(
		'label'		=>	esc_html__( 'Background Header Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'bg_header',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header_dalem', array(
		'label'		=>	esc_html__( 'Inner Header Background Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'bg_header_dalem',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_header_dalem', array(
		'label'		=>	esc_html__( 'The Dividing Line Between Menus and Descriptions', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'border_header_dalem',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'burger_menu', array(
		'label'		=>	esc_html__( 'Burger Icon & Search Icon Header Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'burger_menu',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_style_two', array(
		'label'		=>	esc_html__( 'Menu List Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'menu_style_two',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active_two', array(
		'label'		=>	esc_html__( 'Menu List Hover Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'menu_active_two',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_web_title', array(
		'label'		=>	esc_html__( 'Info Title Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'info_web_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_web_desc', array(
		'label'		=>	esc_html__( 'Info Description Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'info_web_desc',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_title', array(
		'label'		=>	esc_html__( 'Search Bar Title Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'search_title',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sugges_search', array(
		'label'		=>	esc_html__( 'Search Suggestion Title Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'sugges_search',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sugges_desc_search', array(
		'label'		=>	esc_html__( 'Search Suggestion Description Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'sugges_desc_search',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_close', array(
		'label'		=>	esc_html__( 'Button Search Close Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'btn_close',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_search', array(
		'label'		=>	esc_html__( 'Search Background Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'bg_search',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_search', array(
		'label'		=>	esc_html__( 'Search Border Color', 'sakola' ),
		'section'	=>	'header_style_2',
		'settings'	=>	'border_search',
		'priority'	=>	14,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'sakola_content_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Content Section Color', 'sakola' ),
	        'description'       => esc_html__( 'Edit your content color here.', 'sakola' ),
	    )
	);

	/* BLOG STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_styling', array(
		'title'		=>	esc_html__( 'Blog Loop & Single Blog Portfolio Style & Magazine Style 1', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'post_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_hover_title', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_desc', array(
		'default'		=> 	'#777777',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_hover_more', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'social_post', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'social_hover_post', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'quote_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_icon', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_bord', array(
		'default'		=> 	'#f2f2f2',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_hover_link', array(
		'default'		=> 	'#cccccc',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_link', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_hover_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'next_archive', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color (All Blog Style)', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_hover', array(
		'label'		=>	esc_html__( 'Post Meta Link Hover Color (All Blog Style)', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_border', array(
		'label'		=>	esc_html__( 'Post Meta Border Color (All Blog Style)', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_border',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_title', array(
		'label'		=>	esc_html__( 'Post Title Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_title',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_hover_title', array(
		'label'		=>	esc_html__( 'Post Title Hover Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_hover_title',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_desc', array(
		'label'		=>	esc_html__( 'Post Text Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_desc',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more', array(
		'label'		=>	esc_html__( 'Post Read More Button Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_hover_more', array(
		'label'		=>	esc_html__( 'Post Read More Button Hover Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_hover_more',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_post', array(
		'label'		=>	esc_html__( 'Post Social Share Icon Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'social_post',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover_post', array(
		'label'		=>	esc_html__( 'Post Social Share Icon Hover Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'social_hover_post',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quote_border', array(
		'label'		=>	esc_html__( 'Quote Border Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'quote_border',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_icon', array(
		'label'		=>	esc_html__( 'Tag Label Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tag_icon',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_text', array(
		'label'		=>	esc_html__( 'Tag Text Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tag_text',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_hover', array(
		'label'		=>	esc_html__( 'Tag Text Hover Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'tag_hover',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_bord', array(
		'label'		=>	esc_html__( 'Next & Previous Post Border Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_bord',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_text', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_text',
		'priority'	=>	16,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_link',
		'priority'	=>	17,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_hover_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Hover Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'prev_hover_link',
		'priority'	=>	18,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_title', array(
		'label'		=>	esc_html__( 'Comment Reply Title Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'comment_title',
		'priority'	=>	19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'comment_link',
		'priority'	=>	20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_hover_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Hover Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'comment_hover_link',
		'priority'	=>	21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_bg', array(
		'label'		=>	esc_html__( 'Post Comment Button Background Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_bg',
		'priority'	=>	22,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_text', array(
		'label'		=>	esc_html__( 'Post Comment Button Text Color', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'btn_comment_text',
		'priority'	=>	23,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'next_archive', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color (Archive)', 'sakola' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'next_archive',
		'priority'	=>	24,
	) ) );


	/* BLOG STYLING 2
	================================================== */
	
	$wp_customize->add_section( 'blog_styling_2', array(
		'title'		=>	esc_html__( 'Blog Full Background Template', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_black', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'blog_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'hover_meta', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'hover_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_black', array(
		'label'		=>	esc_html__( 'Post Title Color', 'sakola' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'title_black',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_active', array(
		'label'		=>	esc_html__( 'Post Title Hover/Active Color', 'sakola' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'title_active',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color (All Blog Style)', 'sakola' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'blog_meta',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_meta', array(
		'label'		=>	esc_html__( 'Post Meta Border Color (All Blog Style)', 'sakola' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'border_meta',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_meta', array(
		'label'		=>	esc_html__( 'Post Meta Link Hover Color (All Blog Style)', 'sakola' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'hover_meta',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_active', array(
		'label'		=>	esc_html__( 'Post Meta Hover Active Color', 'sakola' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'hover_active',
		'priority'	=>	6,
	) ) );



	/* SINGLE POST 2 STYLING
	================================================== */
	
	$wp_customize->add_section( 'single_magazine_2', array(
		'title'		=>	esc_html__( 'Single Post Magazine Style 2', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );

	//SECTION

	$wp_customize->add_setting( 'title_post', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_post_hover', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_text_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg', array(
		'default'		=> 	'#7ecddf',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg_hover', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_post', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_post_style3', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'author_hover', array(
		'default'		=> 	'#7ecddf',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_comment', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'span_text', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_arrow', array(
		'default'		=> 	'#7ecddf',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_share', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'icon_share_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post', array(
		'label'		=>	esc_html__( 'Titile Post Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'title_post',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_hover', array(
		'label'		=>	esc_html__( 'Titile Post Hover Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'title_post_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text', array(
		'label'		=>	esc_html__( 'Category Text Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_text',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_text_hover', array(
		'label'		=>	esc_html__( 'Category Text Hover Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_text_hover',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg', array(
		'label'		=>	esc_html__( 'Category Background Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_bg',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg_hover', array(
		'label'		=>	esc_html__( 'Category Background Hover Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'category_bg_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_post', array(
		'label'		=>	esc_html__( 'Post Meta Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'meta_post',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_post_style3', array(
		'label'		=>	esc_html__( 'Post Meta Magazine Style 3 Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'meta_post_style3',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_text', array(
		'label'		=>	esc_html__( 'Author Text Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'author_text',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_hover', array(
		'label'		=>	esc_html__( 'Author Text Hover Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'author_hover',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_comment', array(
		'label'		=>	esc_html__( 'Icon Comment Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_comment',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'span_text', array(
		'label'		=>	esc_html__( 'Post Meta Right Section Text Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'span_text',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_arrow', array(
		'label'		=>	esc_html__( 'Icon Arrow Next & Previous Post Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_arrow',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share', array(
		'label'		=>	esc_html__( 'Icon Share Post Magazine Style Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_share',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_share_hover', array(
		'label'		=>	esc_html__( 'Icon Share Post Magazine Style Color', 'sakola' ),
		'section'	=>	'single_magazine_2',
		'settings'	=>	'icon_share_hover',
		'priority'	=>	15,
	) ) );



	/* SIDEBAR STYLING
	================================================== */
	
	$wp_customize->add_section( 'sidebar_styling', array(
		'title'		=>	esc_html__( 'Sidebar & Widget', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'sidebar_search_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_btn', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_icon', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sakola_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_sidebar', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_sidebar', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_tabs', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_bg', array(
		'label'		=>	esc_html__( 'Search Widget Background Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_btn', array(
		'label'		=>	esc_html__( 'Search Widget Button Background Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_btn',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_icon', array(
		'label'		=>	esc_html__( 'Search Widget Button Icon Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_icon',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg', array(
		'label'		=>	esc_html__( 'Widget Background Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_bg',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sakola_widget_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sakola_widget_title',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_text_sidebar',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Hover Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_hover_sidebar',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs', array(
		'label'		=>	esc_html__( 'Sakola News Widget Tabs Active Background Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs', array(
		'label'		=>	esc_html__( 'Sakola News Widget Tabs Text Active Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs2', array(
		'label'		=>	esc_html__( 'Sakola News Widget Tabs Background Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs2',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2', array(
		'label'		=>	esc_html__( 'Sakola News Widget Tabs Text Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2_hover', array(
		'label'		=>	esc_html__( 'Sakola News Widget Tabs Text Hover Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2_hover',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_tabs', array(
		'label'		=>	esc_html__( 'Sakola News Widget Tabs Border Bottom Color', 'sakola' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'border_tabs',
		'priority'	=>	13,
	) ) );
	

	/* CONTACT STYLING
	================================================== */
	
	$wp_customize->add_section( 'contact_styling', array(
		'title'		=>	esc_html__( 'Contact Form', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'form_bord', array(
		'default'		=> 	'#cdcdcc',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'form_bord_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_input', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_hover', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Border Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 2 Border Hover Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_input', array(
		'label'		=>	esc_html__( 'Text Input Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'text_input',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Hover Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Hover Color', 'sakola' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text_hover',
		'priority'	=>	7,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'sakola_footer_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Footer Section Color', 'sakola' ),
	        'description'       => esc_html__( 'Edit your Footer color here.', 'sakola' ),
	    )
	);

	/* Footer STYLING
	================================================== */
	
	$wp_customize->add_section( 'footer_styling', array(
		'title'		=>	esc_html__( 'Footer', 'sakola' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'footer_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_link', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_social', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_social', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_widget', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_widget', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'		=>	esc_html__( 'Footer Copyright & Address Text Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_text',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_link',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Hover Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_link',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_social',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Hover Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_social',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_bg', array(
		'label'		=>	esc_html__( 'Footer Widget Background Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_bg',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title', array(
		'label'		=>	esc_html__( 'Footer Widget Title Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_text_widget',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Hover Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_hover_widget',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Text Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'text_widget',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Border Color', 'sakola' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'border_widget',
		'priority'	=>	11,
	) ) );

	