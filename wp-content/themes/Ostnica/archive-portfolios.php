<?php
get_header();
// The Query


$query = new WP_Query(array('post_type' => 'portfolios'));
query_posts( $query );
// The Loop
?>
<div class="cd-page-title-portfolio">
  <h2>Portfolio Page </h2>
</div>



<div class="row cd-portfolio-wrepper-01">
<!-- <div class="row "> -->
  <?php
while ( $query->have_posts() ) : $query->the_post();  ?>

  <?php $cd_page_link= get_post_permalink();?>

<div class="col-md-4 column-divid-768-480 cd-grid-wrepper-margin">

      <div class="col-md-12 cd-gird-position-01">
        <div class="cd-gird-image-01" style=" background-image: url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>);"></div>
      
        <div class=" cd-grid-wrepper-01">
          <div class="cd-gird-content-wrepper-01">
              <p class="cd-gird-categories-name-01"><?php if (get_the_category()[0]->name) { echo _e(get_the_category()[0]->name); }?></p>
               <h2 class="cd-gird-heading-01">
                <a href="<?php echo esc_url($cd_page_link); ?>"><?php the_title(); ?></a>
              </h2>
              <!-- <span>Author = </span><?php _e(get_the_author(),'ostnica');?> -->
              <?php //if (the_date()) { echo "<span>Date = </span>"; esc_html(the_date()); }?>
              
              <!-- <p><?php //if (strlen(get_the_excerpt())>150){echo esc_html(substr(get_the_excerpt(),0,75)).'.....';}else{echo esc_html(get_the_excerpt());}; ?></p> -->
              <?php //if (the_content()){echo '<span>Content = </span>'; the_content(); }; ?>
              <a href="<?php echo esc_url($cd_page_link); ?>" class="cd-read-more-01">Read more..</a>
          </div>
        </div>
      </div>
</div>

<?php endwhile;

// Reset Query
wp_reset_query();
?>


</div>
<?php get_footer(); ?>