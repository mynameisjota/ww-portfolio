<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/scss/main.css', array(), '1.1', 'all');

    //javaScript

    wp_enqueue_script('jquery-min', get_template_directory_uri(). '/js/jquery.js', array('jquery'), '1.0', true);
    wp_enqueue_script('app-js', get_template_directory_uri(). '/js/app.js', array('jquery'), '1.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Funções do tema

function ww_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('portfolio-image', 1020, 400, true);
  add_image_size( 'blog-list', 740, 350, array( 'bottom') );
	add_image_size('blog-post', 1200, 630, true);
	add_theme_support( 'custom-logo' );
}

add_action('after_setup_theme', 'ww_theme_setup');

// Menu

function register_my_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );