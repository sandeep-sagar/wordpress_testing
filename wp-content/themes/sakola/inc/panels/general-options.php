<?php
// Set Panel ID
$panel_id = 'sakola_general_options';

// Set prefix
$prefix = 'sakola';


// Change panel for Colors
$site_bg_color        = $wp_customize->get_section( 'colors' );
$site_bg_color->panel = $panel_id;
$site_bg_color->title = esc_html__( 'Background Color', 'sakola' );
$site_bg_color->priority = 4;

// Change panel for Background Image
$site_bg_img        = $wp_customize->get_section( 'background_image' );
$site_bg_img->panel = $panel_id;
$site_bg_img->priority = 5;

// Change panel for Background Image
$wp_customize->get_section( 'header_image' )->panel = $panel_id;
$wp_customize->get_section( 'header_image' )->title = esc_html__( 'Blog Header Image', 'sakola' );

// Change panel for Static Front Page
$site_title        = $wp_customize->get_section( 'static_front_page' );
$site_title->panel = $panel_id;

// Change Logo section
$site_logo              = $wp_customize->get_control( 'custom_logo' );
$site_logo->description = esc_html__( 'The site logo is used as a graphical representation of your company name. Recommended size: 105 (width) x 75 (height) pixels(px).', 'sakola' );
$site_logo->label       = esc_html__( 'Site logo', 'sakola' );
$site_logo->section     = $prefix . '_general_logo_section';
$site_logo->priority    = 1;

// Change site icon section
$site_icon           = $wp_customize->get_control( 'site_icon' );
$site_icon->section  = $prefix . '_general_logo_section';
$site_icon->priority = 2;

// Change panel for Static Front Page
$bocah        = $wp_customize->get_section( 'title_tagline' );
$bocah->panel = $panel_id;
$bocah->priority    = 1;


/***********************************************/
/************** GENERAL OPTIONS  ***************/
/***********************************************/


$wp_customize->add_panel( $panel_id, array(
	'priority'       => 1,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'title'          => esc_html__( 'General Options', 'sakola' ),
	'description'    => esc_html__( 'You can change the site layout in this area as well as your contact details (the ones displayed in the header & footer) ', 'sakola' ),
) );

/***********************************************/
/*********** Logo section  ************/
/***********************************************/

$wp_customize->add_section( $prefix . '_general_logo_section', array(
	'title'    => esc_html__( 'Logo', 'sakola' ),
	'priority' => 2,
	'panel'    => $panel_id,
) );