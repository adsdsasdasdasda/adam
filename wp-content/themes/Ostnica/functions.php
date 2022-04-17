<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mytheme
 */

//include theme support function file
require get_template_directory() . '/includes/theme-support.php';

//include scripts file for admin pages
require get_template_directory() . '/includes/admin-scripts.php';

//include theme script file
require get_template_directory() . '/includes/theme-scripts.php';	

//include breadcumbs functionallity
//include get_template_directory().'/inc/breadcumb/breadcumb.php';

//include 'all_classes.php';
//----------------------------------------------
//--------------add theme support for thumbnails
//----------------------------------------------
if ( function_exists( 'add_theme_support')){
	add_theme_support( 'post-thumbnails' );
}

add_image_size( 'admin-list-thumb', 80, 80, true); //admin thumbnail

//for widget options
function cd_widget_init() {
	register_sidebar(array(
		'name'				=>	'Footer Section 1',
		'id'				=>	'footer_section_1',
		'before_title'		=>	'<h3 class ="widget-title">',
		'after_title'		=>	'</h3>'
	) );

	register_sidebar(array(
		'name'				=>  'Footer Section 2',
		'id'				=>	'footer_section_2',
		'before_title'		=>	'<h3 class ="widget-title">',
		'after_title'		=>	'</h3>'
	) );
    register_sidebar(array(
        'name'              =>  'Top Bar',
        'id'                =>  'cd_top_bar',
        'before_title'      =>  '<h3 class ="cd-header-top">',
        'after_title'       =>  '</h3>'
    ) );
}
add_action('widgets_init' , 'cd_widget_init');


//function for ajax calling
function cd_update_google_font_items(){
	$cd_site_fontfamily='';
	if (get_option('cd_site_fontfamily')){
		$cd_site_fontfamily = theme_setting::get_theme_setting('cd_site_fontfamily');
	}
	echo esc_html($cd_site_fontfamily);
	die;
}
add_action('wp_ajax_cd_update_google_font_items', 'cd_update_google_font_items', 0);
add_action('wp_ajax_nopriv_cd_update_google_font_items', 'cd_update_google_font_items');


//add theme option page
function cd_theme_option_menu() {
 add_menu_page("Theme Options", "Theme Options", "manage_options", "theme-options", "cd_theme_option_page", null, 5);
}
add_action( 'admin_menu', 'cd_theme_option_menu' );

// Custom theme options class.
require get_template_directory() . '/classes/class-theme-setting.php';
new theme_setting();

// add theme option page variables (callback function)
//07-03-2022 start
/*function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

    $elementor_theme_manager->register_all_core_location();

}*/
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );
//07-03-2022 end
function cd_theme_option_page(){
	if (isset($_POST['submit'])) {
		/*echo "<pre>";
		print_r($_POST['theme']);
		echo "</pre>";*/
		//print_r($_FILES);

		if(!isset($_POST['theme']['cd_stickyfooter_check'])){
			if(get_option( 'cd_stickyfooter_check') != ''){ 
				update_option('cd_stickyfooter_check','');
			}
			else{
				add_option('cd_stickyfooter_check','');
			}
		}

		theme_setting::save_theme_setting($_POST['theme']);//done
		
		theme_setting::get_theme_setting('cd_brand_color');
		//code by abhay on 18-02-2022 to remove waring of empty file name change in code=add the condition && 
		if (isset($_FILES) && $_FILES["inputGroupFile01"]["tmp_name"]!='') {
			$cd_filename = md5(time().'_'.rand(100000,300000)).".png";
			$cd_target_dir = ABSPATH . "wp-content/themes/Ostnica/uploads/images/";
			$cd_target_file = $cd_target_dir . $cd_filename;
			$cd_uploadOk = 1;
			$imageFileType = strtolower(pathinfo($cd_target_file,PATHINFO_EXTENSION));
				$check = getimagesize($_FILES["inputGroupFile01"]["tmp_name"]);
				if($check !== false){
					//echo "File is an image - " . $check["mime"] . ".";
					$check_file_type="File is an image - " . $check["mime"] . ".";
					//_e($check_file_type);
					$cd_uploadOk = 1;
				}else{
					//$display_message="File is not an image.";
					_e("File is not an image.");
					$cd_uploadOk = 0;
				}
			if ($cd_uploadOk == 0) {
			  	_e("Sorry, your file was not uploaded.");
				// if everything is ok, try to upload file
			}else{
			  	if (move_uploaded_file($_FILES["inputGroupFile01"]["tmp_name"], $cd_target_file)) {
			  		theme_setting::update_image('logo', $cd_filename);
			  		$cd_display_success_msg="The file ". htmlspecialchars( basename( $_FILES["inputGroupFile01"]["name"])). " has been uploaded.";
			    	//_e($display_success_msg);

			  	} else {
			    	_e("Sorry, there was an error uploading your file.");
			  	}
			}
		}
	}
	//Add files variable for theme options page support
	include get_template_directory() .'/includes/settings.php';
	//add theme option page design
	include get_template_directory() .'/includes/theme_options.php';
}

function themeoptions_update(){
// this is where validation would go
}
//add_action('save_post', 'cd_save_metadata');



add_filter( 'manage_edit-product_columns', 'cd_change_columns_filter',10, 1 );
function cd_change_columns_filter( $columns ) {
	unset($columns['product_tag']);
	return $columns;
}
//pagination functon
function wppagination($wp_query) {
 	
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */

    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}
//add_action( 'admin_init', 'add_post_gallery_so_14445904' );
add_action( 'admin_head-post.php', 'print_scripts_so_14445904' );
add_action( 'admin_head-post-new.php', 'print_scripts_so_14445904' );
//add_action( 'save_post', 'update_post_gallery_so_14445904', 10, 2 );
function print_scripts_so_14445904(){
    // Check for correct post_type
    global $post;
    if( 'galleries' != $post->post_type )// here you can set post type name
        return;
    ?>  
    <style type="text/css">
      .field_left {
        float:left;
      }

      .field_right {
        float:left;
        margin-left:10px;
      }

      .clear {
        clear:both;
      }

      #dynamic_form {
        width:580px;
      }

      #dynamic_form input[type=text] {
        width:300px;
      }

      #dynamic_form .field_row {
        border:1px solid #999;
        margin-bottom:10px;
        padding:10px;
      }

      #dynamic_form label {
        padding:0 6px;
      }
    </style>

    <script type="text/javascript">
        function add_image(obj) {
            var parent=jQuery(obj).parent().parent('div.field_row');
            var inputField = jQuery(parent).find("input.meta_image_url");

            tb_show('', 'media-upload.php?TB_iframe=true');

            window.send_to_editor = function(html) {
                // var url = jQuery(html).find('img').attr('src');
                var url = jQuery(html).attr('src');
            	
                inputField.val(url);
                jQuery(parent)
                .find("div.image_wrap")
                .html('<img src="'+url+'" height="48" width="48" />');

                // inputField.closest('p').prev('.awdMetaImage').html('<img height=120 width=120 src="'+url+'"/><p>URL: '+ url + '</p>'); 

                tb_remove();
            };

            return false;  
        }

        function remove_field(obj) {
            var parent=jQuery(obj).parent().parent();
            //console.log(parent)
            parent.remove();
        }

        function add_field_row() {
            var row = jQuery('#master-row').html();
            jQuery(row).appendTo('#field_wrap');
        }
    </script>
    <?php
}
//abhay on 01-03-2022 added this function for getting font families dropdown in backed start
function cd_init_ajax_path(){
	echo '<script type="text/javascript">
		var cd_ajax_path ="'.admin_url("admin-ajax.php").'";
	</script>';
		// console.log("cd_ajax_path");
		// console.log(cd_ajax_path);
}
add_action( 'wp_head', 'cd_init_ajax_path' );
add_action( 'admin_head', 'cd_init_ajax_path' );
//abhay on 01-03-2022 added this function for getting font families dropdown in backed end

//custom post type for portfolio start
// Our custom post type function
function cd_create_portfolio_posttype() {
 
    $labels = array(
    'name' => _x('Portfolios', 'post type general name'),
    'singular_name' => _x('Portfolio', 'post type singular name'),
    'add_new' => _x('Add New', 'Portfolio'),
    'add_new_item' => __('Add New Portfolio'),
    'edit_item' => __('Edit Portfolio'),
    'new_item' => __('New Portfolio'),
    'all_items' => __('All Portfolios'),
    'view_item' => __('View Portfolio'),
    'search_items' => __('Search Portfolios'),
    'not_found' =>  __('No Portfolios found'),
    'not_found_in_trash' => __('No Portfolios found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Portfolios')

  );
  $args = array(
    'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
  ); 
  register_post_type('portfolios',$args);
}
// Hooking up our function to theme setup
add_action( 'init', 'cd_create_portfolio_posttype' );
//custom post type for portfolio end
//short code for portfolio slider on 14-03-2022 start
function cd_portfolio_slider_sortcode(){
    ?>
    <div class="cd-portfolio-wrepper-01 owl-carousel">
        <?php
        $query = new WP_Query(array(
        'post_type' => 'portfolios',
        'post_status' => 'publish'
        ));
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $cd_page_link= get_the_permalink();
            ?>
            <div class="cd-slider-container">
              <div class="cd-slider-wrepper">
                <div class="cd-slider-image-01"><?php if (get_the_post_thumbnail()) { echo get_the_post_thumbnail(); }?></div>
                <div class="cd-slider-content-wrepper-01">
                    <p class="cd-categories-name-01"><?php if (get_the_category()[0]->name) { echo _e(get_the_category()[0]->name); }?></p>
                     <h2 class="cd-slider-heading-01">
                      <a href="<?php echo esc_url($cd_page_link); ?>"><?php the_title(); ?></a>
                    </h2>
                    <!-- <span>Author = </span><?php _e(get_the_author(),'ostnica');?> -->
                    <?php //if (the_date()) { echo "<span>Date = </span>"; esc_html(the_date()); }?>
                    
                    <p class="cd-slider-text-01"><?php if (strlen(get_the_excerpt())>150){echo esc_html(substr(get_the_excerpt(),0,75)).'...';}else{echo esc_html(get_the_excerpt());}; ?>
                    </p>
                    <a class="cd-read-more-02" href="<?php echo esc_url($cd_page_link); ?>">Read more</a>
                    <?php //if (the_content()){echo '<span>Content = </span>'; the_content(); }; ?>
                </div>
              </div><!-- cd-slider-wrepper -->
            </div>
        <?php }

        wp_reset_query();?>
    </div>
<?php } 
add_shortcode('cd_portfolio_slider_sortcode','cd_portfolio_slider_sortcode');
//short code for portfolio slider on 14-03-2022 end


//custom post type for testimonial start
// Our custom post type function
function cd_create_testimonial_posttype() {
 
    $labels = array(
    'name' => _x('Testimonials', 'post type general name'),
    'singular_name' => _x('Testimonial', 'post type singular name'),
    'add_new' => _x('Add New', 'Testimonial'),
    'add_new_item' => __('Add New Testimonial'),
    'edit_item' => __('Edit Testimonial'),
    'new_item' => __('New Testimonial'),
    'all_items' => __('All Testimonials'),
    'view_item' => __('View Testimonial'),
    'search_items' => __('Search Testimonials'),
    'not_found' =>  __('No Testimonials found'),
    'not_found_in_trash' => __('No Testimonials found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Testimonials')

  );
  $args = array(
    'labels'                => $labels,
        'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
  ); 
  register_post_type('testimonials',$args);
}

// Hooking up our function to theme setup
add_action( 'init', 'cd_create_testimonial_posttype' );
//custom post type for portfolio end
//short code for portfolio slider on 14-03-2022 start
function cd_Testimonial_slider_sortcode(){
    ?>
    <div class="cd-portfolio-wrepper-01 owl-carousel">
        <?php
        $query = new WP_Query(array(
        'post_type' => 'Testimonials',
        'post_status' => 'publish'
        ));

        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $cd_page_link= get_the_permalink();
            ?>

            <div class="cd-testimonial-slider-container">
              <div class="cd-slider-wrepper">
                <div class="cd-testimonial-slider-content-wrepper-01">
                   <!--  <p class="cd-categories-name-01"><?php //if (get_the_category()[0]->name) { echo _e(get_the_category()[0]->name); }?></p> -->
                    <!-- <span>Author = </span><?php _e(get_the_author(),'ostnica');?> -->
                    <?php //if (the_date()) { echo "<span>Date = </span>"; esc_html(the_date()); }?>
                    
                    <p class="cd-slider-text-02">
                        <?php if (strlen(get_the_excerpt())>150){echo esc_html(substr(get_the_excerpt(),0,150)).'...';}else{echo esc_html(get_the_excerpt());}; ?>
                    </p>
                    <div class="row testimonial-section">
                        <div class="col-md-3">
                            <div class="cd-testimonial-image-01"><?php if (get_the_post_thumbnail()) { echo get_the_post_thumbnail(); }?></div>
                        </div>
                        <div class="col-md-9 cd-text-align-item">
                            <h2 class="cd-testimonial-slider-heading-01">
                            <?php _e(get_post_meta($post_id,'cd_testimonial_user_name',true)); ?>
                            </h2>
                                <p class="cd-testimonial-position-name-01"><?php _e(get_post_meta($post_id,'cd_testimonial_position',true)); ?></p>
                        </div>
                    </div>

                    <?php //if (the_content()){echo '<span>Content = </span>'; the_content(); }; ?>
                </div>
              </div><!-- cd-slider-wrepper -->
            </div>
        <?php }

        wp_reset_query();?>
    </div>
<?php } 
add_shortcode('cd_Testimonial_slider_sortcode','cd_Testimonial_slider_sortcode');
//short code for Testimonial slider on 14-03-2022 end
function cd_testimonial_meta_boxes() {
    add_meta_box(
        'subscription_box_id',                 // Unique ID
        'Testimonial Bio',      // Box title
        'cd_display_callback',  // Content callback, must be of type callable
        'testimonials',        // Post type
        'normal',
        'high'  //position
    );
}
add_action( 'add_meta_boxes', 'cd_testimonial_meta_boxes' );
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function cd_display_callback( $post ) {
    $cd_testimonial_user_name='';
    $cd_testimonial_city='';
    $cd_testimonial_position='';
    if (get_post_meta($post->ID,'cd_testimonial_user_name')) {
        $cd_testimonial_user_name=get_post_meta($post->ID,'cd_testimonial_user_name',true);
    }
    if (get_post_meta($post->ID,'cd_testimonial_city')) {
        $cd_testimonial_city=get_post_meta($post->ID,'cd_testimonial_city',true);
    }
    if(get_post_meta($post->ID,'cd_testimonial_position')) {
        $cd_testimonial_position=get_post_meta($post->ID,'cd_testimonial_position',true);
    }
    ?>
    <div>
        <div class="cd-input-01">
            <label for="cd_testimonial_user_name">Client name</label>
            <input type="text" name="cd_testimonial_user_name" id="cd_testimonial_user_name" value="<?php if($cd_testimonial_user_name!='') echo esc_html($cd_testimonial_user_name); ?>" />
        </div>
        <div class="cd-input-02">
            <label for="cd_testimonial_city">City name</label>
            <input type="text" name="cd_testimonial_city" id="cd_testimonial_city" value="<?php if($cd_testimonial_city!='') echo esc_html($cd_testimonial_city); ?>" />
        </div>
        <div class="cd-input-03">
            <label for="cd_testimonial_position">Job title</label>
            <input type="text" name="cd_testimonial_position" id="cd_testimonial_position" value="<?php if($cd_testimonial_position!='') echo esc_html($cd_testimonial_position); ?>"  />
        </div>
    </div>
<?php }
add_action('save_post','cd_save_post_tesimonial_meta_data');
//function for saving testimonial post type meta data
function cd_save_post_tesimonial_meta_data($post_id){
    if(isset($_POST['cd_testimonial_user_name'])){
        update_post_meta($post_id,'cd_testimonial_user_name', sanitize_text_field($_POST['cd_testimonial_user_name']));
    }
    if(isset($_POST['cd_testimonial_city'])){
        update_post_meta($post_id,'cd_testimonial_city', sanitize_text_field($_POST['cd_testimonial_city']));
    }
    if(isset($_POST['cd_testimonial_position'])){
        update_post_meta($post_id,'cd_testimonial_position', sanitize_text_field($_POST['cd_testimonial_position']));
    }
}






