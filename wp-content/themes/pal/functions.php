<?php

function pal_custom_styles()
{
    $theme_url = get_template_directory_uri();

    // CSS Files
    wp_enqueue_style('font-awesome',$theme_url . '/assets/font/font-awesome/css/font-awesome.min.css',array(),'1','all');
    wp_enqueue_style('bootstrap-css',$theme_url . '/assets/css/bootstrap-5.0.2/css/bootstrap.min.css',array(),'5.0.2','all');
    wp_enqueue_style('stylesheet-css',$theme_url . '/assets/font/font_family/stylesheet.css',array(),'1','all');
    wp_enqueue_style('animations-css',$theme_url . '/assets/css/animations.css',array(),'1','all');
    wp_enqueue_style('slick-css',$theme_url . '/assets/css/slick.min.css',array(),'1','all');
    wp_enqueue_style('style-css',$theme_url . '/assets/css/style.css',array(),'1','all');
    wp_enqueue_style('media-css',$theme_url . '/assets/css/media.css',array(),'1','all');

    // JS Files
    wp_enqueue_script('jquery-js',$theme_url .'/assets/js/jquery-3.6.0/jquery.min.js',array(),'3.6.0','all');
    wp_enqueue_script('bootstrap-js',$theme_url .'/assets/js/bootstrap-5.0.2/js/bootstrap.min.js',array(),'5.0.2','all');
    wp_enqueue_script('animate-js',$theme_url .'/assets/js/css3-animate-it.js',array(),'1','all');
    wp_enqueue_script('slick-js',$theme_url .'/assets/js/slick.min.js',array(),'1','all');
    wp_enqueue_script('custom-js',$theme_url .'/assets/js/custom.js',array(),'1','all');

}
add_action('wp_enqueue_scripts','pal_custom_styles');


function pal_theme_setup() {

    // Enable dynamic title tag support
    add_theme_support( 'title-tag' );  

    //Custom logo 
    add_theme_support( 'custom-logo');

    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my_theme' ),
        'footer-menu'=>__('Footer Menu','footer_menu'),
    ) );
}
add_action( 'after_setup_theme', 'pal_theme_setup' );

//  ACF Option Page 

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
));
}




?>
