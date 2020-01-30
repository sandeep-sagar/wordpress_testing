<?php

/*
Plugin Name: Sakola Extra
Plugin URI: http://www.themesawesome.com
Description: A plugin to add functionality to Premium Theme Sakola from Themes Awesome
Version: 1.0
Author: Themes Awesome
Author URI: http://www.themesawesome.com
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// This file is pretty much a boilerplate WordPress plugin.
// It does very little except including wp-widget.php

define( 'SAKOLA_EXTRA__FILE__', __FILE__ );
define( 'SAKOLA_EXTRA_PLUGIN_BASE', plugin_basename( SAKOLA_EXTRA__FILE__ ) );
define( 'SAKOLA_EXTRA_URL', plugins_url( '/', SAKOLA_EXTRA__FILE__ ) );
define( 'SAKOLA_EXTRA_PATH', plugin_dir_path( SAKOLA_EXTRA__FILE__ ) );


require_once SAKOLA_EXTRA_PATH.'inc/custom.php';
require_once SAKOLA_EXTRA_PATH.'inc/portohov.php';
require_once SAKOLA_EXTRA_PATH.'inc/element-helper.php';
require_once SAKOLA_EXTRA_PATH.'inc/lightbox-transition.php';

// Flush rewrite rules on activation
function sakola_extra_activation() {
  flush_rewrite_rules(true);
}

function sakola_new_elements(){
  require_once SAKOLA_EXTRA_PATH.'head-title/head-title.php';
  require_once SAKOLA_EXTRA_PATH.'sakola-post/post-control.php';
  require_once SAKOLA_EXTRA_PATH.'gallery-block/gallery-control.php';
  require_once SAKOLA_EXTRA_PATH.'team-block/team-control.php';
  require_once SAKOLA_EXTRA_PATH.'client-block/client-control.php';
  require_once SAKOLA_EXTRA_PATH.'contact-block/contact-control.php';
  require_once SAKOLA_EXTRA_PATH.'testimonial-block/testimonial-control.php';
  require_once SAKOLA_EXTRA_PATH.'text-block/text-control.php';
}

add_action('elementor/widgets/widgets_registered','sakola_new_elements');


if(!function_exists('redux_register_custom_extension_loader')) :
  function redux_register_custom_extension_loader($ReduxFramework) {
    $path    = dirname( __FILE__ ) . '/extensions/';
    $folders = scandir( $path, 1 );
    foreach ( $folders as $folder ) {
       if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
        continue;
       }
       $extension_class = 'ReduxFramework_Extension_' . $folder;
       if ( ! class_exists( $extension_class ) ) {
        // In case you wanted override your override, hah.
        $class_file = $path . $folder . '/extension_' . $folder . '.php';
        $class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
        if ( $class_file ) {
          require_once( $class_file );
        }
      }
      if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
        $ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
      }
    }
  }
  // Modify {$redux_opt_name} to match your opt_name
  add_action("redux/extensions/sakola_framework/before", 'redux_register_custom_extension_loader', 0);
endif;

include_once dirname( __FILE__ ) . '/sakola-importer.php';