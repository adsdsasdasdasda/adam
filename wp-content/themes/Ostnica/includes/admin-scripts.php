<?php
/**
 * The main template file
 *
 * The proper hook to use when enqueuing scripts and styles that are meant to be used in the administration panel.
 * Despite the name, it is used for enqueuing both scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts/
 *
 * @package mytheme
 */

function cd_admin_scripts() {
	//Admin assets file enqueque		
	if (isset($_GET['page'])) {
		if ( $_GET['page'] == 'theme-options') {
			wp_enqueue_style( 'cd_style_custom', get_stylesheet_directory_uri() . "/assets/admin/css/admin.css");
			wp_enqueue_style( 'cd_bootstrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.min.css");
			wp_enqueue_script('cd_adminjs',get_stylesheet_directory_uri() . "/assets/admin/js/admin.js");
			wp_enqueue_script('cd_jquery_ajax',get_stylesheet_directory_uri() . "/assets/admin/js/cd_jquery_ajax.js");
			wp_localize_script( 'cd_jquery_ajax', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
			wp_enqueue_script('cd_bootstrap_popper_js',get_stylesheet_directory_uri() . "/assets/admin/js/cd_bootstrap_popper.js");
			wp_enqueue_script('cd_bootstrap_js',get_stylesheet_directory_uri() . "/assets/js/bootstrap.min.js");
		}
	}	
	wp_enqueue_script('cd_adminjs',get_stylesheet_directory_uri() . "/assets/admin/js/admin.js");
	wp_enqueue_style( 'cd_style_custom', get_stylesheet_directory_uri() . "/assets/admin/css/admin.css");
	
}	
add_action( 'admin_enqueue_scripts', 'cd_admin_scripts' );
?>