<?php
$options   = get_option('sakola_framework');
$prefix = 'sakola_';
$top_layout    = $options['header_top_customize_first']['enabled'];

global $post;
 
if ($top_layout): foreach ($top_layout as $key=>$value) {
	switch ($key) {
		case 'sakola-logo':
			if ( is_front_page() && is_home() ) {
				sakola_header_part('header/logo-standard');
			}
			elseif ( is_home() ) {
				sakola_header_part('header/logo-standard');
			}
			elseif ( is_front_page() ) {
				sakola_header_part('header/logos');
			}
			elseif(is_single('post')) {
				sakola_header_part('header/logo-standard');
			}
			elseif(is_singular( 'post' )) {
				sakola_header_part('header/logo-standard');
			}
			elseif( is_page_template() ) {
				sakola_header_part('header/logos');
			}
			elseif( is_page() ) {
				sakola_header_part('header/logos');
			}
			elseif( is_archive() || is_search() || is_404() ) {
				sakola_header_part('header/logo-standard');
			}
			break;
		case 'sakola-menus':
			sakola_header_part('header/menus-top');
			break;
		case 'sakola-search':
			sakola_header_part('header/search-top');
			break;
		case 'sakola-social':
			sakola_header_part('header/header-social');
			break;
		}
	}
endif;