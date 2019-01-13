<?php 

// Funções do tema

function ww_theme_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('portfolio-image', 800, 800, true);
  add_image_size( 'blog-list', 800, 650, array( 'bottom') );
	add_image_size('blog-post', 800, 600, true);
  add_image_size('port-home', 800, 400, true);
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

// Sidebar

add_action('after_setup_theme', 'admiraljota_setup');



function admiraljota_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'admiraljota' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Adicione seu widget aqui', 'admiraljota' ),
    'before_widget' => '<div class="main-w">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}

add_action( 'widgets_init', 'admiraljota_widgets_init' );
