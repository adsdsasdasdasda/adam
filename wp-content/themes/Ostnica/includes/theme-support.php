<?php
/**
* The basic theme functionality
*
* @link https://developer.wordpress.org/themes/functionality/
*/
if (!function_exists('cd_theme_setup')) :
	function cd_theme_setup(){
		//enable support for post thumbnail and featured image
		add_theme_support('post-thumbnails');
		//for default post and comments rss feed
		add_theme_support('automatic-feed-links');
		
		//Woocommerce theme support

		// add_theme_support('woocommerce');
		//enable support for gallery, sidebar,quote, image, video
		add_theme_support('post-formats',array('aside','gallery','quote','image','video'));
		//for title
		add_theme_support('title-tag');
		//for custom site logo
		add_theme_support('custom-logo', array(
			'flex-height' => true,
			'flex-width' => true,
			'header-text'=> array('site-title'),
			'unlink-homepage-logo' => true,
		) );
		
		/*add_theme_support( 'custom-logo', array(
    		'height' => 480,
    		'width'  => 720,
		) );
*/
		add_theme_support('widgets');
		register_nav_menus( array(
			'primary' => __('Primary Menu'),
			'secondary' => __('Secondary Menu')
		));
		add_image_size('featured_preview', 55, 55, true);
		
    	// add_theme_support( 'woocommerce' );

		
	}
endif;
add_action('after_setup_theme','cd_theme_setup');
?>