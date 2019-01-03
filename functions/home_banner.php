<?php

function admiraljota_customize_register($wp_customize){

	// Banner Section

	$wp_customize->add_section('banner', array(

		'title'	=> __('Banner', 'admiraljota'),
		'description'	=> sprintf(__('Opções para o banner da home', 'admiraljota')),
		'priority'	=> 130
	));

	// Titulo do banner
	$wp_customize->add_setting('banner_heading', array(
		'default' => _x('Aqui vai a o texto por cima da imagem da home', 'admiraljota'),
		'type' => 'theme_mod'
	));

	// configurações do titulo

	$wp_customize->add_control('banner_heading', array(
		'label'	=> __('BANNER TITLE', 'admiraljota'),
		'section'	=> 'banner',
		'priority'	=> 20
	));


	// Configurações da imagem do Banner

	$wp_customize->add_setting('banner_image', array(
		'default'		=> get_bloginfo('template_directory').'/img/banner.jpg',
		'type'			=> 'theme_mod'
	));

	// Controle da imagem

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label'	=> __('BANNER HOME', 'admiraljota'),
		'section'	=> 'banner',
		'settings'	=> 'banner_image'
	)));

}



add_action('customize_register', 'admiraljota_customize_register');