<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<?php 
		$c=1;
		while ( have_posts() ) : ?>
		<?php 
			the_post(); 
				if ($c==1) { ?>
					<div class="row">
				<?php } ?>
				<div class= col-md-4>
					<span class="cd_box_style_02_img_p">
				  			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"/>
				  		</span>
				<h4 class="cd_box_heading_1_txt"><?php echo get_the_title(get_the_ID()); ?></h4>
				<p class="cd_box_style_02_txt_01"><?php echo substr(get_the_excerpt(get_the_ID()), 0, 75); ?></p>
				<div class="cd_box_style_02_section_holder">
				</div>
				<a href="<?php echo get_permalink(get_the_ID());?>" class="cd-learn-more-btn-grid">Learn More<i class="bi bi-arrow-right-short cd-right-arrow-icon"></i></a>
				
					</div>
				<?php if ($c==3) { ?>
					</div>
					<?php $c=1; ?>
				<?php }else{
					$c++;
				} ?>
		
	<?php endwhile; ?>
	<?php if ($c!=1) { ?>
		</div>
	<?php } ?>

<?php else : ?>
	<?php _e('No Post Found');?>
<?php endif; ?>

<?php get_footer(); ?>
