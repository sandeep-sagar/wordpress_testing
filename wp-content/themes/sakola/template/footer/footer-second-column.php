<?php
$options   = get_option('sakola_framework');
$prefix = 'sakola_';
$layout    = $options['footer_customize_second']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'sakola-copyright':
			sakola_footer_part('footer/sakola-copyright');
			break;
		case 'sakola-social':
			sakola_footer_part('footer/sakola-footsocial');
			break;
		case 'sakola-foot-text':
			sakola_footer_part('footer/sakola-foottext');
			break;
		case 'sakola-foot-logo':
			sakola_footer_part('footer/sakola-footlogo');
			break;
		case 'sakola-foot-menu':
			sakola_footer_part('footer/sakola-footmenu');
			break;
		}
	}
endif;