<?php
// Enqueue Styles and Scripts
function custom_theme_enqueue_assets() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

// Theme Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

// Register Custom Post Type: Testimonials
function custom_theme_cpt() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote'
    ));
}
add_action('init', 'custom_theme_cpt');

// Register navigation menu
register_nav_menus(array(
  'main-menu' => 'Main Menu'
));

// Enable custom logo
add_theme_support('custom-logo');

function custom_enqueue_assets() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_assets');

