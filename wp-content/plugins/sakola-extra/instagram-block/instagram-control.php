<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include ( plugin_dir_path(__FILE__).'config/instagram-style-setting.php' );

class sakola_instagram_block extends Widget_Base {

	public function get_name() {
		return 'sakola-instagram-block';
	}

	public function get_title() {
		return __( 'Instagram', 'sakola' );
	}

	public function get_icon() {
		return 'eicon-apps';
	}

	public function get_categories() {
		return [ 'sakola-general-category' ];
	}

	protected function _register_controls() {

		/*-----------------------------------------------------------------------------------*/
		/*  1. ELEMENT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_instagram_block_element_setting',
			[
				'label' => __( 'Element Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'instagram_pilih_layout',
			[
				'label' => __( 'Instagram Layouts', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'instagram_standard_layout',
				'options' => [
					'instagram_standard_layout' => __( 'Standard Layout', 'sakola' ),
					'instagram_carousel_layout'=> __( 'Carousel Layout', 'sakola' ),
				],
			]
		);

		/*if instagram layout standard*/
		$this->add_control(
			'instagram_standard_style',
			[
				'label' => __( 'Standard Styles', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'instagram_standard_style1',
				'options' => [
					'instagram_standard_style1' => __( 'Standard 1', 'sakola' ),
					//'instagram_standard_style2' => __( 'Grid 2', 'sakola' ),
				],
				'condition' => [
					'instagram_pilih_layout' => 'instagram_standard_layout',
				],
			]
		);

		/*if instagram layout is carousel*/
		$this->add_control(
			'instagram_carousel_style',
			[
				'label' => __( 'Carousel Styles', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'instagram_carousel_style1',
				'options' => [
					'instagram_carousel_style1' => __( 'Carousel 1', 'sakola' ),
					//'instagram_carousel_style2' => __( 'Carousel 2', 'sakola' ),
					//'instagram_carousel_style3' => __( 'Carousel 3', 'sakola' ),
				],
				'condition' => [
					'instagram_pilih_layout' => 'instagram_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of instagram block element setting
		-----------------------------------------------------------------------------------*/

		$this->start_controls_section(
			'section_sakola_instagram_block_general_control',
			[
				'label' => __( 'Instagram Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'instagram_username',
			[
				'label' => __( 'Username', 'sakola' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'description' => __( 'Insert your instagram username.', 'sakola' ),
			]
		);

		$this->add_control(
			'instagram_limit',
			[
				'label' => __( 'Photos Limit', 'sakola' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 10,
				'description' => __( 'Insert photos per page.', 'sakola' ),
			]
		);

		$this->end_controls_section();

		/*-----------------------------------------------------------------------------------*/
		/*  3. IMAGE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_instagram_block_image_setting',
			[
				'label' => __( 'Image Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'image_size',
			[
				'label' => __( 'Image Size', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'original',
				'options' => [
					'thumbnail' => __( 'Thumbnail', 'sakola' ),
					'small' => __( 'Small', 'sakola' ),
					'large' => __( 'Large', 'sakola' ),
					'original' => __( 'Original', 'sakola' ),
				]
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block image setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  6. LAYOUT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_instagram_layout_control',
			[
				'label' => __( 'Layout Setting', 'sakola' ),
			]
		);

		$gallery_columns = range( 1, 10 );
		$gallery_columns = array_combine( $gallery_columns, $gallery_columns );
		$this->add_control(
			'choose_column',
			[
				'label' => __( 'Column Desktop', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 3,
				'options' => $gallery_columns,
			]
		);

		$this->add_control(
			'tablet_choose_column',
			[
				'label' => __( 'Column Tablet', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'tablet-column-2',
				'options' => [
					'tablet-column-1' => __( '1', 'sakola' ),
					'tablet-column-2' => __( '2', 'sakola' ),
					'tablet-column-3' => __( '3', 'sakola' ),
					'tablet-column-4' => __( '4', 'sakola' ),
					'tablet-column-5' => __( '5', 'sakola' ),
				],
			]
		);

		$this->add_control(
			'mobile_choose_column',
			[
				'label' => __( 'Column Mobile', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'mobile-column-1',
				'options' => [
					'mobile-column-1' => __( '1', 'sakola' ),
					'mobile-column-2' => __( '2', 'sakola' ),
					'mobile-column-3' => __( '3', 'sakola' ),
					'mobile-column-4' => __( '4', 'sakola' ),
					'mobile-column-5' => __( '5', 'sakola' ),
				],
			]
		);

		/*=========== padding ===========*/
		$this->add_control(
			'use_padding',
			[
				'label' => __( 'Use Padding', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'extra-padding-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Add a gap for each post item with padding.', 'sakola' ),
				
			]
		);

		$this->add_responsive_control(
			'padding_size',
			[
				'label' => __( 'Padding Size', 'sakola' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 20,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .space-selector' => 'padding-right: calc( {{SIZE}}{{UNIT}}/2 ); padding-left: calc( {{SIZE}}{{UNIT}}/2 );',
				],
				'condition' => [
					'use_padding' => 'use',
				],
			]
		);

		$this->add_responsive_control(
			'image_margin_ig',
			[
				'label' => __( 'Image Margin Bottom', 'sakola' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} .instagram-item' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of instagram block layout setting
		-----------------------------------------------------------------------------------*/

		$this->start_controls_section(
			'section_sakola_carousel_options',
			[
				'label' => __( 'Carousel Setting', 'sakola' ),
				'condition' => [
					'instagram_pilih_layout' => 'instagram_carousel_layout',
				],
			]
		);

		$this->add_control(
			'image_overlay',
			[
				'label' => __( 'Overlay Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => 'rgba(0, 0, 0, 0.4)',
				'selectors' => [
					'{{WRAPPER}} .portfolio-list-carousel .portfolio-thumb-img:hover .portfolio-bg-color' => 'background-color: {{VALUE}};',
				],'condition' => [
					'instagram_pilih_layout' => 'instagram_carousel_layout',
				],				
			]
		);

		$this->add_control(
			'choose_column_car',
			[
				'label' => __( 'Column', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 3,
				'options' => [
					'auto' => __( 'auto', 'sakola' ),
					1 => __( '1', 'sakola' ),
					2 => __( '2', 'sakola' ),
					3 => __( '3', 'sakola' ),
					4 => __( '4', 'sakola' ),
					5 => __( '5', 'sakola' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'sakola' ),
			]
		);

		$this->add_control(
			'choose_column_tablet',
			[
				'label' => __( 'Column (on tablet)', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 2,
				'options' => [
					1 => __( '1', 'sakola' ),
					2 => __( '2', 'sakola' ),
					3 => __( '3', 'sakola' ),
					4 => __( '4', 'sakola' ),
					5 => __( '5', 'sakola' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'sakola' ),
			]
		);

		$this->add_control(
			'choose_column_mobile',
			[
				'label' => __( 'Column (on mobile)', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 1,
				'options' => [
					1 => __( '1', 'sakola' ),
					2 => __( '2', 'sakola' ),
					3 => __( '3', 'sakola' ),
					4 => __( '4', 'sakola' ),
					5 => __( '5', 'sakola' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'sakola' ),
			]
		);

		$this->add_control(
			'column_gap',
			[
				'label' => __( 'Carousel Column Gap', 'sakola' ),
				'description' => __( 'Space between carousel items.', 'sakola' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',			
			]
		);

		/* navigation */
		$this->add_control(
			'navigation',
			[
				'label' => __( 'Navigation', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => __( 'None', 'sakola' ),
					'arrows-dots' => __( 'Arrows and Dots', 'sakola' ),
					'arrows' => __( 'Arrows', 'sakola' ),
					'dots' => __( 'Dots', 'sakola' ),
				],
				'description' => __( 'Select your navigation type.', 'sakola' ),
			]
		);

		$this->add_control(
			'navigation_arrows_color',
			[
				'label' => __( 'Navigation Arrows Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .carousel-container .carousel-button-prev i, {{WRAPPER}} .carousel-container .carousel-button-next i' => 'color: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows-dots', 'arrows' ],
				],
			]
		);

		$this->add_control(
			'navigation_dots_color',
			[
				'label' => __( 'Navigation Dots Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .owl-dot' => 'background: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows-dots', 'dots' ],
				],
			]
		);

		/* auto opt */
		$this->add_control(
			'autoplay',
			[
				'label' => __( 'Autoplay', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-autoplay-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Make your slider auto play.', 'sakola' ),
			]
		);

		$this->add_control(
			'autoplay_ms',
			[
				'label' => __( 'Next Slide On', 'sakola' ),
				'description' => __( 'Delay between transitions (in ms). If this parameter is not specified, auto play will be disabled.', 'sakola' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '1500',
				'condition' => [
					'autoplay' => 'use',
				],			
			]
		);

		$this->add_control(
			'auto_loop',
			[
				'label' => __( 'Slides Loop', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-loop-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Make your slider loop your items.', 'sakola' ),
			]
		);

		/* misc */
		$this->add_control(
			'centered_slide',
			[
				'label' => __( 'Centered Slides', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-centered-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Allow to make centered slides.', 'sakola' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
		'sakola_instagram_block_style_setting',
			[
				'label' => __( 'Love Count Setting', 'sakola' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
		'sakola_instagram_block_style2_setting',
			[
				'label' => __( 'Comment Count Setting', 'sakola' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		/*-----------------------------------------------------------------------------------*/
		/*  VARIABLES LIST
		/*-----------------------------------------------------------------------------------*/

		/* ELEMENT SETTING VARIABLES */
		$instagram_pilih_layout 	= ! empty( $instance['instagram_pilih_layout'] ) ? $instance['instagram_pilih_layout'] : 'instagram_standard_layout';
		$instagram_standard_style 		= ! empty( $instance['instagram_standard_style'] ) ? $instance['instagram_standard_style'] : 'instagram_standard_style1';
		$instagram_carousel_style 	= ! empty( $instance['instagram_carousel_style'] ) ? $instance['instagram_carousel_style'] : 'instagram_carousel_style1';

		$username 	= ! empty( $instance['instagram_username'] ) ? $instance['instagram_username'] : '';
		$size 		= ! empty( $instance['image_size'] ) ? $instance['image_size'] : 'original';
		$limit 	= ! empty( $instance['instagram_limit'] ) ? $instance['instagram_limit'] : 10;

		$choose_column 			= ! empty( $instance['choose_column'] ) ? $instance['choose_column'] : 3;
		$tablet_choose_column 	= ! empty( $instance['tablet_choose_column'] ) ? $instance['tablet_choose_column'] : 'tablet-column-2';
		$mobile_choose_column 	= ! empty( $instance['mobile_choose_column'] ) ? $instance['mobile_choose_column'] : 'mobile-column-1';

		//$height_car 			= ! empty( $instance['height_car'] ) ? (int)$instance['height_car'] : 600;
		$choose_column_car 		= ! empty( $instance['choose_column_car'] ) ? $instance['choose_column_car'] : 3;
		$choose_column_tablet 	= ! empty( $instance['choose_column_tablet'] ) ? $instance['choose_column_tablet'] : 2;	
		$choose_column_mobile 	= ! empty( $instance['choose_column_mobile'] ) ? $instance['choose_column_mobile'] : 1;	
		$column_gap 			= ! empty( $instance['column_gap'] ) ? $instance['column_gap'] : '0';
		$navigation 			=  $instance['navigation'];
		$autoplay 				=  $instance['autoplay'];
		$autoplay_ms 			= ! empty( $instance['autoplay_ms'] ) ? (int)$instance['autoplay_ms'] : 1500;
		$auto_loop 				=  $instance['auto_loop'];
		$centered_slide			=  $instance['centered_slide'];

		$use_comment_inst 	=  $instance['use_comment_inst'];
		$use_love_inst 		=  $instance['use_love_inst'];

		if($instagram_pilih_layout == 'instagram_standard_layout') {
			if($instagram_standard_style == 'instagram_standard_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/instagram-standard1-block.php' );
			}
		}
		if($instagram_pilih_layout == 'instagram_carousel_layout') {
			if($instagram_carousel_style == 'instagram_carousel_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/instagram-carousel1-block.php' );
			}
		}

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new sakola_instagram_block() );