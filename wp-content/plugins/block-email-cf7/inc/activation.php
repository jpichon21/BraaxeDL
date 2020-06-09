<?php

add_action('plugins_loaded', 'contact_form_7_confirm_email', 10);
function contact_form_7_confirm_email() {
	global $pagenow;
	if(function_exists('wpcf7_add_shortcode')) {
        //wpcf7_add_shortcode( array( 'confirm_email', 'confirm_email*' ), 'wpcf7_text_validation_filter_fun', true );
        add_filter( 'wpcf7_validate_text', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_text*', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_url', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_url*', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_tel', 'wpcf7_text_validation_filter_fun', 10, 2 );
		add_filter( 'wpcf7_validate_tel*', 'wpcf7_text_validation_filter_fun', 10, 2 );
		
		//enqueue style
		
		//wp_enqueue_style( 'becf7_setting_css', plugins_url('/css/style.css',BECFS_URL));
		require_once(BECFS_PATH.'/inc/settings.php');
		require_once(BECFS_PATH.'/inc/link_settings.php');
		require_once(BECFS_PATH.'/inc/validate.php');
		require_once(BECFS_PATH.'/inc/cfseven-block-css-enqueue.php');
		
		//this is calling of function which call link setting filter
		if(function_exists('activate_setting_shortcode')){
			activate_setting_shortcode();
			add_action( 'admin_enqueue_scripts', 'cfseven_block_email_css_enqueue' );
		}
		
	} else {
		if($pagenow != 'plugins.php') { return; }
		add_action('admin_notices', 'cfconfirm_emailfieldserror');
		wp_enqueue_script('thickbox');
		function cfconfirm_emailfieldserror() {
			$out = '<div class="error" id="messages"><p>';
			$out .= 'The Contact Form 7 plugin must be installed and activated for the Contact Form 7 - Blacklist Unwanted Email plugin to work. <a href="'.admin_url('plugin-install.php?tab=plugin-information&plugin=contact-form-7&from=plugins&TB_iframe=true&width=600&height=550').'" class="thickbox" title="Contact Form 7">Install Now.</a>';
			$out .= '</p></div>';
			echo $out;
		}
	}
}

