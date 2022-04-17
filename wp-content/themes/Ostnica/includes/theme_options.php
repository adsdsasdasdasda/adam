<?php
	echo '<div class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="row p-2 mt-2 border bg-dark rounded">
				<div class="col-md-8">
					<h3 class="text-white">Theme Settings</h2>
				</div>
				<div class="col-md-4">
					<button class="btn btn-primary float-right" name="submit">Save</button>
				</div>
			</div>
			<div class="row my-3">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link p-3" href="#general" data-toggle="tab">General</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="#typography" data-toggle="tab">Typography</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="#menu" data-toggle="tab">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="#header" data-toggle="tab">Header</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="#page" data-toggle="tab">Page</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="#footer" data-toggle="tab">Footer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-3" href="#custom_css" data-toggle="tab">Custom CSS</a>
					</li>
				</ul>
			</div>
			<div class="tab-content my-3">
				<div id="general" class="tab-pane fade active show">
					<div class="row p-2 border">
						<h5>General Settings</h5>
					</div>
					<div class="row">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#theme_styling" class="nav-link p-2" data-toggle="tab">Theme Styling</a></li>
							<li class="nav-item"><a href="#site_identity" class="nav-link p-2" data-toggle="tab">Site Identity</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="theme_styling" class="tab-pane fade active show">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Font Family</h6>
									<p>Choose font family variant for your website</p>
								</div>
								<div class="col-md-4">
									<h6> </h6>
									<select class="custom-select" id="font_family" name="theme[cd_site_fontfamily]"></select>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Brand Color</h6>
									<p>Choose the accent color for your website.</p>
								</div>
								<div class="col-md-4">
									<div class="input-group flex-nowrap">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="addon-wrapping">Select Color</span>
									  </div>
									  <input type="color"  class="form-control cd_brand_color" value="'.$cd_brand_color.'" aria-describedby="addon-wrapping">
									  <input name="theme[cd_brand_color]" id="cd_brand_color" type="hidden" value="'.$cd_brand_color.'" class="hid_color">
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Link Color</h6>
									<p>Choose the accent color for links on your website</p>
								</div>
								<div class="col-md-4">
									<div class="input-group flex-nowrap">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="addon-wrapping">Select Color</span>
									  </div>
									  <input type="color" class="form-control cd_link_color" value="'.$cd_link_color.'"aria-describedby="addon-wrapping">
									  <input type="hidden" name="theme[cd_link_color]" id="cd_link_color" value="'.$cd_link_color.'">
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Background Color</h6>
									<p>Choose the Background color for your website</p>
								</div>
								<div class="col-md-4">
									<div class="input-group flex-nowrap">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="addon-wrapping">Select Color</span>
									  </div>
									  <input type="color" class="form-control cd_site_bg" aria-describedby="addon-wrapping" value="'.$cd_site_bg.'">
									  <input type="hidden" id="cd_site_bg" name="theme[cd_site_bg]" value="'.$cd_site_bg.'">
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>
						</div>
						<div id="site_identity" class="tab-pane fade">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6> Site logo </h6>
									<p>Add a logo for your website</p>
								</div>
								<div class="col-md-8">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline1" name="theme[cd_site_logo_type]" class="custom-control-input radio_textlogo" selected>
										<label class="custom-control-label" for="customRadioInline1">Text Logo</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline2" name="theme[cd_site_logo_type]" class="custom-control-input radio_imagelogo">
										<label class="custom-control-label" for="customRadioInline2">Image Logo</label>
									</div>
								</div>
							</div>
							<div class="row pt-2 textLogo">
								<div class="col-md-4">
									<h6>Text Logo</h6>
									<p>Enter the title text for your website</p>
								</div>
								<div class="col-md-8">
									<input type="text" name="theme[cd_text_logo]" value="'.$cd_text_logo.'">
								</div>
							</div>
							<div class="row pt-2 textLogo">
								<div class="col-md-4">
									<h6>Text logo typography</h6>
									<p>Set up typography for the website title</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>font Size</h6>
											<div class="input-group mb-3">
												<input type="number" name="theme[cd_logo_fontsize]" value="'.$cd_logo_fontsize.'" style="width:75%">
												<div class="input-group-append" style="width:25%">
												   <span class="input-group-text" id="basic-addon2">px</span>
												</div>
											</div>
										</div>
										
										<div class="col-md-4">
										<h6>Font Color</h6>
											<div class="input-group flex-nowrap">
												<div class="input-group-prepend">
											    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
												</div>
												<input type="color" value="'.$cd_logo_fontcolor.'" class="form-control cd_logocolor" aria-describedby="addon-wrapping">
												<input type="hidden" id="cd_logocolor" value="'.$cd_logo_fontcolor.'" name="theme[cd_logo_fontcolor]">
											</div>
										</div>
										<div class="col-md-4">
											<h6>Font Weight</h6>
											<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_logo_fontweight]">
												<option value="100" '.(($cd_logo_fontweight == '100') ? "selected" : "").'>100 Thin</option>
												<option value="200" '.(($cd_logo_fontweight == '200') ? "selected" : "").'>200 Extra-light</option>
												<option value="300" '.(($cd_logo_fontweight == '300') ? "selected" : "").'>300 Light</option>
												<option value="400" '.(($cd_logo_fontweight == '400') ? "selected" : "").'>400 Regular</option>
												<option value="500" '.(($cd_logo_fontweight == '500') ? "selected" : "").'>500 Medium</option>
												<option value="600" '.(($cd_logo_fontweight == '600') ? "selected" : "").'>600 Semibold</option>
												<option value="700" '.(($cd_logo_fontweight == '700') ? "selected" : "").'>700 Bold</option>
												<option value="800" '.(($cd_logo_fontweight == '800') ? "selected" : "").'>800 Extra Bold</option>
												<option value="900" '.(($cd_logo_fontweight == '900') ? "selected" : "").'>900 Black</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row pt-2 imageLogo">
								<div class="col-md-4">
									<h6>Site logo variant</h6>
									<p>Upload site logo image</p>
								</div>
								<div class="col-md-4">									
									<h6>Site Logo</h6>
									<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="custom-file-input" name="inputGroupFile01" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									    </div>
									</div>									
								</div>
							</div>
							<div class="row pt-2 imageLogo">
								<div class="col-md-4">
									<h6>Site logo height</h6>
									<p>Select site logo height for variant devices</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Desktop Devices</h6>
											<div class="input-group mb-3">
												<input type="number" style="width:75%" name="theme[cd_logo_height_desktop]" value="'.$cd_logo_height_desktop.'">
												<div class="input-group-append" style="width:25%">
												   <span class="input-group-text" id="basic-addon2">px</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<h6>Tablet Devices</h6>
											<div class="input-group mb-3">
												<input type="number" name="theme[cd_logo_height_tab]" style="width:75%" value="'.$cd_logo_height_tab.'">
												<div class="input-group-append" style="width:25%">
												   <span class="input-group-text" id="basic-addon2">px</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<h6>Mobile Devices</h6>
											<div class="input-group mb-3">
												<input type="number" name="theme[cd_logo_height_mobile]" style="width:75%" value="'.$cd_logo_height_mobile.'">
												<div class="input-group-append" style="width:25%">
												   <span class="input-group-text" id="basic-addon2">px</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="typography" class="tab-pane fade">
					<div class="row p-2 border">
						<h5>Fonts Settings</h5>
					</div>	
					<div class="row pt-3">
						<div class="col-md-4">
							<h6>Paragraphs </h6>
							<p>Setup typography styles for paragraphs</p>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-4">
									<h6>Font Size</h6>
									<div class="input-group mb-3">
										<input type="number" name="theme[cd_para_fontsize]" value="'.$cd_para_fontsize.'" style="width:75%">
										<div class="input-group-append" style="width:25%">
										   <span class="input-group-text" id="basic-addon2">px</span>
										</div>
									</div>
								</div>		
								<div class="col-md-4">
									<h6>Font weight</h6>
									<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_para_fontweight]">
										<option value="100" '.(($cd_para_fontweight == '100') ? "selected" : "").'>100 Thin</option>
										<option value="200" '.(($cd_para_fontweight == '200') ? "selected" : "").'>200 Extra-light</option>
										<option value="300" '.(($cd_para_fontweight == '300') ? "selected" : "").'>300 Light</option>
										<option value="400" '.(($cd_para_fontweight == '400') ? "selected" : "").'>400 Regular</option>
										<option value="500" '.(($cd_para_fontweight == '500') ? "selected" : "").'>500 Medium</option>
										<option value="600" '.(($cd_para_fontweight == '600') ? "selected" : "").'>600 Semibold</option>
										<option value="700" '.(($cd_para_fontweight == '700') ? "selected" : "").'>700 Bold</option>
										<option value="800" '.(($cd_para_fontweight == '800') ? "selected" : "").'>800 Extra Bold</option>
										<option value="900" '.(($cd_para_fontweight == '900') ? "selected" : "").'>900 Black</option>
									</select>
								</div>
								<div class="col-md-4">
									<h6>Font Color</h6>
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
									    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
										</div>
										<input type="color" value="'.$cd_para_fontcolor.'" class="form-control cd_paracolor" aria-describedby="addon-wrapping">
										<input type="hidden" id="cd_paracolor" value="'.$cd_para_fontcolor.'" name="theme[cd_para_fontcolor]">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row pt-3">
						<div class="col-md-4">
							<h6>Headings</h6>
							<p>Setup typography styles for headings</p>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-4">
									<h6>Font Size</h6>
									<div class="input-group mb-3">
										<input type="number" name="theme[cd_heading_fontsize]" value="'.$cd_heading_fontsize.'" style="width:75%">
										<div class="input-group-append" style="width:25%">
										   <span class="input-group-text" id="basic-addon2">px</span>
										</div>
									</div>
								</div>			
								<div class="col-md-4">
									<h6>Font Weight</h6>
									<div class="input-group mb-3">
									<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_heading_fontweight]">
										<option value="100" '.(($cd_heading_fontweight == '100') ? "selected" : "").'>100 Thin</option>
										<option value="200" '.(($cd_heading_fontweight == '200') ? "selected" : "").'>200 Extra-light</option>
										<option value="300" '.(($cd_heading_fontweight == '300') ? "selected" : "").'>300 Light</option>
										<option value="400" '.(($cd_heading_fontweight == '400') ? "selected" : "").'>400 Regular</option>
										<option value="500" '.(($cd_heading_fontweight == '500') ? "selected" : "").'>500 Medium</option>
										<option value="600" '.(($cd_heading_fontweight == '600') ? "selected" : "").'>600 Semibold</option>
										<option value="700" '.(($cd_heading_fontweight == '700') ? "selected" : "").'>700 Bold</option>
										<option value="800" '.(($cd_heading_fontweight == '800') ? "selected" : "").'>800 Extra Bold</option>
										<option value="900" '.(($cd_heading_fontweight == '900') ? "selected" : "").'>900 Black</option>
									</select>
									</div>
								</div>
								<div class="col-md-4">
									<h6>Font Color</h6>
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
									    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
										</div>
										<input type="color" value="'.$cd_heading_fontcolor.'" class="form-control cd_headcolor" aria-describedby="addon-wrapping">
										<input type="hidden" id="cd_headcolor" value="'.$cd_heading_fontcolor.'" name="theme[cd_heading_fontcolor]">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="menu" class="tab-pane fade">
					<div class="row p-2 border">
						<h5>Menu Settings</h5>
					</div>
					<div class="row p-2">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#menu-general" class="nav-link p-2" data-toggle="tab">General</a></li>
							<li class="nav-item"><a href="#mobile-menu" class="nav-link p-2" data-toggle="tab">Mobile Menu</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="menu-general" class="tab-pane fade active show">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Menu Type</h6>
									<p>Choose menu type for all pages</p>
								</div>
								<div class="col-md-8">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_menu_type]" id="inlineRadio1" value="standard_menu"'.(($cd_menu_type == 'standard_menu') ? "checked" : "").'>
										<label class="form-check-label" for="inlineRadio1">Standard Menu</label>
									</div>
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" name="theme[cd_menu_type]" id="inlineRadio2" value="hamburger_menu"'.(($cd_menu_type == 'hamburger_menu') ? "checked" : "").'>
									  <label class="form-check-label" for="inlineRadio2">Humberger Menu</label>
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Menu Font Style</h6>
									<p>Set text style for your menu items </p>
								</div>
								<div class="col-md-4">
									<select style="width:50%" class="custom-select" name="theme[cd_menu_text_style_type]">
										<option value="" '.(($cd_menu_text_style_type == '') ? "selected" : "").'>Select</option>
										<option value="uppercase" '.(($cd_menu_text_style_type == 'uppercase') ? "selected" : "").'>uppercase</option>
										<option value="lowercase" '.(($cd_menu_text_style_type == 'lowercase') ? "selected" : "").'>lowercase</option>
										<option value="capitalize" '.(($cd_menu_text_style_type == 'capitalize') ? "selected" : "").'>capitalize</option>

									</select>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2 standard_menu">
								<div class="col-md-4">
									<h6>Standard Menu</h6>
									<p>Choose menu from already pre made menus</p>
								</div>
								<div class="col-md-8">
									<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_standard_menu]">
										<option value="primary" '.(($cd_standard_menu == 'primary') ? "selected" : "").'>Primary-Menu</option>
										<option value="secondary" '.(($cd_standard_menu == 'secondary') ? "selected" : "").'>Secondary-Menu</option>
									</select>
								</div>
							</div>
							<div class="row pt-2 standard_menu">
								<div class="col-md-4">
									<h6>Standard menu typography</h6>
									<p>Choose typography for standard menu</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Font Size</h6>
											<div class="input-group mb-3">
												<input type="number" name="theme[cd_menu_fontsize]" style="width:75%" value="'.$cd_menu_fontsize.'">
												<div class="input-group-append" style="width:25%">
												   <span class="input-group-text" id="basic-addon2">px</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<h6>Font Weight</h6>
											<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_menu_fontweight]">
												<option value="100" '.(($cd_menu_fontweight == '100') ? "selected" : "").'>100 Thin</option>
												<option value="200" '.(($cd_menu_fontweight == '200') ? "selected" : "").'>200 Extra-light</option>
												<option value="300" '.(($cd_menu_fontweight == '300') ? "selected" : "").'>300 Light</option>
												<option value="400" '.(($cd_menu_fontweight == '400') ? "selected" : "").'>400 Regular</option>
												<option value="500" '.(($cd_menu_fontweight == '500') ? "selected" : "").'>500 Medium</option>
												<option value="600" '.(($cd_menu_fontweight == '600') ? "selected" : "").'>600 Semibold</option>
												<option value="700" '.(($cd_menu_fontweight == '700') ? "selected" : "").'>700 Bold</option>
												<option value="800" '.(($cd_menu_fontweight == '800') ? "selected" : "").'>800 Extra Bold</option>
												<option value="900" '.(($cd_menu_fontweight == '900') ? "selected" : "").'>900 Black</option>
											</select>
										</div>
										<div class="col-md-4">
											<h6>Font Color</h6>
											<div class="input-group flex-nowrap">
												<div class="input-group-prepend">
											    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
												</div>
												<input type="color" value="'.$cd_menu_fontcolor.'" class="form-control cd_menucolor" aria-describedby="addon-wrapping">
												<input type="hidden" id="cd_menucolor" value="'.$cd_menu_fontcolor.'" name="theme[cd_menu_fontcolor]">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row pt-2 humberger_menu">
								<div class="col-md-4">
									<h6>Humberger Menu</h6>
									<p>Choose menu from already pre made menus</p>
								</div>
								<div class="col-md-8">
									<select class="custom-select" aria-label=".form-select-lg" name=theme[cd_humberger_menu]>
										<option value="primary" '.(($cd_humberger_menu == 'primary') ? "selected" : "").'>Primary-Menu</option>
										<option value="secondary" '.(($cd_humberger_menu == 'secondary') ? "selected" : "").'>Secondary-Menu</option>
									</select>
								</div>
							</div>
							<div class="row pt-2 humberger_menu">
								<div class="col-md-4">
									<h6>Humberger menu typography</h6>
									<p>Choose typography for humberger menu</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Font Size</h6>
											<div class="input-group mb-3">
												<input type="number" name="theme[cd_humberger_fontsize]" value="'.$cd_humberger_fontsize.'"style="width:75%">
												<div class="input-group-append" style="width:25%">
												   <span class="input-group-text" id="basic-addon2">px</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<h6>Font Color</h6>					
											<div class="input-group flex-nowrap">
												<div class="input-group-prepend">
											    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
												</div>
												<input type="color" value="'.$cd_humberger_fontcolor.'" class="form-control cd_humbergercolor" aria-describedby="addon-wrapping">
												<input type="hidden" id="cd_humbergercolor" value="'.$cd_humberger_fontcolor.'" name="theme[cd_humberger_fontcolor]">
											</div>
										</div>
										<div class="col-md-4">
											<h6>Font Weight</h6>
											<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_humberger_fontweight]">
												<option value="100" '.(($cd_humberger_fontweight == '100') ? "selected" : "").'>100 Thin</option>
												<option value="200" '.(($cd_humberger_fontweight == '200') ? "selected" : "").'>200 Extra-light</option>
												<option value="300" '.(($cd_humberger_fontweight == '300') ? "selected" : "").'>300 Light</option>
												<option value="400" '.(($cd_humberger_fontweight == '400') ? "selected" : "").'>400 Regular</option>
												<option value="500" '.(($cd_humberger_fontweight == '500') ? "selected" : "").'>500 Medium</option>
												<option value="600" '.(($cd_humberger_fontweight == '600') ? "selected" : "").'>600 Semibold</option>
												<option value="700" '.(($cd_humberger_fontweight == '700') ? "selected" : "").'>700 Bold</option>
												<option value="800" '.(($cd_humberger_fontweight == '800') ? "selected" : "").'>800 Extra Bold</option>
												<option value="900" '.(($cd_humberger_fontweight == '900') ? "selected" : "").'>900 Black</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="mobile-menu" class="tab-pane fade">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Mobile menu</h6>
									<p>Choose from already pre-made menu</p>
								</div>
								<div class="col-md-3">
									<select class="custom-select" aria-label=".form-select-lg" name=theme[cd_humberger_menu]>
										<option value="primary" '.(($cd_humberger_menu == 'primary') ? "selected" : "").'>Primary-Menu</option>
										<option value="secondary" '.(($cd_humberger_menu == 'secondary') ? "selected" : "").'>Secondary-Menu</option>
									</select>
								</div>
								<div class="col-md-5"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Mobile menu initial resolution</h6>
									<p>Resolution when mobile menu begin to appear</p>
								</div>
								<div class="col-md-8">
									<div class="input-group mb-3">
										<input type="number" name="theme[cd_mobileMenu_initial]" value="'.$cd_mobileMenu_initial.'">
										<div class="input-group-append">
										   <span class="input-group-text" id="basic-addon2">px</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="header" class="tab-pane fade">
					<div class="row p-2 border">
						<h5>Header Settings</h5>
					</div>
					<div class="row p-2">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#header-general" class="nav-link p-2" data-toggle="tab">General</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="header-general" class="tab-pane fade active show">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Sticky Header</h6>
									<p>Set Header to be sticky (fixed) on all pages</p>
								</div>
								<div class="col-md-4">
									<select style="width:50%" class="custom-select" name="theme[cd_stickyheader_check]">
										<option value="enable" '.(($cd_stickyheader_check == 'enable') ? "selected" : "").'>Enable</option>
										<option value="disable" '.(($cd_stickyheader_check == 'disable') ? "selected" : "").'>Disable</option>
									</select>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Header Layout</h6>
									<p>Choose header layout type for page header</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="theme[cd_header_type]" id="inlineRadio1" value="standard" '.(($cd_header_type == 'standard') ? "checked" : "").'>
											<label class="form-check-label" for="inlineRadio1">Standard</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="theme[cd_header_type]" id="inlineRadio2" value="center_menu" '.(($cd_header_type == 'center_menu') ? "checked" : "").'>
											<label class="form-check-label" for="inlineRadio2">With center menu</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="theme[cd_header_type]" id="inlineRadio3" value="center_logo" '.(($cd_header_type == 'center_logo') ? "checked" : "").'>
											<label class="form-check-label" for="inlineRadio3">with center logo</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Header Background</h6>
									<p>Choose background color for site-header</p>
								</div>
								<div class="col-md-4">									
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
									    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
										</div>
										<input type="color" value="'.$cd_header_bg.'" class="form-control header_bg" aria-describedby="addon-wrapping">
										<input type="hidden" id="header_bg" value="'.$cd_header_bg.'" name="theme[cd_header_bg]">
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Header height</h6>
									<p>Setup header height</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Desktop Devices</h6>
											<input type="number" name="theme[cd_header_heightdesktop]" value="'.$cd_header_heightdesktop.'">
										</div>
										<div class="col-md-4">
											<h6>Tablet Devices</h6>
											<input type="number" name="theme[cd_header_heighttab]" value="'.$cd_header_heighttab.'">
										</div>
										<div class="col-md-4">
											<h6>Mobile Devices</h6>
											<input type="number" name="theme[cd_header_heightmobile]" value="'.$cd_header_heightmobile.'">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="page" class="tab-pane fade">
					<div class="row p-2 border">
						<h5>Page Settings</h5>
					</div>
					<div class="row p-2">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#page-general" class="nav-link p-2" data-toggle="tab">General</a></li>
							<li class="nav-item"><a href="#page-headline" class="nav-link p-2" data-toggle="tab">Page Headline</a></li>
							<li class="nav-item"><a href="#breadcrumb" class="nav-link p-2" data-toggle="tab">Breadcrumbs</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="page-general" class="tab-pane fade active show">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Sidebar</h6>
									<p>Enable sidebar on all pages</p>
								</div>
								<div class="col-md-8">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_sidebar_check]" id="inlineRadio1" value="enable"'.(($cd_sidebar_check == 'enable') ? "checked" : "").'>
										<label class="form-check-label" for="inlineRadio1">Enable</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_sidebar_check]" id="inlineRadio2" value="disable"'.(($cd_sidebar_check == 'disable') ? "checked" : "").'>
										<label class="form-check-label" for="inlineRadio2">Disable</label>
									</div>
								</div>
								<div class="col-md-4">
									<h6>Top bar</h6>
									<p>Enable top bar </p>
								</div>
								<div class="col-md-8">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_topbar_check]" id="cd_topbar_check1" value="enable"'.(($cd_topbar_check == 'enable') ? "checked" : "").'>
										<label class="form-check-label" for="cd_topbar_check1">Enable</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_topbar_check]" id="cd_topbar_check2" value="disable"'.(($cd_topbar_check == 'disable') ? "checked" : "").'>
										<label class="form-check-label" for="cd_topbar_check2">Disable</label>
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Page wrapper width</h6>
									<p>Define the container wrapper width</p>
								</div>
								<div class="col-md-4">
									<div class="input-group flex-nowrap">
										<input type="number" name="theme[cd_pagewrapper_width]" value="'.$cd_pagewrapper_width.'">
									  	<div class="input-group-append">
										   <span class="input-group-text" id="basic-addon2">px</span>
										</div>
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>							
						</div>
						<div id="page-headline" class="tab-pane fade">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Page headline</h6>
									<p>Show page Headline on all pages</p>
								</div>
								<div class="col-md-3">
									<select class="custom-select" name="theme[cd_page_headline_check]">						
										<option value="enable" '.(($cd_page_headline_check == 'enable') ? "selected" : "").'>Enable</option>
										<option value="disable" '.(($cd_page_headline_check == 'disable') ? "selected" : "").'>Disable</option>
									</select>
								</div>
								<div class="col-md-5"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Page headline alignment</h6>
									<p>Choose page headline content position</p>
								</div>
								<div class="col-md-8">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_pagetitle_align]" id="inlineRadio1" value="left">
										<label class="form-check-label" for="inlineRadio1">Left</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_pagetitle_align]" id="inlineRadio2" value="center">
										<label class="form-check-label" for="inlineRadio2">Center</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="theme[cd_pagetitle_align]" id="inlineRadio3" value="right">
										<label class="form-check-label" for="inlineRadio3">Right</label>
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Page headline height</h6>
									<p>Setup page headline height</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Desktop Devices</h6>
											<input type="number" name="theme[cd_pageTitle_heightDsk]" value="'.$cd_pageTitle_heightDsk.'">
										</div>
										<div class="col-md-4">
											<h6>Tablet Devices</h6>
											<input type="number" name="theme[cd_pageTitle_heightTab]" value="'.$cd_pageTitle_heightTab.'">
										</div>
										<div class="col-md-4">
											<h6>Mobile Devices</h6>
											<input type="number" name="theme[cd_pageTitle_heightmob]" value="'.$cd_pageTitle_heightMob.'">
										</div>
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Page Title typography</h6>
									<p>Choose title typography</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Font Size</h6>
											<input type="number" name="theme[cd_pageTitle_fontSize]" value="'.$cd_pageTitle_fontSize.'">
										</div>
										<div class="col-md-4">
											<h6>Font Weight</h6>										
											<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_pageTitle_fontweight]">
												<option value="'.$cd_pageTitle_fontweight.'" selected="">'.$cd_pageTitle_fontweight.'</option>
												<option value="100">100 Thin</option>
												<option value="200">200 Extra-light</option>
												<option value="300">300 Light</option>
												<option value="400">400 Regular</option>
												<option value="500">500 Medium</option>
												<option value="600">600 Semibold</option>
												<option value="700">700 Bold</option>
												<option value="800">800 Extra Bold</option>
												<option value="900">900 Black</option>
											</select>
										</div>
										<div class="col-md-4">
											<h6>Font Color</h6>
											<div class="input-group flex-nowrap">
												<div class="input-group-prepend">
											    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
												</div>
												<input type="color" class="form-control pageTitle_color" value="'.$cd_pageTitle_fontcolor.'" aria-describedby="addon-wrapping">
												<input type="hidden" id="page_titlecolor" value="'.$cd_pageTitle_fontcolor.'" name="theme[cd_pageTitle_fontcolor]">
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div id="breadcrumb" class="tab-pane fade">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Breadcrumbs</h6>
									<p>Show breadcrumb on all pages?</p>
								</div>
								<div class="col-md-3">									
									  <select class="custom-select" aria-label=".form-select-lg" name="theme[cd_breadcumb_check]">
									  	<option value="enable" '.(($cd_breadcumb_check == 'enable') ? "selected" : "").'>Enable</option>
										<option value="disable" '.(($cd_breadcumb_check == 'disable') ? "selected" : "").'>Disable</option>
									  </select>
								</div>
								<div class="col-md-5"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Breadcrumbs typography</h6>
									<p>Choose breadcrumb typography</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Font Size</h6>
											<input type="number" name="theme[cd_breadcumb_fontSize]" value="'.$cd_breadcumb_fontSize.'">
										</div>
										<div class="col-md-4">
											<h6>Font Color</h6>
											<div class="input-group flex-nowrap">
												<div class="input-group-prepend">
											    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
												</div>
												<input type="color" class="form-control pageTitle_color" value="'.$cd_breadcumb_fontColor.'" aria-describedby="addon-wrapping">
												<input type="hidden" id="page_titlecolor" value="'.$cd_breadcumb_fontColor.'" name="theme[cd_breadcumb_fontColor]">
											</div>
										</div>
										<div class="col-md-4">
											<h6>Font Weight</h6>
											<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_breadcumb_fontweight]">
												<option value="'.$cd_breadcumb_fontweight.'" selected="">'.$cd_breadcumb_fontweight.'</option>
												<option value="100">100 Thin</option>
												<option value="200">200 Extra-light</option>
												<option value="300">300 Light</option>
												<option value="400">400 Regular</option>
												<option value="500">500 Medium</option>
												<option value="600">600 Semibold</option>
												<option value="700">700 Bold</option>
												<option value="800">800 Extra Bold</option>
												<option value="900">900 Black</option>
											</select>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div id="footer" class="tab-pane fade">
					<div class="row p-2 border">
						<h5>Footer Settings</h5>
					</div>
					<div class="row p-2">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#footer-general" class="nav-link p-2">General Settings</a></li>
						</ul>
					</div>
						<div id="footer-general" class="tab-pane fade active show">
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Sticky footer</h6>
									<p>Set footer to be sticky (fixed) on all pages</p>
								</div>
								<div class="col-md-4">
									<select style="width:50%" class="custom-select" name="theme[cd_stickyfooter_check]">
										<option value="enable" '.(($cd_stickyfooter_check == 'enable') ? "selected" : "").'>Enable</option>
										<option value="disable" '.(($cd_stickyfooter_check == 'disable') ? "selected" : "").'>Disable</option>
									</select>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Copyright bar content</h6>
									<p>Add some content to copyright bar.</p>
								</div>
								<div class="col-md-8">
									<input type="text" name="theme[cd_footer_content]" value="'.$cd_footer_content.'"style="width:80%">
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Copyright bar typography</h6>
									<p>Choose copyright bar typography</p>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<h6>Font Size</h6>
											<input type="number" name="theme[cd_footer_fontSize]" value="'.$cd_footer_fontSize.'">
										</div>
										<div class="col-md-4">
											<h6>Font Weight</h6>
											<select class="custom-select" aria-label=".form-select-lg" name="theme[cd_footer_fontweight]">
												<option value="100" '.(($cd_footer_fontweight == '100') ? "selected" : "").'>100 Thin</option>
												<option value="200" '.(($cd_footer_fontweight == '200') ? "selected" : "").'>200 Extra-light</option>
												<option value="300" '.(($cd_footer_fontweight == '300') ? "selected" : "").'>300 Light</option>
												<option value="400" '.(($cd_footer_fontweight == '400') ? "selected" : "").'>400 Regular</option>
												<option value="500" '.(($cd_footer_fontweight == '500') ? "selected" : "").'>500 Medium</option>
												<option value="600" '.(($cd_footer_fontweight == '600') ? "selected" : "").'>600 Semibold</option>
												<option value="700" '.(($cd_footer_fontweight == '700') ? "selected" : "").'>700 Bold</option>
												<option value="800" '.(($cd_footer_fontweight == '800') ? "selected" : "").'>800 Extra Bold</option>
												<option value="900" '.(($cd_footer_fontweight == '900') ? "selected" : "").'>900 Black</option>
											</select>
										</div>
										<div class="col-md-4">
											<h6>Font Color</h6>
											<div class="input-group flex-nowrap">
												<div class="input-group-prepend">
											    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
												</div>
												<input type="color" class="form-control footer_fontColor" value="'.$cd_footer_fontColor.'" aria-describedby="addon-wrapping">
												<input type="hidden" id="footer_fontColor" name="theme[cd_footer_fontColor]" value="'.$cd_footer_fontColor.'">
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Footer Background Color</h6>
									<p>Choose footer background color</p>
								</div>
								<div class="col-md-4">
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
									    	<span class="input-group-text" id="addon-wrapping">Select Color</span>
										</div>
										<input type="color" class="form-control footer_bg_color" value="'.$cd_footer_background_color.'" aria-describedby="addon-wrapping">
										<input type="hidden" id="footer_bg_color" name="theme[cd_footer_background_color]" value="'.$cd_footer_background_color.'">
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col-md-4">
									<h6>Box Layout</h6>
									<p>Enable / Disable Box Layout for footer section</p>
								</div>
								<div class="col-md-4">
									<select style="width:50%" class="custom-select" name="theme[cd_footer_boxlayout_check]">
										<option value="enable" '.(($cd_footer_boxlayout_check == 'enable') ? "selected" : "").'>Enable</option>
										<option value="disable" '.(($cd_footer_boxlayout_check == 'disable') ? "selected" : "").'>Disable</option>
									</select>
								</div>
								<div class="col-md-4"></div>
							</div>
						</div>
					
				</div>
				<div id="custom_css" class="tab-pane fade">
					<div class="row p-2 border">
						<h5>Custom CSS</h5>
					</div>
					<div class="row pt-2">
						<div class="col-md-4">
							<h6>Custom Css Styles</h6>
							<p>Write a custom css code here</p>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <textarea class="form-control" id="formControlTextarea2" rows="8" name="theme[cd_custom_css]">'.$cd_custom_css.'</textarea>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</form>
	</div>';
?>