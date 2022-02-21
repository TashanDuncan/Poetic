<?php

//load stylesheets
function load_css()
{
    wp_register_style(
    'styles', 
    get_template_directory_uri() . '/css/styles.css', 
    array(), 
    false, 
    'all');

    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{

    wp_enqueue_script('jquery');
    
    wp_register_script( 
    'scripts', 
    get_template_directory_uri() . '/js/scripts.js', 
    'jquery', 
    false, 
    true);

    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//Menus

register_nav_menus( 
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
) );


// custom image sizes

add_image_size( 'front-page', 624, 500, true);
add_image_size( 'blog-large', 800, 400, true);
add_image_size( 'blog-small', 300, 200, true);