<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class sakola_contact_form extends Widget_Base {

	public function get_name() {
		return 'sakola-contact-form';
	}

	public function get_title() {
		return __( 'Form Builder', 'sakola' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'sakola-general-category' ];
	}

	protected function _register_controls() {

		/*===========FORM GENERAL SETTING=============*/

		$this->start_controls_section(
			'section_sakola_contact_form_general_control',
			[
				'label' => __( 'Form Setting', 'sakola' ),
			]
		);

		$this->add_control(
			'form_select',
			[
				'label' => __( 'Contact Form', 'sakola' ),
				'type' => Controls_Manager::SELECT,
				'default' => [],
				'options' => sakola_contactform_temp(),
				'description' => __( 'List of your available contact form template.', 'sakola' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		include ( plugin_dir_path(__FILE__).'tpl/contact-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new sakola_contact_form() );