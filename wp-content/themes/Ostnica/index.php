<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mytheme
 */
get_header();
$cd_args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published
);
$cd_post_result = new WP_Query( $cd_args );?>
<div class="row cd-post-wrepper-01">
<?php
if ( $cd_post_result-> have_posts() ) { ?>
  <?php while ( $cd_post_result->have_posts() ) : $cd_post_result->the_post(); ?>
    <div class="col-md-4">
      <header class="cd-entry-header">
        
      </header>
      <div class="cd-entry-content">
        <div>
          <?php if (get_the_post_thumbnail()) { echo get_the_post_thumbnail(); }?>
        </div>
         <h2 class="cd-entry-title ">
          <a href="<?php echo esc_url(get_post_permalink()); ?>"><?php the_title(); ?></a>
        </h2>
        <span>Author = </span><?php _e(get_the_author(),'ostnica');?>
        <br>
        <?php if (get_the_category()[0]->name) { echo "<span>Category = </span>"; _e(get_the_category()[0]->name); }?>
        <br>
        <?php if (the_date()) { echo "<span>Date = </span>"; esc_html(the_date()); }?>
         <br>
        
        <?php if (strlen(get_the_excerpt())>150){echo substr(get_the_excerpt(),0,150);}; ?>
         <br>
        <?php //if (the_content()){echo '<span>Content = </span>'; the_content(); }; ?>
      </div><!-- .entry-content -->
    </div>
  <?php endwhile; ?>
<?php }else{ _e('NO Posts Found'); } wp_reset_postdata(); ?>
</div>
<?php get_footer();?>