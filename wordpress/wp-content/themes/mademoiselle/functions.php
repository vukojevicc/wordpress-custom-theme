<?php
// ukljucivanje js i css fajlova
function mademoiselle_style(){
    wp_enqueue_style('owl-carousel-style', get_template_directory_uri().'/frontend/css/owl.carousel.css', array(), '2.3.4');
    wp_enqueue_style('theme', get_template_directory_uri().'/frontend/css/theme.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'mademoiselle_style');

function mademoiselle_scripts(){
    wp_enqueue_script('jquery', get_template_directory_uri().'/frontend/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/frontend/js/bootstrap.bundle.min.js', array(), '4.3.1', true);
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array(), '1.5', true);
    wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri().'/frontend/js/owl.carousel.min.js', array(), '2.3.4', true);
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
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mademoiselle_support');

function mademoiselle_menus(){
    register_nav_menus(array(
        'main-menu'=>'Main Menu',
        'social-menu'=>'Social Menu'
    ));
}
add_action('init', 'mademoiselle_menus');

function mademoiselle_create_post_type(){
    register_post_type('our_services', array(
        'labels'=>array(
            'name'=>'Services',
            'singular_name'=>'Service',
            'plural_name'=>'Services',
            'all_items'=>'All Services',
            'add_new'=>'Add New Service',
            'add_new_item'=>'Add New Service Item',
            'new_item'=> 'New Service',
            'edit'=>'Edit',
            'edit_item'=>'Edit Service Item',
            'view'=>'View Service',
            'view_item'=>'View Service Item',
            'featured_image'=>'Feature image for this service'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => '17',
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
    register_post_type('our_team', array(
        'labels'=>array(
            'name'=>'Team Members',
            'singular_name'=>'Team Member',
            'plural_name'=>'Team Members',
            'all_items'=>'All Team Members',
            'add_new'=>'Add New Team Member',
            'add_new_item'=>'Add New Team Member',
            'new_item'=> 'New Team Member',
            'edit'=>'Edit',
            'edit_item'=>'Edit Team Member Item',
            'view'=>'View Team Member',
            'view_item'=>'View Team Member Item',
            'featured_image'=>'Feature image for this Team Member'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => '17',
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )));
}
add_action('init', 'mademoiselle_create_post_type');