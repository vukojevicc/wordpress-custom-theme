<?php
// ukljucivanje js i css fajlova
function mademoiselle_style(){
    wp_enqueue_style('owl carousel style', get_template_directory_uri().'/frontend/css/owl.carousel.css', array(), '2.3.4');
    wp_enqueue_style('theme', get_template_directory_uri().'/frontend/css/theme.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'mademoiselle_style');

function mademoiselle_scripts(){
    wp_enqueue_script('jquery', get_template_directory_uri().'/frontend/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '4.3.1', true);
    wp_enqueue_script( 'font awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array(), '1.5', true);
    wp_enqueue_script( 'owl carousel script', get_template_directory_uri().'/frontend/js/owl.carousel.min.js', array(), '2.3.4', true);
    wp_enqueue_script( 'main', get_template_directory_uri().'/frontend/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mademoiselle_scripts');

function mademoiselle_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 25,
        'width'=> 196,
        'flex-height' => false,
        'flex-width' => false
    ));
}
add_action('after_setup_theme', 'mademoiselle_support');