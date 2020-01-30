<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include ( plugin_dir_path(__FILE__).'config/post-post-setting.php' );
include ( plugin_dir_path(__FILE__).'config/post-layout-setting.php' );
include ( plugin_dir_path(__FILE__).'config/post-pagination-setting.php' );

class sakola_post_block extends Widget_Base {

	public function get_name() {
		return 'sakola-post-block';
	}

	public function get_title() {
		return __( 'Post', 'sakola' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'sakola-general-category' ];
	}

	protected function _register_controls() {
		/*-----------------------------------------------------------------------------------
			POST BLOCK INDEX
			1. ELEMENT SETTING
			2. POST SETTING
			3. LAYOUT SETTING
			4. IMAGE SETTING
			5. TITLE STYLE SETTING
				5.1. Title Style Grid Porfo
			6. META STYLE SETTING
				6.1. Category Style Setting
				6.2. Author Style Setting
				6.3. Date Style Setting
			7. EXCERPT STYLE SETTING
			8. READ MORE STYLE SETTING
			9. CAROUSEL STYLE SETTING
			10. PAGINATION STYLE SETTING
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  1. ELEMENT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_block_element_setting',
			[
				'label' => __( 'Element Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'post_pilih_layout',
			[
				'label' => __( 'Post Layouts', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post_grid_layout',
				'options' => [
					'post_grid_layout' => __( 'Post Grid', 'sakola' ),
					'post_masonry_layout'=> __( 'Post Masonry', 'sakola' ),
					//'post_carousel_layout'=> __( 'Post Carousel', 'sakola' ),
				],
			]
		);

		/*if post layout grid*/
		$this->add_control(
			'post_grid_style',
			[
				'label' => __( 'Post Grid Styles', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post_grid_style1',
				'options' => [
					'post_grid_style1' => __( 'Post Grid 1', 'sakola' ),
					'post_grid_style2' => __( 'Post Grid 2', 'sakola' ),
					'post_grid_style3' => __( 'Post Grid 3', 'sakola' ),
					'post_grid_style4' => __( 'Post Grid 4', 'sakola' ),
					'post_grid_style5' => __( 'Post Grid 5', 'sakola' ),
				],
				'condition' => [
					'post_pilih_layout' => 'post_grid_layout',
				],
			]
		);

		/*if post layout masonry*/
		$this->add_control(
			'post_masonry_style',
			[
				'label' => __( 'Post Masonry Styles', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post_masonry_style1',
				'options' => [
					'post_masonry_style1' => __( 'Post Masonry 1', 'sakola' ),
					//'post_masonry_style2' => __( 'Post Masonry 2', 'sakola' ),
				],
				'condition' => [
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		/*if post layout is carousel*/
		$this->add_control(
			'post_carousel_style',
			[
				'label' => __( 'Post Carousel Styles', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post_carousel_style1',
				'options' => [
					'post_carousel_style1' => __( 'Post Carousel 1', 'sakola' ),
					'post_carousel_style2' => __( 'Post Carousel 2', 'sakola' ),
					'post_carousel_style3' => __( 'Post Carousel 3', 'sakola' ),
				],
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block element setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  2. POST SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_block_post_setting',
			[
				'label' => __( 'Post Setting', 'sakola' ),
			]
		);

		/* go to this folder > config > post-post-setting.php*/

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block post setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  3. LAYOUT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_block_layout_setting',
			[
				'label' => __( 'Layout Setting', 'sakola' ),
			]
		);

		/* go to this folder > config > post-layout-setting.php*/

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block layout setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  4. IMAGE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_block_image_setting',
			[
				'label' => __( 'Image Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'image_overlay_bg',
			[
				'label' => __( 'Overlay Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'rgba(0, 0, 0, 0.4)',
				'selectors' => [
					'{{WRAPPER}} .main-news-5 .post-thumb .post-bg-color, {{WRAPPER}} .main-news-1 .blog-overlay' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'post_pilih_layout!' => 'post_masonry_layout',
					'post_grid_style' => ['post_grid_style3', 'post_grid_style5'],
				],
			]
		);

		$this->add_control(
			'width',
			[
				'label' => __( 'Width', 'sakola' ),
				'type' => Controls_Manager::TEXT,
				'default' => '535',
				'title' => __( 'Enter some text', 'sakola' ),
				'description' => __( 'For Default Post Style, only work when assigned as horizontal item.', 'sakola' ),
				'condition' => [
					'post_pilih_layout' => [ 'post_grid_layout', 'post_carousel_layout', 'post_masonry_layout' ],
					'post_grid_style' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4', 'post_grid_style5']
				],
			]
		);

		$this->add_control(
			'height',
			[
				'label' => __( 'Height', 'sakola' ),
				'type' => Controls_Manager::TEXT,
				'default' => '355',
				'title' => __( 'Enter some text', 'sakola' ),
				'selectors' => [
					'{{WRAPPER}} .blog-section.blog-style-2 article.blog-item, {{WRAPPER}} .main-news-1 .blog-wrap' => 'height: {{SIZE}}px;',
				],
				'condition' => [
					'post_pilih_layout' => 'post_grid_layout',
					'post_grid_style' => ['post_grid_style1', 'post_grid_style3', 'post_grid_style4', 'post_grid_style5'],
				],
			]
		);

		$this->add_control(
			'height_grid2',
			[
				'label' => __( 'Height', 'sakola' ),
				'type' => Controls_Manager::TEXT,
				'default' => '400',
				'title' => __( 'Enter some text', 'sakola' ),
				'selectors' => [
					'{{WRAPPER}} .blog-section.blog-style-2 article.blog-item' => 'height: {{SIZE}}px;',
				],
				'condition' => [
					'post_pilih_layout' => 'post_grid_layout',
					'post_grid_style' => 'post_grid_style2',
				],
			]
		);

		$this->add_control(
			'height_car',
			[
				'label' => __( 'Height', 'sakola' ),
				'type' => Controls_Manager::TEXT,
				'default' => '600',
				'title' => __( 'Enter some text', 'sakola' ),
				'description' => __( 'Crop your image height.', 'sakola' ),
				'selectors' => [
					'{{WRAPPER}} .post-thumb-img' => 'height: {{VALUE}}px;',
				],
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'post_image_crop',
			[
				'label' => __( 'Force to Crop Image', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
				'condition' => [
					'post_pilih_layout' => [ 'post_grid_layout', 'post_carousel_layout' ],
				],
			]
		);

		$this->add_responsive_control(
			'allow_float_img',
			[
				'label' => __( 'Make Image Above Text', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => __( 'Image Beside Content', 'sakola' ),
					'none' => __( 'Image Above Content', 'sakola' ),
				],
				'selectors' => [
					'{{WRAPPER}} .post-list-3 .post-thumb' => 'float: {{VALUE}};',
				],
				'condition' => [
					'post_grid_style' => 'post_grid_style4',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block image setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  4.1. SCROLL SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_block_scroll_setting',
			[
				'label' => __( 'Display Setting', 'sakola' ),
				'condition' => [
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		$this->add_control(
			'post_scroll_reveal',
			[
				'label' => __( 'Scroll Reveal Effect', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'effect-3',
				'options' => [
					'effect-1' => __( 'Effect 1', 'sakola' ),
					'effect-2' => __( 'Effect 2', 'sakola' ),
					'effect-3' => __( 'Effect 3', 'sakola' ),
					'effect-4' => __( 'Effect 4', 'sakola' ),
					'effect-5' => __( 'Effect 5', 'sakola' ),
					'effect-6' => __( 'Effect 6', 'sakola' ),
					'effect-7' => __( 'Effect 7', 'sakola' ),
					'effect-8' => __( 'Effect 8', 'sakola' ),
				],
				'description' => __( 'Animation for your post appearance when page scrolled.', 'sakola' ),
				'condition' => [
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block display setting
		-----------------------------------------------------------------------------------*/
		
		/*-----------------------------------------------------------------------------------*/
		/*  5. TITLE STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_sakola_post_block_title_style_setting',
			[
				'label' => __( 'Title Setting', 'sakola' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_title',
			[
				'label' => __( 'Use Title', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);


		$this->add_responsive_control(
			'text_align_title_center',
			[
				'label' => __( 'Title Align', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sakola' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sakola' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sakola' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .post-title, {{WRAPPER}} .blog-item .meta-wrapper' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'use_title' => 'on',
					'post_grid_style' => ['post_grid_style1', 'post_grid_style2'],
					'post_carousel_style' => 'post_carousel_style1',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_title_left',
			[
				'label' => __( 'Title Align', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sakola' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sakola' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sakola' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .post-title, {{WRAPPER}} .title' => 'text-align: {{VALUE}};',
				],
				'default' => 'left',
				'condition' => [
					'use_title' => 'on',
					'post_grid_style' => ['post_grid_style3', 'post_grid_style4', 'post_grid_style5'],
					'post_masonry_style' => ['post_masonry_style1','post_masonry_style2'],
				],
			]
		);

		/*-----------------------------------------------------------------------------------*/
		/*  5.1. Title Style Grid Porfo
		/*-----------------------------------------------------------------------------------*/
		$this->add_control(
			'typhography_title_color',
			[
				'label' => __( 'Title Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .blog-item .post-content .post-title a, {{WRAPPER}} .blog-style-2 article.blog-item .post-content-style-2 h2.post-title a, {{WRAPPER}} .post-masonry-style .loop-content h4.title a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_title' => 'on',
				],
			]
		);

		$this->add_control(
			'typhography_title_hov_color',
			[
				'label' => __( 'Title Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#666666',
				'selectors' => [
					'{{WRAPPER}} .blog-item .post-content .post-title a:hover, {{WRAPPER}} .post-masonry-style .loop-content h4.title a:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_title' => 'on',
					'post_grid_style' => ['post_grid_style1', 'post_grid_style4'],
				],
			]
		);

		/*-----------------------------------------------------------------------------------*/
		/*  5.2. Title Style Grid Full Background
		/*-----------------------------------------------------------------------------------*/
		$this->add_control(
			'typhography_title_hov_color_fullbg',
			[
				'label' => __( 'Title Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .blog-style-2 article.blog-item:hover .post-content-style-2 h2.post-title a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_title' => 'on',
					'post_grid_style' => 'post_grid_style2',
				],
			]
		);

		/*-----------------------------------------------------------------------------------*/
		/*  5.3. Title Style Carousel
		/*-----------------------------------------------------------------------------------*/
		$this->add_control(
			'typhography_title_color_carousel',
			[
				'label' => __( 'Title Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .post-content h2.post-title a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_title' => 'on',
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_title',
				'label' => __( 'Title Font Setting', 'sakola' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .blog-item .post-content .post-title, {{WRAPPER}} .blog-style-2 article.blog-item .post-content-style-2 h2.post-title, {{WRAPPER}} .post-masonry-style .loop-content h4.title',
				'condition' => [
					'use_title' => 'on',
				],
			]
		);

		$this->add_responsive_control(
			'title_min_height',
			[
				'label' => __( 'Title Minimum Height', 'sakola' ),
				'description' => __( 'Use in case you want to make all title have same height.', 'sakola' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .post-title, {{WRAPPER}} .blog-style-2 article.blog-item .post-content-style-2 h2.post-title, {{WRAPPER}} .title, {{WRAPPER}} .post-masonry-style .loop-content h4.title' => 'min-height: {{VALUE}}px',
				],
				'condition' => [
					'use_title' => 'on',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block title style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  6. META STYLE SETTING
		/*-----------------------------------------------------------------------------------*/

		/*====== 6.1. Category Style Setting =======*/
		$this->start_controls_section(
		'section_sakola_post_block_category_style_setting',
			[
				'label' => __( 'Category Setting', 'sakola' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_category',
			[
				'label' => __( 'Use Category Text', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->add_responsive_control(
			'text_align_category',
			[
				'label' => __( 'Category Align', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sakola' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sakola' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sakola' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .blog-item .meta-wrapper, {{WRAPPER}} .date, {{WRAPPER}} .top-info, {{WRAPPER}} .category-name, {{WRAPPER}} .standard-post-categories a' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'use_category' => 'on',
					'post_grid_style!' => ['post_grid_style1', 'post_grid_style2', 'post_grid_style5'],
				],
			]
		);

		$this->add_control(
			'typhography_category_bord_color',
			[
				'label' => __( 'Category Border Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .post-masonry-style .loop-content .category:after' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		$this->add_control(
			'typhography_category_color',
			[
				'label' => __( 'Category Text Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .standard-post-categories a, {{WRAPPER}} .post-masonry-style .loop-content .category a' => 'color: {{VALUE}};',
					'{{WRAPPER}} .blog-item .meta-wrapper span.standard-post-categories:before' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_pilih_layout!' => 'post_carousel_layout',
					'post_grid_style!' => 'post_grid_style5',
				],
			]
		);

		$this->add_control(
			'typhography_category_color_carousel',
			[
				'label' => __( 'Category Text Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .category-name:before, {{WRAPPER}} .post-list-carousel .category-name:after' => 'color: {{VALUE}};',
					'{{WRAPPER}} .post-list-carousel .category-name a, {{WRAPPER}} .category-main-news-1 a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_pilih_layout' => ['post_grid_layout', 'post_carousel_layout'],
					'post_grid_style' => 'post_grid_style5',
				],
			]
		);

		$this->add_control(
			'typhography_category_bg_main1',
			[
				'label' => __( 'Category Background Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#61c436',
				'selectors' => [
					'{{WRAPPER}} .category-main-news-1 .post-categories li' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_grid_style' => 'post_grid_style5',
				],
			]
		);

		$this->add_control(
			'category_link_hov_color',
			[
				'label' => __( 'Category Link Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .standard-post-categories a:hover, {{WRAPPER}} .post-masonry-style .loop-content .category:hover a' => 'color: {{VALUE}};',
					'{{WRAPPER}} .post-masonry-style .loop-content .category:hover:after' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_grid_style!' => ['post_grid_style2', 'post_grid_style5'],
				],
			]
		);
		$this->add_control(
			'category_link_hov_color_grid2',
			[
				'label' => __( 'Category Link Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .blog-item:hover .standard-post-categories a, {{WRAPPER}} .blog-style-2 .blog-item:hover .standard-post-categories:before, {{WRAPPER}} .category-main-news-1:hover a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_grid_style' => ['post_grid_style2', 'post_grid_style5'],
				],
			]
		);

		$this->add_control(
			'typhography_category_bg_hov_main1',
			[
				'label' => __( 'Category Background Hover', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#61c436',
				'selectors' => [
					'{{WRAPPER}} .category-main-news-1 .post-categories li:hover' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'on',
					'post_grid_style' => 'post_grid_style5',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_category',
				'label' => __( 'Category Font Setting', 'sakola' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_4,
				'selector' => '{{WRAPPER}} .standard-post-categories a, {{WRAPPER}} .post-masonry-style .loop-content .category a, {{WRAPPER}} .category-main-news-1 a',
				'condition' => [
					'use_category' => 'on',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block category style setting
		-----------------------------------------------------------------------------------*/

		/*====== 6.2. Author Style Setting =======*/
		$this->start_controls_section(
		'section_sakola_post_block_author_style_setting',
			[
				'label' => __( 'Author Setting', 'sakola' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'post_pilih_layout!' => 'post_masonry_layout',
				],
			]
		);

		$this->add_control(
			'use_author',
			[
				'label' => __( 'Use Author Text', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->add_control(
			'typhography_author_color',
			[
				'label' => __( 'Author Text Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .author span, {{WRAPPER}} .author a, {{WRAPPER}} .blog-item .meta-wrapper span.author:after, {{WRAPPER}} .main-news-5 .post-content .post-author-name' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_author' => 'on',
					'post_pilih_layout!' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'author_link_hov_color',
			[
				'label' => __( 'Author Link Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .author a:hover, {{WRAPPER}} .main-news-5 .post-content .post-author-name:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_author' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);
		$this->add_control(
			'author_link_hov_color_grid2',
			[
				'label' => __( 'Author Link Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .blog-item:hover .author a, {{WRAPPER}} .blog-item:hover .author span, {{WRAPPER}} .main-news-5 .post-content .post-author-name' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_author' => 'on',
					'post_grid_style' => 'post_grid_style2',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_author',
				'label' => __( 'Author Font Setting', 'sakola' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_4,
				'selector' => '{{WRAPPER}} .author a, {{WRAPPER}} .author span, {{WRAPPER}} .main-news-5 .post-content .post-author-name',
				'condition' => [
					'use_author' => 'on',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block author style setting
		-----------------------------------------------------------------------------------*/

		/*====== 6.3. Date Style Setting =======*/
		$this->start_controls_section(
		'section_sakola_post_block_date_style_setting',
			[
				'label' => __( 'Date Setting', 'sakola' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_date',
			[
				'label' => __( 'Use Date Text', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->add_control(
			'typhography_date_color',
			[
				'label' => __( 'Date Text Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .date span, {{WRAPPER}} .date a, {{WRAPPER}} .blog-item .meta-wrapper span.date:before, {{WRAPPER}} .post-masonry-style .loop-content .date, {{WRAPPER}} .main-news-5 .post-content .post-date' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_date' => 'on',
					'post_pilih_layout!' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'date_link_hov_color',
			[
				'label' => __( 'Date Link Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .date a:hover,  {{WRAPPER}} .date a:hover span, {{WRAPPER}} .post-masonry-style .loop-content .date:hover, {{WRAPPER}} .main-news-5 .post-content .post-date:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_date' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);
		$this->add_control(
			'date_link_hov_color_grid2',
			[
				'label' => __( 'Date Link Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .blog-item:hover .date a, {{WRAPPER}} .blog-item:hover .date span, {{WRAPPER}} .blog-item:hover span.date:before' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_date' => 'on',
					'post_grid_style' => 'post_grid_style2',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_date',
				'label' => __( 'Date Font Setting', 'sakola' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_4,
				'selector' => '{{WRAPPER}} .date span, {{WRAPPER}} .date a, {{WRAPPER}} .post-masonry-style .loop-content .date, {{WRAPPER}} .main-news-5 .post-content .post-date',
				'condition' => [
					'use_date' => 'on',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block date style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  7. EXCERPT STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_sakola_post_block_excerpt_style_setting',
			[
				'label' => __( 'Excerpt Setting', 'sakola' ),
				'condition' => [
					'post_pilih_layout!' => 'post_carousel_layout',
					'post_grid_style!' => 'post_grid_style2',
				],
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		/*===========Typhography Excerpt=============*/
		$this->add_control(
			'use_excerpt',
			[
				'label' => __( 'Use Excerpt Block', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
				'condition' => [
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_excerpt',
			[
				'label' => __( 'Excerpt Align', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sakola' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sakola' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sakola' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .blog-item .post-text, {{WRAPPER}} .grid .post-text' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'use_excerpt' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_control(
			'typhography_excerpt_color',
			[
				'label' => __( 'Excerpt Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => 'rgba(0,0,0,0.8)',
				'selectors' => [
					'{{WRAPPER}} .post-text p' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_excerpt' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_excerpt',
				'label' => __( 'Excerpt Font Setting', 'sakola' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .post-text p',
				'condition' => [
					'use_excerpt' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_control(
			'excerpt_word',
			[
				'label' => __( 'Word Count for Post', 'sakola' ),
				'description' => __( 'Margin right for each item inside this block.', 'sakola' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '30',
				'condition' => [
					'use_excerpt' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],	
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block excerpt style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  8. READ MORE STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_sakola_post_block_readmore_style_setting',
			[
				'label' => __( 'Read More Setting', 'sakola' ),
				'condition' => [
					'post_grid_style!' => 'post_grid_style2',
				],
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		//==========Read More==========//
		$this->add_control(
			'use_read_more',
			[
				'label' => __( 'Use Read More', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
				'condition' => [
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_more',
			[
				'label' => __( 'Read More Align', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sakola' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sakola' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sakola' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .post-content, {{WRAPPER}} .more-button' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'use_read_more' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_control(
			'typhography_read_more_color',
			[
				'label' => __( 'Read More Title Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} a.read-more, {{WRAPPER}} .main-news-5 .post-content .read-more-button a' => 'color: {{VALUE}}; border: 1px solid {{VALUE}}',
					'{{WRAPPER}} .main-news-5 .post-content .read-more-button a' => 'border: 0; border-bottom: 2px solid {{VALUE}}',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_grid_style!' => 'post_grid_style2',
					'post_pilih_layout!' => 'post_masonry_layout',
				],
			]
		);
		$this->add_control(
			'typhography_read_more_color_masonry',
			[
				'label' => __( 'Read More Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .post-masonry-style a.more' => 'color: {{VALUE}}',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		$this->add_control(
			'typhography_read_more_bg_color_carousel',
			[
				'label' => __( 'Read More Background Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .read-more-button a' => 'background-color: {{VALUE}}; border: 2px solid {{VALUE}}',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);
		$this->add_control(
			'typhography_read_more_bg_color_masonry',
			[
				'label' => __( 'Read More Background Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .post-masonry-style a.more' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		$this->add_control(
			'read_more_title_hov_color',
			[
				'label' => __( 'Read More Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} a.read-more:hover, {{WRAPPER}} .main-news-5 .post-content .read-more-button a:hover, {{WRAPPER}} .post-masonry-style a.more:hover' => 'color: {{VALUE}};',
					'{{WRAPPER}} .main-news-5 .post-content .read-more-button a:hover' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_control(
			'typhography_read_more_bg_hover_masonry',
			[
				'label' => __( 'Read More Background Hover', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .post-masonry-style a.more:hover' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_pilih_layout' => 'post_masonry_layout',
				],
			]
		);

		$this->add_control(
			'typhography_read_more_bg_color_grid',
			[
				'label' => __( 'Read More Hover Background Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} a.read-more:hover, {{WRAPPER}} .post-masonry-style a.more:hover' => 'background-color: {{VALUE}}; border: 1px solid {{VALUE}}',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_grid_style' => 'post_grid_style1',
				],
			]
		);

		$this->add_control(
			'read_more_title_hov_color_carousel',
			[
				'label' => __( 'Read More Hover Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .read-more-button a:hover, {{WRAPPER}} .post-masonry-style a.more:hover' => 'color: {{VALUE}}; border: 2px solid {{VALUE}};',
				],
				'condition' => [
					'use_read_more' => 'on',
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_read_more',
				'label' => __( 'Read More Font Setting', 'sakola' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} a.read-more, {{WRAPPER}} .post-masonry-style a.more, {{WRAPPER}} .main-news-5 .post-content .read-more-button a',
				'condition' => [
					'use_read_more' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->add_control(
			'read_more_text',
			[
				'label' => __( 'Read More Text', 'sakola' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Continue Reading',
				'title' => __( 'Enter some text', 'sakola' ),
				'description' => __( 'Change the text with yours.', 'sakola' ),
				'condition' => [
					'use_read_more' => 'on',
					'post_grid_style!' => 'post_grid_style2',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block excerpt style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  9. CAROUSEL STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_block_carousel_options',
			[
				'label' => __( 'Carousel Setting', 'sakola' ),
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
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
					'{{WRAPPER}} .post-list-carousel .post-thumb-img:hover .post-bg-color' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'post_vertical_position',
			[
				'label' => __( 'Vertical Position', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'default' => 'middle',
				'options' => [
					'top' => [
						'title' => __( 'Top', 'sakola' ),
						'icon' => 'eicon-v-align-top',
					],
					'middle' => [
						'title' => __( 'Middle', 'sakola' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => __( 'Bottom', 'sakola' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'prefix_class' => 'elementor--v-position-',
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_carousel',
			[
				'label' => __( 'Carousel Content Align', 'sakola' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sakola' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sakola' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sakola' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .post-list-carousel .post-content' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'choose_column',
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
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
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
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'column_gap',
			[
				'label' => __( 'Carousel Column Gap', 'sakola' ),
				'description' => __( 'Space between carousel items.', 'sakola' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],		
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
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->add_control(
			'navigation_arrows_color',
			[
				'label' => __( 'Navigation Arrows Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .swiper-button-next:before, {{WRAPPER}} .swiper-button-prev:before' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .swiper-pagination-bullet-active' => 'background: {{VALUE}};',
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
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
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
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		/* misc */
		$this->add_control(
			'keyboard_nav',
			[
				'label' => __( 'Keyboard Control', 'sakola' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-keyboard-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Allow to navigate the slide using keyboard arrows.', 'sakola' ),
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

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
				'condition' => [
					'post_pilih_layout' => 'post_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block carousel style setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  10. PAGINATION STYLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_sakola_post_pagination_style_setting',
			[
				'label' => __( 'Pagination Setting', 'sakola' ),
			]
		);

		

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of post block pagination style setting
		-----------------------------------------------------------------------------------*/

	}

	protected function render() {

		$instance = $this->get_settings();

		/*-----------------------------------------------------------------------------------*/
		/*  VARIABLES LIST
		/*-----------------------------------------------------------------------------------*/

		/* ELEMENT SETTING VARIABLES */
		$post_pilih_layout 		= ! empty( $instance['post_pilih_layout'] ) ? $instance['post_pilih_layout'] : 'post_grid_layout';
		$post_grid_style 		= ! empty( $instance['post_grid_style'] ) ? $instance['post_grid_style'] : 'post_grid_style1';
		$post_masonry_style 	= ! empty( $instance['post_masonry_style'] ) ? $instance['post_masonry_style'] : 'post_masonry_style1';
		$post_carousel_style 	= ! empty( $instance['post_carousel_style'] ) ? $instance['post_carousel_style'] : 'post_carousel_style1';

		/* POST SETTING VARIBALES */
		$category 			= ! empty( $instance['category'] ) ? $instance['category'] : '';
		$offset 			= ! empty( $instance['offset'] ) ? (int)$instance['offset'] : '';
		$post_per_page 		= ! empty( $instance['posts_per_page'] ) ? (int)$instance['posts_per_page'] : 6;
		$orderby 			= ! empty( $instance['orderby'] ) ? $instance['orderby'] : 'date';
		$post_style_layout 	= ! empty( $instance['post_style_layout'] ) ? $instance['post_style_layout'] : 'default';
		
		/* LAYOUT SETTING */
		$main_news_5_layout 			= ! empty( $instance['main_news_5_layout'] ) ? $instance['main_news_5_layout'] : 'standard';
		$horizontal_use 				= $instance['horizontal_use'];
		$horizontal_use_left_def 		= $instance['horizontal_use_left_def'];

		$horizontal_col_select 			= ! empty( $instance['horizontal_col_select'] ) ? $instance['horizontal_col_select'] : 'column-1';
		$horizontal_col_select_tablet 	= ! empty( $instance['horizontal_col_select_tablet'] ) ? $instance['horizontal_col_select_tablet'] : 'tablet-column-1';
		$horizontal_col_select_mobile 	= ! empty( $instance['horizontal_col_select_mobile'] ) ? $instance['horizontal_col_select_mobile'] : 'mobile-column-1';

		$horizontal_col_select_col2 		= ! empty( $instance['horizontal_col_select_col2'] ) ? $instance['horizontal_col_select_col2'] : 'column-2';
		$horizontal_col_select_col2_tablet 	= ! empty( $instance['horizontal_col_select_col2_tablet'] ) ? $instance['horizontal_col_select_col2_tablet'] : 'tablet-column-2';
		$horizontal_col_select_col2_mobile 	= ! empty( $instance['horizontal_col_select_col2_mobile'] ) ? $instance['horizontal_col_select_col2_mobile'] : 'mobile-column-1';

		$horizontal_col_select2 			= ! empty( $instance['horizontal_col_select2'] ) ? $instance['horizontal_col_select2'] : 'column-3';
		$horizontal_col_select2_tablet 		= ! empty( $instance['horizontal_col_select2_tablet'] ) ? $instance['horizontal_col_select2_tablet'] : 'tablet0-column-2';
		$horizontal_col_select2_mobile 		= ! empty( $instance['horizontal_col_select2_mobile'] ) ? $instance['horizontal_col_select2_mobile'] : 'mobile-column-1';

		/* IMAGE SETTING VARIBALES */
		$post_image_crop 	= $instance['post_image_crop'];
		$width 				= ! empty( $instance['width'] ) ? (int)$instance['width'] : 535;
		$height 			= ! empty( $instance['height'] ) ? (int)$instance['height'] : 355;
		$post_scroll_reveal = ! empty( $instance['post_scroll_reveal'] ) ? $instance['post_scroll_reveal'] : 'effect-3';

		// Style Setting
		$use_title 			= $instance['use_title'];
		$use_category 		= $instance['use_category'];
		$use_author 		= $instance['use_author'];
		$use_date	 		= $instance['use_date'];
		$use_excerpt 		= $instance['use_excerpt'];
		$use_read_more 		= $instance['use_read_more'];
		$read_more_text 	= ! empty( $instance['read_more_text'] ) ? $instance['read_more_text'] : 'Continue Reading';
		$excerpt_word 		= ! empty( $instance['excerpt_word'] ) ? (int)$instance['excerpt_word'] : 30;

		/* carousel setting */
		$height_car 			= ! empty( $instance['height_car'] ) ? (int)$instance['height_car'] : 600;
		$choose_column 			= ! empty( $instance['choose_column'] ) ? $instance['choose_column'] : 3;
		$choose_column_mobile 	= ! empty( $instance['choose_column_mobile'] ) ? $instance['choose_column_mobile'] : 1;	
		$column_gap 			= ! empty( $instance['column_gap'] ) ? $instance['column_gap'] : '0';
		$navigation 			=  $instance['navigation'];
		$autoplay 				=  $instance['autoplay'];
		$autoplay_ms 			= ! empty( $instance['autoplay_ms'] ) ? (int)$instance['autoplay_ms'] : 1500;
		$auto_loop 				=  $instance['auto_loop'];
		$keyboard_nav			=  $instance['keyboard_nav'];
		$centered_slide			=  $instance['centered_slide'];

		/* PAGINATION SETTING */
		$post_pagination_type 	= ! empty( $instance['post_pagination_type'] ) ? $instance['post_pagination_type'] : 'post_pagination_none';

		// Pagination Prev/Next
		$pagination_next_text 	= ! empty( $instance['pagination_next_text'] ) ? $instance['pagination_next_text'] : 'NEWER POST';
		$pagination_prev_text 	= ! empty( $instance['pagination_prev_text'] ) ? $instance['pagination_prev_text'] : 'OLDER POST';

		// Pagination Infinte
		$loop_infinite_class 		= ! empty( $instance['loop_infinite_class'] ) ? $instance['loop_infinite_class'] : 'loop-infinte-post-list';
		$loop_infinite_text 		= ! empty( $instance['loop_infinite_text'] ) ? $instance['loop_infinite_text'] : 'Load More';
		//$loop_infinite_finish_text 	= ! empty( $instance['loop_infinite_finish_text'] ) ? $instance['loop_infinite_finish_text'] : 'There is no more';
		$loop_infinite_load_img 	= ! empty( $instance['loop_infinite_load_img'] ) ? $instance['loop_infinite_load_img'] : '';
		$load_style 				= ! empty( $instance['load_style'] ) ? $instance['load_style'] : 'style-1';
		$use_shadow_pagination 		=  $instance['use_shadow_pagination'];


		/* end of variables list */


		/*-----------------------------------------------------------------------------------*/
		/*  THE CONDITIONAL AREA
		/*-----------------------------------------------------------------------------------*/

		if($post_pilih_layout == 'post_grid_layout') {
			if($post_grid_style == 'post_grid_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/post-list-porfo-style.php' );
			}
			elseif($post_grid_style == 'post_grid_style2') {
				include ( plugin_dir_path(__FILE__).'tpl/post-fullbackground-style.php' );
			}
			elseif($post_grid_style == 'post_grid_style3') {
				include ( plugin_dir_path(__FILE__).'tpl/post-grid3-style.php' );
			}
			elseif($post_grid_style == 'post_grid_style4') {
				include ( plugin_dir_path(__FILE__).'tpl/post-grid4-style.php' );
			}
			elseif($post_grid_style == 'post_grid_style5') {
				include ( plugin_dir_path(__FILE__).'tpl/post-grid5-style.php' );
			}
		}
		elseif($post_pilih_layout == 'post_masonry_layout') {
			if($post_masonry_style == 'post_masonry_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/post-masonry1-style.php' );
			}
			elseif($post_masonry_style == 'post_masonry_style2') {
				include ( plugin_dir_path(__FILE__).'tpl/post-masonry2-style.php' );
			}
		}
		elseif($post_pilih_layout == 'post_carousel_layout') {
			if($post_carousel_style == 'post_carousel_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/post-carousel1-style.php' );
			}
			elseif($post_carousel_style == 'post_carousel_style2') {
				include ( plugin_dir_path(__FILE__).'tpl/post-carousel2-style.php' );
			}
		}

		/*-----------------------------------------------------------------------------------
		  end of conditional end of post block, Alhamdulillah.
		-----------------------------------------------------------------------------------*/

		?>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}

Plugin::instance()->widgets_manager->register_widget_type( new sakola_post_block() );