<?php

add_action( 'elementor/element/sakola-post-block/section_sakola_post_pagination_style_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */

	$element->add_control(
		'post_pagination_type',
		[
			'label' => __( 'Pagination Type', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'post_pagination_none',
			'options' => [
				'post_pagination_none' => __( 'No Pagination', 'sakola' ),
				'post_pagination_number' => __( 'Pagination Number', 'sakola' ),
				'post_pagination_nexprev'=> __( 'Pagination Next/Prev', 'sakola' ),
				'post_pagination_infinite'=> __( 'Pagination Infinite', 'sakola' ),
			],
		]
	);
	
	$element->add_control(
		'load_align',
		[
			'label' => __( 'Pagination Align', 'sakola' ),
			'type' => \Elementor\Controls_Manager::CHOOSE,
			'options' => [
				'left' => [
					'title' => __( 'Left', 'sakola' ),
					'icon' => 'fa fa-align-left',
				],
				'center' => [
					'title' => __( 'Center', 'sakola' ),
					'icon' => 'fa fa-align-center',
				],
				'right' => [
					'title' => __( 'Right', 'sakola' ),
					'icon' => 'fa fa-align-right',
				],
			],
			'default' => 'center',
			'selectors' => [
				'{{WRAPPER}} .navigation-paging.infinite-wrap, {{WRAPPER}} .navigation-paging.pagination-num' => 'text-align: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => ['post_pagination_number', 'post_pagination_infinite'],
			],
		]
	);

	/*-----------------------------------------------------------------------------------*/
	/*  10.1. Pagination Number Setting
	/*-----------------------------------------------------------------------------------*/
	$element->add_control(
		'pagination_number_color',
		[
			'label' => __( 'Pagination Number Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .pagination-num .btn' => 'color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_number',
			],
		]
	);
	$element->add_control(
		'pagination_number_bg_color',
		[
			'label' => __( 'Pagination Number Background Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .pagination-num .btn' => 'background-color: {{VALUE}}; border-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_number',
			],
		]
	);

	$element->add_control(
		'pagination_number_curr_color',
		[
			'label' => __( 'Pagination Current Number Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .pagination-num .btn.current' => 'color: {{VALUE}}; border-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_number',
			],
		]
	);
	$element->add_control(
		'pagination_number_curr_bg_color',
		[
			'label' => __( 'Pagination Current Number Background', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .pagination-num .btn.current' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_number',
			],
		]
	);

	/*-----------------------------------------------------------------------------------*/
	/*  10.2. Pagination Next/Prev Setting
	/*-----------------------------------------------------------------------------------*/
	$element->add_control(
		'pagination_next_text',
		[
			'label' => __( 'Pagination Next Text', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => 'NEWER POST',
			'title' => __( 'Enter some text', 'sakola' ),
			'condition' => [
				'post_pagination_type' => 'post_pagination_nexprev',
			],
		]
	);

	$element->add_control(
		'pagination_prev_text',
		[
			'label' => __( 'Pagination Prev Text', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => 'OLDER POST',
			'title' => __( 'Enter some text', 'sakola' ),
			'condition' => [
				'post_pagination_type' => 'post_pagination_nexprev',
			],
		]
	);

	$element->add_control(
		'pagination_prevnext_color',
		[
			'label' => __( 'Pagination Prev/Next Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .post-navigation.nav-previous a, {{WRAPPER}} .post-navigation.nav-next a' => 'color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_nexprev',
			],
		]
	);
	$element->add_control(
		'pagination_prevnext_bg_color',
		[
			'label' => __( 'Pagination Prev/Next Border Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .post-navigation.nav-previous a, {{WRAPPER}} .post-navigation.nav-next a' => 'border: 2px solid {{VALUE}}; background-color: transparent;',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_nexprev',
			],
		]
	);

	$element->add_control(
		'pagination_prevnext_hov_color',
		[
			'label' => __( 'Pagination Hover Prev/Next Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .post-navigation.nav-previous a:hover, {{WRAPPER}} .post-navigation.nav-next a:hover' => 'color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_nexprev',
			],
		]
	);
	$element->add_control(
		'pagination_prevnext_hov_bg_color',
		[
			'label' => __( 'Pagination Hover Prev/Next Background', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .post-navigation.nav-previous a:hover, {{WRAPPER}} .post-navigation.nav-next a:hover' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_nexprev',
			],
		]
	);

	/*-----------------------------------------------------------------------------------*/
	/*  10.3. Pagination Infinite Setting
	/*-----------------------------------------------------------------------------------*/

	$element->add_control(
		'load_style',
		[
			'label' => __( 'Load More Style', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'style-1',
			'options' => [
				'style-1' => __( 'Style 1', 'sakola' ),
				'style-2' => __( 'Style 2', 'sakola' ),
				'style-3' => __( 'Style 3', 'sakola' ),
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
			],
		]
	);
	
	$element->add_control(
		'loop_infinite_text',
		[
			'label' => __( 'Load More Text', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => 'Load More',
			'title' => __( 'Enter some text', 'sakola' ),
			'description' => __( 'Change your button text by your own.', 'sakola' ),
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
			],
		]
	);

	/*$element->add_control(
		'loop_infinite_finish_text',
		[
			'label' => __( 'Load More Finish Text', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => 'There is no more',
			'title' => __( 'Enter some text', 'sakola' ),
			'description' => __( 'Change your finish text by your own.', 'sakola' ),
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
			],
		]
	);*/

	$element->add_control(
		'loop_infinite_load_img',
		[
			'label' => __( 'Loader Image', 'elementor' ),
			'type' => \Elementor\Controls_Manager::MEDIA,
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
			],
		]
	);

	/* load more style 1 */
	$element->add_control(
		'load_style1_color',
		[
			'label' => __( 'Load More Text Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .infinite-wrap.style-1 .btn' => 'color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-1',
			],
			'separator' => 'before',
		]
	);
	$element->add_control(
		'load_style1_bg_color',
		[
			'label' => __( 'Load More Button Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .infinite-wrap.style-1 .btn' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-1',
			],
		]
	);
	$element->add_control(
		'load_style1_bord_color',
		[
			'label' => __( 'Load More Separator Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#cccccc',
			'selectors' => [
				'{{WRAPPER}} .infinite-wrap.style-1' => 'border-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-1',
			],
		]
	);

	$element->add_control(
		'load_more_bord_color',
		[
			'label' => __( 'Load More Separator Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#cccccc',
			'selectors' => [
				'{{WRAPPER}} .navigation-paging' => 'border-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => ['post_pagination_nexprev', 'post_pagination_number'],
			],
		]
	);

	/* load more style 2 */
	$element->add_control(
		'load_style2_color',
		[
			'label' => __( 'Load More Text Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .navigation-paging.infinite-wrap.style-2 .btn' => 'color: {{VALUE}};',
				'{{WRAPPER}} .infinite-wrap.style-2 .btn' => 'border-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-2',
			],
			'separator' => 'before',
		]
	);
	$element->add_control(
		'load_style2_hov_color',
		[
			'label' => __( 'Load More Hover Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .infinite-wrap.style-2 .btn:hover' => 'color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-2',
			],
		]
	);
	$element->add_control(
		'load_style2_bg_hov_color',
		[
			'label' => __( 'Load More Hover Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .navigation-paging.infinite-wrap.style-2 .btn:hover' => 'background-color: {{VALUE}};',
				'{{WRAPPER}} .infinite-wrap.style-2 .btn:hover' => 'border-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-2',
			],			
		]
	);

	/* load more style 3 */
	$element->add_control(
		'load_style3_color',
		[
			'label' => __( 'Load More Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .infinite-wrap.style-3 .btn' => 'color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-3',
			],
			'separator' => 'before',
		]
	);
	$element->add_control(
		'load_style3_hov_color',
		[
			'label' => __( 'Load More Hover Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#000000',
			'selectors' => [
				'{{WRAPPER}} .infinite-wrap.style-3 .btn:hover' => 'color: {{VALUE}};',
				'{{WRAPPER}} .infinite-wrap.style-3 .btn:before' => 'background-color: {{VALUE}};',
			],
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'load_style' => 'style-3',
			],
		]
	);


	$element->add_control(
		'loop_infinite_class_use',
		[
			'label' => __( 'Advanced Class Infinite', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => '',
			'prefix_class' => 'use-adv-class-',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'use',
			'description' => __( 'Add specific class for your wrapper.', 'sakola' ),
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
			],
		]
	);

	$element->add_control(
		'loop_infinite_class',
		[
			'label' => __( 'Add Unique Class for Infinite Scroll', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => 'loop-infinte-post-list',
			'title' => __( 'Enter some text', 'sakola' ),
			'description' => __( 'This class will avoid class conflict between portfolio list query (must be different!).', 'sakola' ),
			'condition' => [
				'post_pagination_type' => 'post_pagination_infinite',
				'loop_infinite_class_use' => 'use',
			],
		]
	);

	/*shadow*/
	$element->add_control(
		'use_shadow_pagination',
		[
			'label' => __( 'Pagination Shadow', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'on',
			'default' => 'on',
			'condition' => [
				'post_pagination_type' => ['post_pagination_number', 'post_pagination_infinite'],
			],
		]
	);

}, 10, 2 );