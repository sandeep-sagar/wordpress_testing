<?php

function sakola_header_menus_ext_opt() {

	$sakola_header_menus_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'menus_choose_style',
			'type'     => 'select',
			'title'    => esc_html__('Menu Style Choices', 'sakola'),
			'options'  => array(
				'style-1'		=> esc_html__('Style 1', 'sakola'),
				'style-2'		=> esc_html__('Style 2', 'sakola'),
				'style-3'		=> esc_html__('Style 3', 'sakola'),
				'style-4'		=> esc_html__('Style 4', 'sakola'),
				'style-5'		=> esc_html__('Style 5', 'sakola'),
				'style-6'		=> esc_html__('Style 6', 'sakola'),
				'style-7'		=> esc_html__('Style 7', 'sakola'),
				'style-8'		=> esc_html__('Style 8', 'sakola'),
				'style-9'		=> esc_html__('Style 9', 'sakola'),
				'style-10'		=> esc_html__('Style 10', 'sakola'),
				'style-11'		=> esc_html__('Style 11', 'sakola'),
				'style-12'		=> esc_html__('Style 12', 'sakola'),
				'style-13'		=> esc_html__('Style 13', 'sakola'),
				'style-14'		=> esc_html__('Style 14', 'sakola'),
			),
			'default'  => 'style-1',
			'required' => array( 'header_type', '=', 'default' ),
		),
	);

return $sakola_header_menus_opt;
}