<?php

add_action( 'elementor/element/sakola-post-block/section_sakola_post_block_post_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */
	
	$element->add_control(
		'posts_per_page',
		[
			'label' => __( 'Post per Block', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '6',
			'title' => __( 'Enter some text', 'sakola' ),
			'description' => __( 'This option allow you to set how much post display in this block.', 'sakola' ),	
		]
	);

	$element->add_control(
		'offset',
		[
			'label' => __( 'Offset', 'sakola' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '',
			'title' => __( 'Enter some text', 'sakola' ),
			'description' => __( 'Set the first post to display (start from 0 as the latest post in each order).', 'sakola' ),
		]
	);

	$element->add_control(
		'category',
		[
			'label' => __( 'Category', 'sakola' ),
			'type'    => \Elementor\Controls_Manager::SELECT2,
			'label_block' => true,
			'multiple'    => true,
			'default' => [],				
			'options' => sakola_get_category(),
			'description' => __( 'Select category to display (default to All).', 'sakola' ),
		]
	);

	$element->add_control(
		'orderby',
		[
			'label' => __( 'Order By', 'sakola' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'date',
			'options' => sakola_order_by(),
			'description' => __( 'Select post order by (default to latest post).', 'sakola' ),
		]
	);

}, 10, 2 );