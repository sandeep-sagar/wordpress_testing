<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class sakola_text extends Widget_Base {

	public function get_name() {
		return 'sakola-text';
	}

	public function get_title() {
		return __( 'Text', 'sakola' );
	}

	public function get_icon() {
		return 'eicon-align-left';
	}

	public function get_categories() {
		return [ 'sakola-general-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'sakola_text_control',
			[
				'label' => __( 'Text Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'custom_text',
			[
				'label' => __( 'Your Custom Text', 'sakola' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => '',
				'description' => __( 'HTML Allowed if p not activate.', 'sakola' ),
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_text_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .sakola-text, {{WRAPPER}} .sakola-text p',
			]
		);

		$this->add_control(
			'color_text_block',
			[
				'label' => __( 'Text Color', 'sakola' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sakola-text, {{WRAPPER}} .sakola-text p' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->add_responsive_control(
			'text_block_align',
			[
				'label' => __( 'Text Alignment', 'sakola' ),
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
					'justify' => [
						'title' => __( 'Justified', 'sakola' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		$custom_text 	= ! empty( $instance['custom_text'] ) ? $instance['custom_text'] : '';

		include ( plugin_dir_path(__FILE__).'tpl/text-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new sakola_text() );