<?php

function sakola_single_post_ext_opt() {

	$sakola_single_post_opt = array(

		/* 5.1. Single Post Layout */
		array(
			'id'       => 'blog_type',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Post Layout Type', 'sakola' ),
			'subtitle' => esc_html__( 'Select Your Single Post Layout Type', 'sakola' ),
			'options'  => array(
				'fullwidth' => esc_html__( 'Full Width', 'sakola' ),
				'sidebar' => esc_html__( 'Sidebar', 'sakola' ),
			),
			'default'  => 'sidebar'
		),
		/* end of single post layout */

		/* 5.2. Single Post Padding */
		array(
			'id'       => 'single_blog_padding',
			'type'     => 'spacing',
			'output'   => array( '.single-post-wrap .blog' ),
			'mode'     => 'padding',
			'all'      => false,
			'top'           => true,
			'bottom'        => true,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => __( 'Padding Single Post', 'sakola' ),
			'subtitle' => __( 'Padding top and bottom for Single Post.', 'sakola' ),
			'default'  => array(
				'padding-top'    => '60px',
				'padding-right'  => '0',
				'padding-bottom' => '60px',
				'padding-left'   => '0'
			),
		),
		/* end of single post padding */
	);

	return $sakola_single_post_opt;
}