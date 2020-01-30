<?php

add_action( 'elementor/element/sakola-instagram-block/sakola_instagram_block_style_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */

	$element->add_control(
		'use_love_inst',
		[
			'label' => __( 'Use Love Count', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => 'use',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'use',
		]
	);

	$element->add_control(
		'typhography_love_inst_color',
		[
			'label' => __( 'Love Count Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .instagram-item .like.meta-icon' => 'color: {{VALUE}};',
			],
			'condition' => [
				'use_love_inst' => 'use',
			],
		]
	);

	$element->add_responsive_control(
		'love_inst_size',
		[
			'label' => __( 'Love Count Size', 'sakola' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'default' => '16',
			'selectors' => [
				'{{WRAPPER}} .instagram-item .like.meta-icon' => 'font-size: {{VALUE}}px;',
			],
			'condition' => [
				'use_love_inst' => 'use',
			],
		]
	);

	$element->add_responsive_control(
		'love_inst_size_icon',
		[
			'label' => __( 'Love Count Icon Size', 'sakola' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'default' => '16',
			'selectors' => [
				'{{WRAPPER}} .instagram-item .like.meta-icon i' => 'font-size: {{VALUE}}px;',
			],
			'condition' => [
				'use_love_inst' => 'use',
			],
		]
	);

}, 10, 2 );

add_action( 'elementor/element/sakola-instagram-block/sakola_instagram_block_style2_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */

	$element->add_control(
		'use_comment_inst',
		[
			'label' => __( 'Use Comment Count', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'default' => 'use',
			'label_on' => 'Use',
			'label_off' => 'No',
			'return_value' => 'use',
		]
	);

	$element->add_control(
		'typhography_comment_inst_color',
		[
			'label' => __( 'Comment Count Color', 'sakola' ),
			'type' => \Elementor\Controls_Manager::COLOR,	
			'default' => '#ffffff',
			'selectors' => [
				'{{WRAPPER}} .instagram-item .comment.meta-icon' => 'color: {{VALUE}};',
			],
			'condition' => [
				'use_comment_inst' => 'use',
			],
		]
	);

	$element->add_responsive_control(
		'comment_inst_size',
		[
			'label' => __( 'Comment Count Size', 'sakola' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'default' => '16',
			'selectors' => [
				'{{WRAPPER}} .instagram-item .comment.meta-icon' => 'font-size: {{VALUE}}px;',
			],
			'condition' => [
				'use_comment_inst' => 'use',
			],
		]
	);

	$element->add_responsive_control(
		'comment_inst_size_icon',
		[
			'label' => __( 'Comment Count Icon Size', 'sakola' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'default' => '16',
			'selectors' => [
				'{{WRAPPER}} .instagram-item .comment.meta-icon i' => 'font-size: {{VALUE}}px;',
			],
			'condition' => [
				'use_comment_inst' => 'use',
			],
		]
	);

}, 10, 2 );