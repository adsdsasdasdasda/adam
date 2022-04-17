<?php

/**
 * The proper way to add scripts and styles to your theme is to enqueue them in the functions.php 
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package mytheme
 */
function cd_add_theme_styles() {

	wp_enqueue_style('cd_bootstrap', get_stylesheet_directory_uri() . "/assets/admin/css/bootstrap-min.css");
	wp_enqueue_style('cd_bootstrap_icon', get_stylesheet_directory_uri() . "/assets/admin/css/bootstrap-icons.css");
	wp_enqueue_style('cd-custom-style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('cd-owl-crousal-style', get_template_directory_uri().'/assets/css/cd_owl_carosel.css');
}
function cd_add_theme_scripts() {
	wp_enqueue_script('cd_bootstrap_popper_js',get_stylesheet_directory_uri() . "/assets/admin/js/cd_bootstrap_popper.js");
	wp_enqueue_script('cd_bootstrap_5_js',get_stylesheet_directory_uri() . "/assets/admin/js/bootstrap.min.js");
	wp_enqueue_script( 'cd_script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl_crousal_js',get_stylesheet_directory_uri() .'/assets/js/owl-carosel.js',array('jquery'), false);
}
add_action( 'wp_enqueue_scripts', 'cd_add_theme_styles');
add_action( 'wp_enqueue_scripts', 'cd_add_theme_scripts');
?>