<?php

if (!function_exists('jargon_setup')) {
    // wordpress functionality
    function jargon_setup()
    {
        add_theme_support('title_tag');
        
    }

}

add_theme_support("after_setup", "jargon_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function jargon_styles()
{
    wp_enqueue_style('jargon_reboot', get_template_directory_uri() . '/assets/css/reboot.css');
    wp_enqueue_style('jargon_fonts', "https: //fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,700|Roboto:400,700&display=swap");
    wp_enqueue_style('jargon_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'jargon_styles');

// function create_post_type_movies()
// {
//     // creates label names for the post type in the dashboard the post panel and in the toolbar.
//     $labels = array(
//                'name' => __('Movies'),
//                'singular_name' => __('Movie'),
//                'add_new' => 'New Movie',
//                'add_new_item'=> 'Add New Movie',
//                'edit_item' => 'Edit Movie',

//     );
//     // creates the post functionality that you want for a full listing see the link attached above
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'has_archive' => true,
//         'rewrite' => array('slug' => 'movies'),
//          'menu_position' => 5,
//          'menu_icon' => 'dashicons-admin-media',
//          'supports'=> array('title', 'editor', 'custom-fields'
//     );

//    register_post_type('movies', $args  );
// }
// // Hooking up our function to theme setup
// add_action('init', 'create_post_type_movies');


?>
