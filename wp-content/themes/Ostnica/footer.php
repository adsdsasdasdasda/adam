<?php 
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myheme
 */
	
	
 ?>
<footer class="cd-site-footer-position header-footer-group cd-site-footer-bgcolor ">
		<div class="cd-wrepper-footer-01 <?php echo( get_option('cd_footer_boxlayout_check')=='enable' ? 'cd-footer-box-limi-width-01' : ''); ?>">
			
		
			<?php $cd_sidebar_check='';
			if (get_option('cd_sidebar_check')) {
				$cd_sidebar_check =theme_setting::get_theme_setting('cd_sidebar_check');
			}
			if ($cd_sidebar_check == "enable") {
			?><div class="cd_footer_section_2"><?php dynamic_sidebar('footer_section_2');?></div>
			<div class="cd_footer_section_1 "><?php dynamic_sidebar( 'footer_section_1' );?></div>
				
				
	        	
			<?php }	?>
			
		<p class="my-0 text-muted mx-1 cd-copy-right-01">
			<?php
			$cd_footer_content='';
			if (get_option('cd_footer_content')) {
				$cd_footer_content =theme_setting::get_theme_setting('cd_footer_content');
			}
			if ($cd_footer_content != '') {
				_e($cd_footer_content);
			}
			
			?>
		</p>
	</div>
</footer>
  <?php wp_footer(); ?>
</div>

</body>
</html>