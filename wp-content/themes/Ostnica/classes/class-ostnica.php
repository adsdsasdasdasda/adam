<?php
if(!class_exists('ostnica')){
	class ostnica{

		public function get_header_type($header_type){
			switch ($header_type) {
		       	case 'standard':
		            include get_template_directory() .'/inc/header/header1.php';
		         	break;
		       	case 'center_menu':
		            include get_template_directory() .'/inc/header/header2.php';
		         	break;
		       	case 'center_logo':
		            include get_template_directory() .'/inc/header/header3.php';       
		         	break;
		       	default:include get_template_directory() .'/inc/header/header1.php';
	         		break;
	     	}  
		}
	}
}

?>