<?php


	if ( ! class_exists( 'Redux' ) ) {
		return;
	}


if (!class_exists("SAKOLA_Framework_Config")) {

	require_once ( get_template_directory().'/inc/opt-ext/social-opt-ext.php');

	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-general-opt.php');	
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-alt-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/top-header-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-search-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-typo-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/header-section-opt/header-menu-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/singlepost-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/content-typo-opt.php');


	require_once ( get_template_directory().'/inc/opt-ext/footer-section-opt/footer-general-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/footer-section-opt/footer-style-opt.php');
	require_once ( get_template_directory().'/inc/opt-ext/footer-section-opt/footer-widget-opt.php');

	class SAKOLA_Framework_Config {

		public $args = array();
		public $sections = array();
		public $theme;
		public $ReduxFramework;

		public function __construct() {
			// This is needed. Bah WordPress bugs.  ;)
			if ( get_template_directory() && strpos( Redux_Helpers::cleanFilePath( __FILE__ ), Redux_Helpers::cleanFilePath( get_template_directory() ) ) !== false) {
				$this->initSettings();
			} else {
				add_action('plugins_loaded', array($this, 'initSettings'), 10);    
			}
		}

		public function initSettings() {

			if ( !class_exists("ReduxFramework" ) ) {
				return;
			}       
			
			$this->theme = wp_get_theme();
			$this->setArguments();
			$this->setHelpTabs();
			$this->setSections();

			if (!isset($this->args['opt_name'])) { 
				return;
			}

			$this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
		}

		public function setSections() {



			ob_start();

			$ct = wp_get_theme();
			$this->theme = $ct;
			$item_name = $this->theme->get('Name');
			$tags = $this->theme->Tags;
			$screenshot = $this->theme->get_screenshot();
			$class = $screenshot ? 'has-screenshot' : '';

			$customize_title = sprintf(__('Customize &#8220;%s&#8221;', 'sakola'), $this->theme->display('Name'));
			?>
			

			<?php
			$item_info = ob_get_contents();

			ob_end_clean();


			// DECLARATION OF SECTIONS

			/*---------------------------------------
				1. Header Options
				2. Content Options
				3. Footer Options
				4. Blog Options
				5. Single Post Options
				6. Single Portfolio Options
				7. 404 Options
				8. Page Loader Options
			----------------------------------------*/

			/*-----------------------------------------------------------------------------------
			1. Header Options
				1.1. Header Container
				1.2. Header Type
					1.2.1. Header 1 Options
						1.2.1.1 Header 1 Top Options
					1.2.1. Header 2 & 3 Options
					1.2.3. Header 4, 5, 6 Options
				1.3. Boxed Header Options
				1.4. Header Alternative Options
				1.5. Search
			-----------------------------------------------------------------------------------*/
			
			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Header Builder', 'sakola'),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'id'   => 'genereal-header',
				'icon_class' => 'icon-large',
				'class' => 'header-general-sub',
				'subsection' => true,
				'title' => esc_html__('General Header', 'sakola'),
				'fields' => sakola_header_general_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-website',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'class' => 'header-style-sub',
				'title' => esc_html__('Header Style', 'sakola'),
				'fields' => sakola_header_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'class' => 'header-alt-sub',
				'title' => esc_html__('Header Alternative', 'sakola'),
				'fields' => sakola_header_alt_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-minus',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-top-sub-id',
				'class' => 'header-top-sub-class',
				'title' => esc_html__('Header Top', 'sakola'),
				'fields' => sakola_top_header_opt_ext(),
			);

			/* Header Mobile*/
			$this->sections[] = array(
				'icon' => 'el-icon-credit-card',
				'icon_class' => 'icon-large',
				'id' => 'header-mobile-sub-id',
				'class' => 'header-mobile-sub-class',
				'subsection' => true,
				'title' => esc_html__('Mobile Header', 'sakola'),
				'fields' => array(

					array(
						'id'       => 'header_mob_bg_def',
						'type'     => 'color',
						'title'    => esc_html__('Header Mobile Default Background', 'sakola'),
						'default'  => 'transparent',
						'validate' => 'color',
					),

					array(
						'id'       => 'header_mob_bg_alt',
						'type'     => 'color',
						'title'    => esc_html__('Header Mobile Alternative Background', 'sakola'),
						'default'  => '#000000',
						'validate' => 'color',
						'required' => array('header_scheme','=','enable'),
					),

					array(
						'id'       => 'mobile_padding_head',
						'type'     => 'spacing',
						'mode'     => 'padding',
						'all'      => false,
						'bottom'         => false,
						'top'         => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Header Mobile Padding', 'sakola' ),
						'default'  => array(
							'padding-top'    => 'auto',
							'padding-bottom' => 'auto',
							'padding-left'   => '45px',
							'padding-right'  => '45px'
						),
					),

					array(
						'id'       => 'mobile_margin_logo',
						'type'     => 'spacing',
						'mode'     => 'margin',
						'all'      => false,
						'top'         => true,
						'bottom'         => true,
						'left'	=> false,
						'right'	=> false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Logo Mobile Margin', 'sakola' ),
						'default'  => array(
							'margin-top'    => '0',
							'margin-bottom' => '0',
							'margin-left'   => 'auto',
							'margin-right'  => 'auto'
						),
					),

					array(
						'id'       => 'mobile_margin_menu',
						'type'     => 'spacing',
						'mode'     => 'margin',
						'all'      => false,
						'top'         => true,
						'bottom'         => true,
						'left'	=> false,
						'right'	=> false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Margin Mobile Menu', 'sakola' ),
						'default'  => array(
							'margin-top'    => '15px',
							'margin-bottom' => '0',
							'margin-left'   => 'auto',
							'margin-right'  => 'auto'
						),
					),

				)
			);

			$this->sections[] = array(
				'icon' => ' el-icon-search',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-search-sub-id',
				'class' => 'header-search-sub-class',
				'title' => esc_html__('Search Bar', 'sakola'),
				'fields' => sakola_header_search_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-fontsize',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-typo-sub-id',
				'class' => 'header-typo-sub-class',
				'title' => esc_html__('Header Typography', 'sakola'),
				'fields' => sakola_header_typography_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-text-width',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'header-menus-sub-id',
				'class' => 'header-menus-sub-class',
				'title' => esc_html__('Header Menu Style', 'sakola'),
				'fields' => sakola_header_menus_ext_opt(),
			);
			
			/*-----------------------------------------------------------------------------------
			2. Content Options
				2.1. Content Container
				2.2. Content Wrapper Type
				2.3. Boxed Content
					2.3.1. Boxed Content Options
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-fullscreen',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Content Options', 'sakola'),
				'fields' => array(

					/* 2.1. Content Container*/
					array(
						'id'       => 'content_container_width',
						'type'     => 'dimensions',
						'units'    => array('px', '%'),
						'title'    => esc_html__('Content Container Width', 'sakola'),
						'subtitle' => esc_html__('Define width for content container', 'sakola'),
						'output'   => array('.main-wrapper #content .container'),
						'height'   => false,
						'default'  => array(
							'Width'   => '1170', 
							'Height'  => false
						),
					),
					array(
						'id' => 'content_background',
						'type' => 'background',
						'output' => array('#content'),
						'title' => __('Content Custom Background', 'sakola'),
						'subtitle' => __('Content background with image, color, etc.', 'sakola'),
						'default' => 'transparent',
					),
					/* end of content container */

					/* 2.2. Content Wrapper Type */
					array(
						'id'       => 'wrap_opt',
						'type'     => 'image_select',
						'title'    => esc_html__( 'Wrapper Option', 'sakola' ),
						'subtitle' => esc_html__( 'Select Your Wrapper Type', 'sakola' ),
						'options' => array(
							'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/wrap-1.jpg'),
							'bordered' => array('alt' => 'bordered', 'img' => get_template_directory_uri() .'/img/wrap-2.jpg'),
						),
						'default'  => 'default'
					),

					array(
						'id'       => 'bordered_title',
						'type'     => 'color',
						'output'   => array( '.bordered' ),
						'title'    => __( 'Border Frame Color', 'sakola' ),
						'subtitle' => __( 'Pick a border color for the frame (default: #111111).', 'sakola' ),
						'default'  => '#111111',
						'validate' => 'color',
						'required' => array( 'wrap_opt', '=', 'bordered' ),
					),
					array(
						'id'       => 'bordered_width',
						'type'     => 'dimensions',
						'units'    => array('px'),
						'title'    => esc_html__('Border Frame Vertical', 'sakola'),
						'subtitle' => esc_html__('Define width for vertical border frame', 'sakola'),
						'output'   => array('.bordered.left-border, .bordered.right-border'),
						'height'   => false,
						'default'  => array(
							'Width'   => '25', 
							'Height'  => false
						),
						'required' => array( 'wrap_opt', '=', 'bordered' ),
					),
					array(
						'id'       => 'bordered_height',
						'type'     => 'spacing',
						'output'   => array( '.bordered.bottom-border, .bordered.top-border' ),
						'mode'     => 'padding',
						'all'      => true,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Border Frame Horizontal', 'sakola' ),
						'subtitle' => __( 'Define width for horizontal border frame', 'sakola' ),
						'default'  => array(
							'padding-top'    => '12px',
							'padding-right'  => '12px',
							'padding-bottom' => '12px',
							'padding-left'   => '12px'
						),
						'required' => array( 'wrap_opt', '=', 'bordered' ),
					),
					/* end of content wrapper type */

					/* 2.3. Boxed Content */
					array(
						'id'       => 'content_boxed',
						'type'     => 'switch',
						'title'    => __( 'Use Boxed Content', 'sakola' ),
						'subtitle' => __( 'Make your content boxed', 'sakola' ),
						'default'  => false,
						'required' => array( 'header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ) ),
					),
					array(
						'id'       => 'content_boxed_width',
						'type'     => 'dimensions',
						'units'    => array('px', '%'),
						'title'    => esc_html__('Content Boxed Width.', 'sakola'),
						'subtitle' => esc_html__('Define width for content box.', 'sakola'),
						'output'   => array('#content'),
						'height'   => false,
						'default'  => array(
							'Width'   => '1170', 
							'Height'  => false
						),
						'required' => array(
							array('content_boxed','=', true),
							array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
						),
					),

					/* 2.3.1. Boxed Content Options */
					array(
						'id'       => 'content_padding',
						'type'     => 'spacing',
						'output'   => array( '#content' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Boxed Content', 'sakola' ),
						'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'sakola' ),
						'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'sakola' ),
						'default'  => array(
							'padding-top'    => '0',
							'padding-right'  => '0',
							'padding-bottom' => '0',
							'padding-left'   => '0'
						),
						'required' => array(
							array('content_boxed','=', true),
							array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
						),
					),
					array(
						'id'       => 'content_margin',
						'type'     => 'spacing',
						'output'   => array( '#content' ),
						'mode'     => 'margin',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Margin Boxed Content', 'sakola' ),
						'subtitle' => __( 'Allow your users to choose the spacing or margin they want.', 'sakola' ),
						'desc'     => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'sakola' ),
						'default'  => array(
							'margin-top'    => '0',
							'margin-right'  => 'auto',
							'margin-bottom' => '0',
							'margin-left'   => 'auto'
						),
						'required' => array(
							array('content_boxed','=', true),
							array('header_type','=', array( 'default', 'style-4', 'style-5', 'style-6' ))
						),
					),

					/* header 2 boxed */
					array(
						'id'       => 'header2_content_boxed',
						'type'     => 'switch',
						'title'    => __( 'Header 2 Boxed Content', 'sakola' ),
						'subtitle' => __( 'Make your main wrapper boxed', 'sakola' ),
						'default'  => false,
						'required' => array( 'header_type', '=', array( 'style-2', 'style-3' ) ),
					),
					array(
						'id'       => 'header2_boxed_width',
						'type'     => 'dimensions',
						'units'    => array('px', '%'),
						'title'    => esc_html__('Boxed Content Width', 'sakola'),
						'subtitle' => esc_html__('Define width for boxed content.', 'sakola'),
						'output'   => array('.boxed-wrap'),
						'height'   => false,
						'default'  => array(
							'Width'   => '1200', 
							'Height'  => false
						),
						'required' => array(
							array('header2_content_boxed','=', true),
							array('header_type', '=', array( 'style-2', 'style-3' ))
						),
					),
					array(
						'id' => 'header2_boxed_background',
						'type' => 'background',
						'output' => array('.boxed-wrap'),
						'title' => __('Boxed Content Background', 'sakola'),
						'subtitle' => __('Content background with image, color, etc.', 'sakola'),
						'default' => '',
						'required' => array(
							array('header2_content_boxed','=', true),
							array('header_type', '=', array( 'style-2', 'style-3' ))
						),
					),
					/* end of content boxed */
				)
			);
			
			/* body content typograpgy */
			$this->sections[] = array(
				'icon' => ' el-icon-fontsize',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'content-typography-sub-id',
				'class' => 'content-typography-sub-class',
				'title' => esc_html__('Content Typography', 'sakola'),
				'fields' => sakola_content_typography_ext_opt(),
			);

			/*-----------------------------------------------------------------------------------
				4. Blog Options
					4.1. Blog Pagination Type
					4.2. Blog Padding
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Blog Options', 'sakola'),
				'fields' => array(

					/* 4.1. Blog Pagination Type */
					array(
						'id'       => 'loop_nav_type',
						'type'     => 'select',
						'title'    => esc_html__('Blog Pagination Type', 'sakola'),
						'options'  => array(
							'nav_default'   => esc_html__('Default Pagination', 'sakola'),
							'nav_pagina'   => esc_html__('Number Pagination', 'sakola'),
							'nav_infinite'    => esc_html__('Infinite Loop Pagination', 'sakola'),
						),
						'default'  => 'nav_default'
					),
					array(
						'id'       => 'blog_infinite_style',
						'type'     => 'select',
						'title'    => esc_html__('Blog Infinite Button Style', 'sakola'),
						'options'  => array(
							'style-1'   => esc_html__('Style 1', 'sakola'),
							'style-2'   => esc_html__('Style 2', 'sakola'),
							'style-3'    => esc_html__('Style 3', 'sakola'),
						),
						'default'  => 'style-1',
						'required' => array(
							array('loop_nav_type','=', array( 'nav_infinite' ))
						),
					),
					/* end of blog pagination type*/

					/* 4.2. Blog Padding */
					array(
						'id'       => 'blog_padding',
						'type'     => 'spacing',
						'output'   => array( '.blog-content-wrap .blog' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Blog', 'sakola' ),
						'subtitle' => __( 'Padding top and bottom for Blog Page.', 'sakola' ),
						'default'  => array(
							'padding-top'    => '60px',
							'padding-right'  => '0',
							'padding-bottom' => '60px',
							'padding-left'   => '0'
						),
					),
					/* end of blog padding */
				)
			);

			/*-----------------------------------------------------------------------------------
				4. Blog Options
					4.1. Blog Pagination Type
					4.2. Blog Padding
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Archive Options', 'sakola'),
				'fields' => array(

					array(
						'id'       => 'archive_hide_title',
						'type'     => 'button_set',
						'title'    => esc_html__('Archive Page Hide Title', 'sakola'),
						'subtitle' => '',
						'options'  => array(
							'hide_title'     => esc_html__('Hide Title', 'sakola'),
							'show_title'     => esc_html__('Show Title', 'sakola'),
						),
						'default'  => 'show_title',
					),
					/* end of blog pagination type*/

					/* 4.2. Blog Padding */
					array(
						'id'       => 'archive_padding',
						'type'     => 'spacing',
						'output'   => array( '.archive #content' ),
						'mode'     => 'padding',
						'all'      => false,
						'right'         => false,
						'left'          => false,
						'units'         => array( 'px' ),
						'units_extended'=> 'true',
						'display_units' => 'true',
						'title'    => __( 'Padding Archive', 'sakola' ),
						'subtitle' => __( 'Padding top and bottom for Archive Page.', 'sakola' ),
						'default'  => array(
							'padding-top'    => '60px',
							'padding-right'  => '0',
							'padding-bottom' => '60px',
							'padding-left'   => '0'
						),
					),
					/* end of blog padding */
				)
			);

			/*-----------------------------------------------------------------------------------*/
			/*  5. Single Post Options
					5.1. Single Post Layout
					5.2. Single Post Padding
			/*-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Single Post Options', 'sakola'),
				'fields' => sakola_single_post_ext_opt(),
			);

			/*-----------------------------------------------------------------------------------
				7. 404 Options
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-th-list',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('404 Options', 'sakola'),
				'fields' => array(

					/* 404 Background Image */
					array(
						'id' => '404_img_bg',
						'type' => 'background',
						'output' => array('body.error404'),
						'title' => __('404 Body Background', 'sakola'),
						'subtitle' => __('404 background with image, color, etc.', 'sakola'),
						'default' => '',
					),
					/* end of 404 background image */
				)
			);

			/*-----------------------------------------------------------------------------------
				8. Page Loader Options
			-----------------------------------------------------------------------------------*/
			$this->sections[] = array(
				'icon' => 'el-icon-refresh',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'title' => esc_html__('Page Loader Options', 'sakola'),
				'fields' => array(

					/* 404 Background Image */
					array(
						'id' => 'page_loader_bg',
						'type' => 'background',
						'output' => array('#preloader'),
						'title' => __('Loader Background', 'sakola'),
						'subtitle' => __('404 background with image, color, etc.', 'sakola'),
						'default' => '',
					),

					array(
						'id' 		=> 'page_loader_img',
						'type' 		=> 'media',
						'url' 		=> true,
						'compiler' 	=> 'true',
						'title'    	=> esc_html__( 'Loader Image', 'sakola' ),
						'subtitle' 	=> esc_html__( 'Diutamakan format GIF.', 'sakola' ),
					),

					array(
						'id'       => 'loader_size',
						'type'     => 'dimensions',
						'units'    => array('px'),
						'title'    => esc_html__('Loader Size.', 'sakola'),
						'subtitle' => esc_html__('Define size for loader image (px)', 'sakola'),
						'default'  => array(
							'Width'   => '40', 
							'Height'  => '40'
						),
					),
					/* end of 404 background image */
				)
			);

			/*-----------------------------------------------------------------------------------
				3. Footer Options
					3.1. Footer Style Type
					3.2. Footer Type
					3.3. Footer Container
					3.4. Footer Padding
					3.5. Boxed Footer
					3.6. Footer 2 Options
					3.7. Footer Options
			-----------------------------------------------------------------------------------*/

			$this->sections[] = array(
				'icon' => ' el-icon-photo',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Footer Builder', 'sakola'),
			);

			$this->sections[] = array(
				'icon' => 'el-icon-photo',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'footer-general-sub-id',
				'class' => 'footer-general-sub-class',
				'title' => esc_html__('General Footer', 'sakola'),
				'fields' => sakola_footer_general_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-photo',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'footer-style-sub-id',
				'class' => 'footer-style-sub-class',
				'title' => esc_html__('Footer Style', 'sakola'),
				'fields' => sakola_footer_style_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-photo',
				'icon_class' => 'icon-large',
				'subsection' => true,
				'id' => 'footer-widget-sub-id',
				'class' => 'footer-widget-sub-class',
				'title' => esc_html__('Footer Widget', 'sakola'),
				'fields' => sakola_footer_widget_ext_opt(),
			);

			$this->sections[] = array(
				'icon' => ' el-icon-credit-card',
				'icon_class' => 'icon-large',
				'title' => esc_html__('Other Options', 'sakola'),
			);

			$this->sections[] = array(
				'icon' => 'el-icon-twitter',
				'title' => esc_html__('Social Profile', 'sakola'),
				'subsection' => true,
				'fields' => sakola_social_link_ext_opt(),
			
			);			

		}

		public function setHelpTabs() {

			// Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
			$this->args['help_tabs'][] = array(
				'id' => 'redux-opts-1',
				'title' => esc_html__('Theme Information 1', 'sakola'),
				'content' => esc_html__('<p>Please go to themesawesome.com to get support</p>', 'sakola')
			);
		}


		public function setArguments() {

			$theme = wp_get_theme(); // For use with some settings. Not necessary.

			$this->args = array(
				// TYPICAL -> Change these values as you need/desire
				'opt_name' => 'sakola_framework', // This is where your data is stored in the database and also becomes your global variable name.
				'display_name' => $theme->get('Name'), // Name that appears at the top of your panel
				'display_version' => $theme->get('Version'), // Version that appears at the top of your panel
				'menu_type' => 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu' => true, // Show the sections below the admin menu item or not
				'menu_title' => esc_html__('Options', 'sakola'),
				'page' => esc_html__('Options', 'sakola'),
				// You will need to generate a Google API key to use this feature.
				// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
				'google_api_key' => 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII', // Must be defined to add google fonts to the typography module
				//'admin_bar' => false, // Show the panel pages on the admin bar
				'global_variable' => '', // Set a different name for your global variable other than the opt_name
				'dev_mode' => false, // Show the time the page took to load, etc
				'customizer' => false, // Enable basic customizer support
				// OPTIONAL -> Give you extra features
				'page_priority' => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
				'page_parent' => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
				'page_permissions' => 'manage_options', // Permissions needed to access the options panel.
				'menu_icon' => '', // Specify a custom URL to an icon
				'last_tab' => '', // Force your panel to always open to a specific tab (by id)
				'page_icon' => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
				'page_slug' => '_options', // Page slug used to denote the panel
				'save_defaults' => true, // On load save the defaults to DB before user clicks save or not
				'default_show' => true, // If true, shows the default value next to each field that is not the default value.
				'default_mark' => '', // What to print by the field's title if the value shown is default. Suggested: *
				// CAREFUL -> These options are for advanced use only
				'transient_time' => 60 * MINUTE_IN_SECONDS,
				'output' => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
				'output_tag' => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
				//'domain'              => 'redux-framework', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
				//'footer_credit'       => '', // Disable the footer credit of Redux. Please leave if you can help it.
				// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
				'database' => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
				'show_import_export' => true, // REMOVE
				'system_info' => false, // REMOVE
				'help_tabs' => array(),
				'help_sidebar' => '', // esc_html__( '', $this->args['domain'] );            
			);


		}

	}

	new SAKOLA_Framework_Config();
}

function sakola_footer_copyright() {


	$options = get_option('sakola_framework');
	$copyright_footer = $options['footer-text'];
	if(!empty($copyright_footer)) {
		echo htmlspecialchars_decode( esc_html(  $copyright_footer ));
	}
}

function sakola_removeDemoModeLink() { // Be sure to rename this function to something more unique
	if ( class_exists('ReduxFrameworkPlugin') ) {
		remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
	}
	if ( class_exists('ReduxFrameworkPlugin') ) {
		remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
	}
}
add_action('init', 'sakola_removeDemoModeLink');