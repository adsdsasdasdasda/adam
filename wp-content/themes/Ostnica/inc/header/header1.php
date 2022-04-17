<header id="site-header" class="header-footer-group cd-site-header">
      <div class="section-inner header-inner row cd-header-mobile-view px-2">
        <div class="col-md-3 col-9 mobile-screen">
          <div class="site-logo">
            <?php
            if ( has_custom_logo() ) {
              
                $cd_logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' ); ?>

                <a class="custom-logo-link" href="<?php echo esc_url(get_site_url()); ?>">
                  <img class="custom-logo" src="<?php echo esc_url($cd_logo[0]); ?>" width="<?php echo esc_attr($cd_logo[1]); ?>" height="<?php echo esc_attr($cd_logo[2]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>

            <?php } else { ?>

               <h2><?php echo esc_html($cd_text_logo); ?></h2>
                
           <?php } ?>
          </div>
        </div>
        <div class="col-md-9 col-3 mobile-screen">
          <div class="row">
           
          </div>
          <div class="row">
            <div class="desktop-menu text-end cd_menu_text_style">
                <?php
                if ($cd_standard_menu == 'primary'){
                  wp_nav_menu( array('theme_location' => 'primary'));
                }
                else{
                   wp_nav_menu(array( 'theme_location' => 'secondary') );
                }
                  
                 ?>
            </div>
            <div class="mobile-menu cd-responsive">
                <a href="<?php echo get_site_url(); ?>/cart/"><i class="bi bi-cart cd_flot_right" title="Cart" aria-hidden="true"></i></a>
                <button class="btn btn-secondary float-right humberger-menu cd-maegin-left-mobile">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </button>
                <div class="humberger-menu-item">
                  <div class="cd-close-icon-01">x</div>
                  <?php
                  if ($cd_standard_menu == 'primary'){
                    wp_nav_menu( array('theme_location' => 'primary'));
                  }
                  else{
                     wp_nav_menu(array( 'theme_location' => 'secondary') );
                  }
                  ?>
                </div>
            </div>
          </div>        
        </div>
       </div>
    </header>