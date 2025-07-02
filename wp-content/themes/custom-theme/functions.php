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


function custom_register_testimonial_cpt() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'new_item'           => 'New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'view_item'          => 'View Testimonial',
        'all_items'          => 'All Testimonials',
        'search_items'       => 'Search Testimonials',
        'not_found'          => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in Trash'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Client Testimonials',
        'public'             => true,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'has_archive'        => false,
        'show_in_rest'       => true,
        'rewrite'            => array('slug' => 'testimonials'),
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'custom_register_testimonial_cpt');

