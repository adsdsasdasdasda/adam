<?php

/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */?>

<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="cd_single_page">
	<div class="col-md-4">
      <header class="cd-entry-header">
        
      </header>
      <div class="cd-entry-content">
        <div>
          <?php if (get_the_post_thumbnail()) {?> 
            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>"/> 
          <?php } ?>
        </div>
         <h2 class="cd-entry-title ">
          <a href="<?php echo esc_url(get_post_permalink()); ?>"><?php the_title(); ?></a>
        </h2>
        <span>Author = </span><?php _e(get_the_author(),'ostnica');?>
        <br>
        <?php //if (get_the_category()[0]->name) { echo "<span>Category = </span>"; _e(get_the_category()[0]->name); }?>
        <br>
        <?php if (the_date()) { echo esc_html(the_date()); }?>
         <br>
        
        <?php if (the_content()){echo esc_html(the_content());} ?>
         <br>
        <?php //if (the_content()){echo '<span>Content = </span>'; the_content(); }; ?>
      </div><!-- .entry-content -->
    </div>
</div>
<?php endwhile; ?>
<?php get_footer();?>