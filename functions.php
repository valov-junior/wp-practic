<?php


require_once('wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php');
add_action('wp_enqueue_scripts' , 'style_theme');
add_action('after_setup_theme' , 'my_menu');
add_action('my_short' , 'short_action');



function my_menu(){
    register_nav_menu( 'top', 'Меню в шапке' );
    register_nav_menu( 'footer1', 'Меню в подвале первый столбец' );
    register_nav_menu( 'footer2', 'Меню в подвале второй столбец' );
    register_nav_menu( 'footer3', 'Меню в подвале третий столбец' );
    register_nav_menu( 'footer4', 'Меню в подвале четверый столбец' );
    register_nav_menu( 'footer5', 'Меню в подвале пятый столбец' );
    add_theme_support( 'post-thumbnails', array( 'post' , 'page') );
}

function style_theme(){
    wp_enqueue_style('style_name' , get_stylesheet_uri());
    wp_enqueue_style('css' , get_template_directory_uri() . '/assets/css/style.css');
    
}
add_theme_support( 'custom-logo' );

