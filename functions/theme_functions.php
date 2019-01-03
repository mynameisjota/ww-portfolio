<?php 

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

// Embed Resposive Video

function setup_theme(  ) {
    // Theme setup code...
    
    // Filters the oEmbed process to run the responsive_embed() function
    add_filter('embed_oembed_html', 'responsive_embed', 10, 3);
}
add_action('after_setup_theme', 'setup_theme');
/**
 * Adds a responsive embed wrapper around oEmbed content
 * @param  string $html The oEmbed markup
 * @param  string $url  The URL being embedded
 * @param  array  $attr An array of attributes
 * @return string       Updated embed markup
 */
function responsive_embed($html, $url, $attr) {
    return $html!=='' ? '<div class="embed-container">'.$html.'</div>' : '';
}