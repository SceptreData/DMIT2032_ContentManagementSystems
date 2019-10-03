<?php
if (!function_exists('setup_zoot')){
    // Add theme support from wordpress
    add_theme_support('title_tag');
}
add_theme_support('after_setup_theme', 'setup_zoot');

// function zoot_styles(){
//     get_template
// }

// echo get_template_directory();
// echo get_stylesheet_uri();

function zoot_styles(){
    wp_enqueue_style('zoot_reset', get_template_directory_uri().'/assets/css/reset.css');
    wp_enqueue_style('zoot_fonts', 'https://fonts.googleapis.com/css?family=PT+Serif&display=swap');
    wp_enqueue_style('zoot_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'zoot_styles');

echo get_template_directory_uri();
echo get_stylesheet_uri();

?>