<?php
$options   = get_option('sakola_framework');
$prefix = 'sakola_';
$layout    = $options['header_customize_center']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
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
			sakola_header_part('header/menus');
			break;
		case 'sakola-sec-menus':
			sakola_header_part('header/menus-sec');
			break;
		case 'sakola-search':
			sakola_header_part('header/search-btn');
			break;
		}
	}
endif;