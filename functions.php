<?php


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