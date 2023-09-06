<?php

// Adds dynamic menus
function mytheme_addmenus()
{
    register_nav_menus(
        array(
            'main_nav' => 'Main Nav',
            'footer_nav' => 'Footer Nav'
        )
    );
}
add_action('init', 'mytheme_addmenus');

// Creates and resizes thumbnails
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(400, 200, true);
    add_image_size('single-post-thumbnail', 1200, 630);
}

// Used for outputting current category slug
function get_cat_slug($cat_id)
{
    $cat_id = (int)$cat_id;
    $category = &get_category($cat_id);
    return $category->slug;
}

// Removes the Admin bar on the site, which I hate
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

// I like to add my Schema. Uncomment the code below if you use Yoast SEO plugin and want to exclude the Schema it generates
//
// function remove_yoast_json($data){
//   $data = array();
//   return $data;
// }
// add_filter('wpseo_json_ld_output', 'remove_yoast_json', 10, 1);

add_filter('rss_enclosure', '__return_empty_string');

add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
});

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wlwmanifest_link');

// Disable FLoC

function disable_floc($headers)
{
    $headers['Permissions-Policy'] = 'interest-cohort=()';
    return $headers;
}

add_filter('wp_headers', 'disable_floc');

// styles

function enqueue_theme_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
