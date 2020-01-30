<?php
namespace Elementor;

function sakola_general_elementor_init(){
	Plugin::instance()->elements_manager->add_category(
		'sakola-general-category',
		[
			'title'  => 'Main Elements',
			'icon' => 'font'
		],
		1
	);
}
add_action('elementor/init','Elementor\sakola_general_elementor_init');