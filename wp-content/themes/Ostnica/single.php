<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */?>

<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="">
	<div class="">
		<div class=""></div>
		<div class="">
			<div class="">
				<h1 class=""><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

				<div class="">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>