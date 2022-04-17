<?php
class theme_setting{

	public static function save_theme_setting($options = array()){
		foreach ($options as $key => $value) {
			if(get_option( $key) != $value){ //need to change the condn
				
				update_option(sanitize_text_field($key),sanitize_text_field($value));
			}
			else{
				add_option(sanitize_text_field($key),sanitize_text_field($value));
			}
			// get_option()
		}
	}
	public static function update_image($keyname, $imgname){
		if(get_option( $keyname)){
			update_option(sanitize_key($keyname),sanitize_text_field($imgname));
		}
		else{
			add_option(sanitize_key($keyname),sanitize_text_field($imgname));
		}
	}

	public static function get_theme_setting($key){
		return get_option( sanitize_key($key), 'default_value');
	}
}

?>