<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('jssor-style', get_stylesheet_directory_uri() . '/assets/css/jssor.css');
	wp_enqueue_script('jssor', get_stylesheet_directory_uri() . '/assets/js/jssor.slider-27.4.0.min.js', array(), false, false);

}

add_filter('edit_post_link', 'fs_edit_post_link');
function fs_edit_post_link($link) {
    return '<a class="post-edit-link" href="' . "/posts-form/?post_to_update_id=" . get_the_ID() . '">Update</a>';
}
