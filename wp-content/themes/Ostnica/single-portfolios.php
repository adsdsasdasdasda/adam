
<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="">	
	<div class="cd-page-title-01">
		<?php if (get_the_post_thumbnail()) { ?>
		<div class="cd_single-portfolio_thumbnail-01">
			
			<h2 class="cd_portfolio_title-01">
				<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
			</h2>
		
				
		
		<?php } ?>
		<?php //if (get_the_category()[0]->name) { ?>
			 <!-- <div class="cd_single-portfolio_category-01">
			 	 <?php _e(get_the_category()[0]->name); ?>
			 </div> -->

		<?php //}?>
</div>
	</div>
	<div class="container my-5">
		<div class="cd-project-image-01">
			<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
		</div>
		<div class="cd_portfolio_content">
			<?php the_content(); ?>
		</div>	
	</div>

<?php endwhile; ?>
<?php get_footer();?>