<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/scss/main.css', array(), '1.1', 'all');

    //javaScript

    wp_enqueue_script('jquery-min', get_template_directory_uri(). '/js/jquery.js', array('jquery'), '1.0', true);
    wp_enqueue_script('app-js', get_template_directory_uri(). '/js/app.js', array('jquery'), '1.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );