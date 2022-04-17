
<?php

	$cd_brand_color='';
	if (get_option('cd_brand_color')){
		$cd_brand_color = theme_setting::get_theme_setting('cd_brand_color');
	}
	$cd_link_color='';
	if (get_option('cd_link_color')){
		$cd_link_color = theme_setting::get_theme_setting('cd_link_color');
	}
	$cd_site_bg='';
	if (get_option('cd_site_bg')){
		$cd_site_bg = theme_setting::get_theme_setting('cd_site_bg');
	}
	$cd_text_logo='';
	if (get_option('cd_text_logo')){
		$cd_text_logo = theme_setting::get_theme_setting('cd_text_logo');
		// print_r($cd_text_logo);
	}
	$cd_logo_fontsize='';
	if (get_option('cd_logo_fontsize')){
		$cd_logo_fontsize = theme_setting::get_theme_setting('cd_logo_fontsize');
	}
	$cd_logo_fontcolor='';
	if (get_option('cd_logo_fontcolor')){
		$cd_logo_fontcolor = theme_setting::get_theme_setting('cd_logo_fontcolor');
	}

	$cd_logo_fontweight='';
	if (get_option('cd_logo_fontweight')){
		$cd_logo_fontweight = theme_setting::get_theme_setting('cd_logo_fontweight');
	}

	$cd_logo_height_desktop='';
	if (get_option('cd_logo_height_desktop')){
		$cd_logo_height_desktop = theme_setting::get_theme_setting('cd_logo_height_desktop');
	}

	$cd_logo_height_tab='';
	if (get_option('cd_logo_height_tab')){
		$cd_logo_height_tab = theme_setting::get_theme_setting('cd_logo_height_tab');
	}

	$cd_logo_height_mobile='';
	if (get_option('cd_logo_height_mobile')){
		$cd_logo_height_mobile = theme_setting::get_theme_setting('cd_logo_height_mobile');
	}

	$cd_para_fontsize='';
	if (get_option('cd_para_fontsize')) {
		$cd_para_fontsize = theme_setting::get_theme_setting('cd_para_fontsize');
	}

	$cd_para_fontweight='';
	if (get_option('cd_para_fontweight')) {
		$cd_para_fontweight = theme_setting::get_theme_setting('cd_para_fontweight');
	}

	$cd_para_fontcolor='';
	if (get_option('cd_para_fontcolor')) {
		$cd_para_fontcolor = theme_setting::get_theme_setting('cd_para_fontcolor');
	}

	$cd_heading_fontsize='';
	if (get_option('cd_heading_fontsize')) {
		$cd_heading_fontsize = theme_setting::get_theme_setting('cd_heading_fontsize');
	}

	$cd_heading_fontweight='';
	if (get_option('cd_heading_fontweight')) {
		$cd_heading_fontweight = theme_setting::get_theme_setting('cd_heading_fontweight');
	}

	$cd_heading_fontcolor='';
	if (get_option('cd_heading_fontcolor')) {
		$cd_heading_fontcolor = theme_setting::get_theme_setting('cd_heading_fontcolor');
	}

	$cd_standard_menu='';
	if(get_option('cd_standard_menu')) {
		$cd_standard_menu = theme_setting::get_theme_setting('cd_standard_menu');
	}

	$cd_humberger_menu='';
	if(get_option('cd_humberger_menu')) {
		$cd_humberger_menu = theme_setting::get_theme_setting('cd_humberger_menu');
	}

	$cd_menu_fontsize='';
	if (get_option('cd_menu_fontsize')) {
		$cd_menu_fontsize = theme_setting::get_theme_setting('cd_menu_fontsize');
	}

	$cd_menu_fontcolor='';
	if (get_option('cd_menu_fontcolor')) {
		$cd_menu_fontcolor = theme_setting::get_theme_setting('cd_menu_fontcolor');
	}

	$cd_menu_fontweight='';
	if (get_option('cd_menu_fontweight')) {
		$cd_menu_fontweight = theme_setting::get_theme_setting('cd_menu_fontweight');
	}

	$cd_humberger_fontsize='';
	if (get_option('cd_humberger_fontsize')) {
		$cd_humberger_fontsize = theme_setting::get_theme_setting('cd_humberger_fontsize');
	}
	$cd_humberger_fontcolor='';
	if (get_option('cd_humberger_fontcolor')) {
		$cd_humberger_fontcolor = theme_setting::get_theme_setting('cd_humberger_fontcolor');
	}

	$cd_humberger_fontweight='';
	if (get_option('cd_humberger_fontweight')) {
		$cd_humberger_fontweight = theme_setting::get_theme_setting('cd_humberger_fontweight');
	}
	$cd_mobileMenu_initial='';
	if (get_option('cd_mobileMenu_initial')) {
		$cd_mobileMenu_initial = theme_setting::get_theme_setting('cd_mobileMenu_initial');
	}

	$cd_header_type='';
	if (get_option('cd_header_type')) {
		$cd_header_type = theme_setting::get_theme_setting('cd_header_type');
	}

	$cd_header_heightdesktop='';
	if (get_option('cd_header_heightdesktop')) {
		$cd_header_heightdesktop = theme_setting::get_theme_setting('cd_header_heightdesktop');
	}
	$cd_header_heighttab='';
	if (get_option('cd_header_heighttab')) {
		$cd_header_heighttab = theme_setting::get_theme_setting('cd_header_heighttab');
	}
	$cd_header_heightmobile='';
	if (get_option('cd_header_heightmobile')) {
		$cd_header_heightmobile = theme_setting::get_theme_setting('cd_header_heightmobile');
	}

	$cd_pagewrapper_width = '';
	if (get_option('cd_pagewrapper_width')) {
		$cd_pagewrapper_width = theme_setting::get_theme_setting('cd_pagewrapper_width');
	}
	$cd_pageTitle_heightDsk = '';
	if (get_option('cd_pageTitle_heightDsk')) {
		$cd_pageTitle_heightDsk = theme_setting::get_theme_setting('cd_pageTitle_heightDsk');
	}
	$cd_pageTitle_heightTab = '';
	if (get_option('cd_pageTitle_heightTab')) {
		$cd_pageTitle_heightTab = theme_setting::get_theme_setting('cd_pageTitle_heightTab');
	}
	$cd_pageTitle_heightMob = '';
	if (get_option('cd_pageTitle_heightMob')) {
		$cd_pageTitle_heightMob = theme_setting::get_theme_setting('cd_pageTitle_heightMob');
	}

	$cd_pagetitle_align = '';
	if (get_option('cd_pagetitle_align')) {
		$cd_pagetitle_align = theme_setting::get_theme_setting('cd_pagetitle_align');
	}
	// print_r($cd_pagetitle_align);
	$cd_page_headline_check = '';
	if (get_option('cd_page_headline_check')) {
		$cd_page_headline_check = theme_setting::get_theme_setting('cd_page_headline_check');
	}
	$cd_pageTitle_fontSize = '';
	if (get_option('cd_pageTitle_fontSize')) {
		$cd_pageTitle_fontSize = theme_setting::get_theme_setting('cd_pageTitle_fontSize');
	}
	$cd_pageTitle_fontcolor = '';
	if (get_option('cd_pageTitle_fontcolor')) {
		$cd_pageTitle_fontcolor = theme_setting::get_theme_setting('cd_pageTitle_fontcolor');
	}
	$cd_pageTitle_fontweight = '';
	if (get_option('cd_pageTitle_fontweight')) {
		$cd_pageTitle_fontweight = theme_setting::get_theme_setting('cd_pageTitle_fontweight');
	}


	$cd_breadcumb_check = '';
	if (get_option('cd_breadcumb_check')) {
		$cd_breadcumb_check = theme_setting::get_theme_setting('cd_breadcumb_check');
	}
	$cd_breadcumb_fontSize = '';
	if (get_option('cd_breadcumb_fontSize')) {
		$cd_breadcumb_fontSize = theme_setting::get_theme_setting('cd_breadcumb_fontSize');
	}
	$cd_breadcumb_fontColor = '';
	if (get_option('cd_breadcumb_fontColor')) {
		$cd_breadcumb_fontColor = theme_setting::get_theme_setting('cd_breadcumb_fontColor');
	}
	$cd_breadcumb_fontweight = '';
	if (get_option('cd_breadcumb_fontweight')) {
		$cd_breadcumb_fontweight = theme_setting::get_theme_setting('cd_breadcumb_fontweight');
	}

	$cd_footer_content='';
	if (get_option('cd_footer_content')) {
		$cd_footer_content = theme_setting::get_theme_setting('cd_footer_content');
	}
	$cd_footer_fontSize='';
	if (get_option('cd_footer_fontSize')) {
		$cd_footer_fontSize = theme_setting::get_theme_setting('cd_footer_fontSize');
	}
	$cd_footer_fontColor='';
	if (get_option('cd_footer_fontColor')) {
		$cd_footer_fontColor = theme_setting::get_theme_setting('cd_footer_fontColor');
	}
	$cd_footer_fontweight='';
	if (get_option('cd_footer_fontweight')) {
		$cd_footer_fontweight = theme_setting::get_theme_setting('cd_footer_fontweight');
	}

	$cd_custom_css = '';
	if (get_option('cd_custom_css')) {
		$cd_custom_css =theme_setting::get_theme_setting('cd_custom_css');
	}
	$cd_sidebar_check='';
	if (get_option('cd_sidebar_check')) {
		$cd_sidebar_check =theme_setting::get_theme_setting('cd_sidebar_check');
	}

	$cd_stickyfooter_check='';
	if (get_option('cd_stickyfooter_check')){
		$cd_stickyfooter_check = theme_setting::get_theme_setting('cd_stickyfooter_check');
		// print_r($cd_stickyfooter_check);
	}
	$cd_header_bg='';
	if(get_option('cd_header_bg')){
		$cd_header_bg = theme_setting::get_theme_setting('cd_header_bg');
		// print_r($cd_header_bg);
	}
	$cd_menu_type='';
	if (get_option('cd_menu_type')) {
		$cd_menu_type=theme_setting::get_theme_setting('cd_menu_type');
	}
	$cd_ostnica_fontfamily='';
	if (get_option('cd_site_fontfamily')) {
		$cd_ostnica_fontfamily=theme_setting::get_theme_setting('cd_site_fontfamily');
	}
	$cd_topbar_check='';
	if (get_option('cd_topbar_check')) {
		$cd_topbar_check=theme_setting::get_theme_setting('cd_topbar_check');
	}
	$cd_footer_background_color='';
	if (get_option('cd_footer_background_color')) {
		$cd_footer_background_color=theme_setting::get_theme_setting('cd_footer_background_color');
	}
	$cd_footer_boxlayout_check='';
	if (get_option('cd_footer_boxlayout_check')) {
		$cd_footer_boxlayout_check=theme_setting::get_theme_setting('cd_footer_boxlayout_check');
	}
	$cd_stickyheader_check='';
	if (get_option('cd_stickyheader_check')) {
		$cd_stickyheader_check=theme_setting::get_theme_setting('cd_stickyheader_check');
	}
	$cd_menu_text_style_type='';
	if (get_option('cd_menu_text_style_type')) {
		$cd_menu_text_style_type=theme_setting::get_theme_setting('cd_menu_text_style_type');
	}
	
?>