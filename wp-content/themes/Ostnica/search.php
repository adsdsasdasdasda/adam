<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			
		</h1>
	</header><!-- .page-header -->

	<div class="search-result-count default-max-width">
		
	</div><!-- .search-result-count -->
	<?php
	$c=1;
	// Start the Loop.
	while ( have_posts() ) {
		// get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
		the_post(); 
				if ($c==1) {
					echo '<div class="row">';
				}
				echo '<div class= col-md-4>';	
					echo'<span class="cd_box_style_02_img_p">
				  			<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'"/>
				  		</span>';
				echo '<h4 class="cd_box_heading_1_txt">'.get_the_title(get_the_ID()).'</h4>';
				echo '<p class="cd_box_style_02_txt_01">'.substr(get_the_excerpt(get_the_ID()), 0, 75).'</p>';
				echo '<div class="cd_box_style_02_section_holder">';
				echo '</div>';
				echo '<a href="'.get_permalink(get_the_ID()).'" class="cd-learn-more-btn-grid">Learn More<i class="bi bi-arrow-right-short cd-right-arrow-icon"></i></a>';
				
				echo '</div>';
				if ($c==3) {
					echo '</div>';
					$c=1;
				}else{
					$c++;
				}
	} // End the loop.
	if ($c!=1) {
		echo '</div>';
	}
	} else {
	
	_e('No Post Found','ostnica');
}

get_footer();
