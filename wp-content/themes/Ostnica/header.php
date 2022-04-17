<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">  
      <script type="text/javascript">       
      </script>

      <?php wp_head();?>
    <style type="text/css">
      <?php include get_template_directory() .'/includes/settings.php';
      echo esc_html($cd_custom_css); ?>
      <?php include get_template_directory() .'/includes/style.php'; ?>
    </style>
</head>
<body <?php body_class(); ?>>
        <?php
        wp_body_open();
        ?>

         <div class="cd-header-wrapper">
            <?php 
                 //echo $cd_topbar_check;
                    $cd_is_topbar='';
                if (get_option('cd_topbar_check')) {
                    $cd_is_topbar =theme_setting::get_theme_setting('cd_topbar_check');
                }
                if ($cd_is_topbar == "enable") {
                    dynamic_sidebar( 'cd_top_bar' );
                    get_sidebar('cd_top_bar');
                    //get_sidebar('footer_section_2');
                }   
                //dynamic_sidebar('smartslider_area_1');
            ?>
    <?php  switch ($cd_header_type) {
       case 'standard':
            include get_template_directory() .'/inc/header/header1.php';
         break;
       case 'center_menu':
            include get_template_directory() .'/inc/header/header2.php';
         break;
       case 'center_logo':
            include get_template_directory() .'/inc/header/header3.php';       
         break;
       default:
          include get_template_directory() .'/inc/header/header1.php';
         break;
     }  
     ?>  
      <div id="site-banner">
        
        <?php if($cd_breadcumb_check == 'Enable') { ?>
            <div class="breadcrumb">
                <?php  get_breadcrumb(); ?>
            </div>
        <?php } ?>
      </div>

<?php
     if ( function_exists('yoast_breadcrumb') ) {
     yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
}


?>
      
