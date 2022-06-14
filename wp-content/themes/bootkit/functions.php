<?php
// Setup
define('BOOTSTRAPTOPIC_DEV_MODE', false);

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/setup.php');
include get_theme_file_path('includes/custom-nav-walker.php');
include get_theme_file_path('includes/class-wp-bootstrap-navwalker.php');
include get_theme_file_path('includes/widgets.php');
include get_theme_file_path('includes/theme-customizer.php');
include get_theme_file_path('includes/customizer/social.php');
include get_theme_file_path('includes/customizer/misc.php');
include get_theme_file_path('includes/taxonomies.php');
include get_theme_file_path('includes/custom-post-types.php');

/**
 * Include Kirki сustomizer.
 */
require get_template_directory() . '/inc/сustomizer.php';

// Hooks
add_action('wp_enqueue_scripts', 'bootkit_enqueue');
add_action('after_setup_theme', 'bootkit_setup_theme');
add_action('widgets_init', 'bootkit_widgets');
add_action('customize_register', 'bootkit_customize_register');
add_action( 'after_setup_theme', 'register_navwalker' );
add_action('init', 'bootkit_taxonomies');
add_action('init', 'bootkit_register_post_type_init');

// Shortcodes
function my_filter_function1($str)
{
    $str = '<strong>' . $str . '</strong>';
    return $str; // возвращаем измененное значение!
}

add_filter('my_filter1', 'my_filter_function1');
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

function my_filter_function2($str)
{
    return 'Hello ' . $str . '!'; // возвращаем измененное значение!
}
add_filter('my_filter2', 'my_filter_function2');

function my_action_function($text)
{
    echo 'Произошло событие "my_action"!' . $text;
}
add_action('my_action', 'my_action_function');

function my_time(){
    wp_register_style('bootkit_google_fonts', 
    'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', [], time()); 
// Google fonts
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
  return 'class="page-link"';
}

function movie_custom_fields() {
    add_post_type_support( 'movie', 'custom-fields');
}
add_action('init', 'movie_custom_fields');