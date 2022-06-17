<?php

add_action('wp_enqueue_scripts' , 'style_theme');
add_action('after_setup_theme' , 'my_menu');

function my_menu(){
    register_nav_menu( 'top', 'Меню в шапке' );
}

function style_theme(){
    wp_enqueue_style('style_name' , get_stylesheet_uri());
    wp_enqueue_style('css' , get_template_directory_uri() . '/assets/css/style.css');
    
}
add_theme_support( 'custom-logo' );

