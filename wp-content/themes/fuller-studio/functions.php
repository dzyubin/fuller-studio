<?php
/**
 * Created by PhpStorm.
 * User: vdzyubin
 * Date: 8/21/2018
 * Time: 10:52 PM
 */

/*register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'fullerstudio' ),
    'social'  => __( 'Social Links Menu', 'fullerstudio' ),
) );*/

add_action('init', 'fuller_enqueue_styles');

function fuller_enqueue_styles() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
//    wp_enqueue_style( 'style-normalize', get_template_directory_uri() ."/assets/css/normalize.css" );
}