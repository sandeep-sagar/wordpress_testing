<?php

function sakola_header_search_ext_opt() {

	$sakola_header_search_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'search_bar_style',
			'type'     => 'select',
			'title'    => esc_html__('Search Bar Style', 'sakola'),
			'options'  => array(
				'default'		=> esc_html__('Default Search Bar', 'sakola'),
				'expand'		=> esc_html__('Expanded Search Content', 'sakola'),
			),
			'default'  => 'expand',
		),
		array(
			'id'		=>'search_bar_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Bar Title', 'sakola'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'		=>'search_sug_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Suggestion Title', 'sakola'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'       => 'search_sug_text',
			'type'     => 'textarea',
			'title'    => esc_html__('Search Suggestion Description', 'sakola'), 
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
	);

return $sakola_header_search_opt;
}