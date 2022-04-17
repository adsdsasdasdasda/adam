body a{
        color:<?php echo esc_html($cd_link_color); ?>;
      }
      body{
        background-color: <?php echo esc_html($cd_site_bg); ?>;
      }
      @media screen and (max-width:567px){
        #site-header .site-logo img{
          height: <?php echo esc_html($cd_logo_height_mobile)."px"; ?>;
        }
        .mobile-menu ul li a{
          font-size: <?php echo esc_html($cd_humberger_fontsize)."px"; ?>;
          color: <?php echo esc_html($cd_humberger_fontcolor); ?>;
        }
        .desktop-menu{
          display: none;
        }
        #site-header{
          height:<?php echo esc_html($cd_header_heightmobile)."px"; ?>;
        }
        #site-banner{
          height: <?php echo esc_html($cd_pageTitle_heightMob)."px"; ?> !important;
          position: relative;
        }
      }
      @media screen and (min-width:568px) and (max-width: 1024px){
        #site-header .site-logo img{
          height: <?php echo esc_html($cd_logo_height_tab)."px"; ?>;
        }
        .mobile-menu ul li a{
          font-size: <?php echo esc_html($cd_humberger_fontsize)."px"; ?>;
          color: <?php echo esc_html($cd_humberger_fontcolor); ?>;
        }
        .desktop-menu{
          display: none;
        }
        #site-header{
          height:<?php echo esc_html($cd_header_heighttab)."px"; ?>;
        }
        #site-banner{
          height: <?php echo esc_html($cd_pageTitle_heightTab)."px"; ?> !important;
          position: relative;
        }
      }
      @media screen and (min-width:1025px){
        #site-header .site-logo img{
          height: <?php echo esc_html($cd_logo_height_desktop)."px"; ?>;
        }
        .desktop-menu ul li a{
          font-size: <?php echo esc_html($cd_menu_fontsize)."px"; ?>;
          color: <?php echo esc_html($cd_menu_fontcolor); ?>;
        }
        .mobile-menu{
          display: none;
        }
        #site-header{
          height: <?php echo esc_html($cd_header_heightdesktop)."px"; ?>;
        }
        #site-banner{
          height: <?php echo esc_html($cd_pageTitle_heightDsk)."px"; ?> !important;
          position: relative;
        }
     }
      #site-header .site-logo h2{ 
        font-size: <?php echo esc_html($cd_logo_fontsize)."px"; ?>;
        color: <?php echo esc_html($cd_logo_fontcolor); ?>;
        
      }
      body p{
        font-size: <?php echo esc_html($cd_para_fontsize)."px"; ?>;
        color:<?php echo esc_html($cd_para_fontcolor); ?>;
      }
      body h1,h2,h3,h4,h5,h6{
        color: <?php echo esc_html($cd_heading_fontcolor); ?>;
      }
      body{
        font-family: <?php echo esc_html($cd_ostnica_fontfamily); ?>;
      }
      .site-footer.header-footer-group p{
        font-size: <?php echo esc_html($cd_footer_fontSize)."px"; ?>;
        color: <?php echo esc_html($cd_footer_fontColor); ?>;
      }
      .cd-site-footer-bgcolor{
        background-color: <?php echo esc_html($cd_footer_background_color); ?>;
      }
      #site-header{
        background-color: <?php echo esc_html($cd_header_bg); ?>;
      }
      .cd-header-wrapper{
        width: <?php echo esc_html($cd_pagewrapper_width)."px"; ?>;
        min-height: calc(100vh - 87px);
      }
      .site-logo h2{
        margin: 20px 10px;
      }
      
      #site-banner h1{
          font-size: <?php echo esc_html($cd_pageTitle_fontSize)."px"; ?>;
          font-weight: <?php echo esc_html($cd_pageTitle_fontweight); ?>;
          font-color: <?php echo esc_html($cd_pageTitle_fontcolor); ?>;
          text-align: <?php echo esc_html($cd_pagetitle_align); ?>;
          margin-top: 0px;
      }
      #site-header .contact-btn{
        margin: 20px 10px;
      }
      <?php
        if ($cd_stickyfooter_check == 'enable') {
          echo ".cd-site-footer-position{position: fixed; bottom: 0; left:0; right:0;";
        }
      ?>
      .cd-site-header{
         <?php if($cd_stickyheader_check=='enable'){echo esc_html("position: fixed; top: 0; left:0; width:100%");} ?>
      }
      .cd_menu_text_style ul li{
        <?php  switch ($cd_menu_text_style_type) {
             case 'uppercase':
                echo esc_html("text-transform: uppercase;");
               break;
             case 'lowercase':
                echo esc_html("text-transform: lowercase;");
               break;
             case 'capitalize':
                echo esc_html("text-transform: capitalize;");
               break;
          }  ?>
      }