<?php

 /* Add a Setting option page */
function becfs_add_admin_page(){
	add_menu_page('Block Email in Contact Form 7','Blacklist Email CF7','manage_options','setting_becf7','block_email_cf7_settings', plugins_url( 'block-email-cf7/img/block-email-cf7-icon.png' ),58);
	
	add_action('admin_init','block_email_cf7_register_setting');
}
add_action('admin_menu','becfs_add_admin_page');

//callback function of setting function of add_menu_page()
function block_email_cf7_settings(){
	
	// Code for create admin page
	 echo '<h1>Contact Form 7 - Blacklist Unwanted Email</h1>';
	
	settings_errors(); 
?>
	<div class="becf7-admin-form">
		<form action="options.php" method="post" class="becf7-admin-form" id="becf7-admin-form-id">	
			<?php settings_fields('becf7-group') ;?>
			<?php do_settings_sections('setting_becf7'); ?>
			
			<?php submit_button('Save Changes','primary','pro-pic-submit-btn'); ?>		
			
		</form>

	</div>
<?php
}

//callback function of setting function of add_action inside add_menu_page()
function block_email_cf7_register_setting(){
	register_setting('becf7-group','form_email_fields','sanitize_form_email_fields');	
	register_setting('becf7-group','display_error_message','sanitize_display_error_message');
	register_setting('becf7-group','list_of_block_domains', 'sanitize_list_of_block_domains');
	
	add_settings_section('becf7-options','Please fill the below setting options','block_email_cf7_options','setting_becf7');
	
	add_settings_field('email_fields','Email field name list to be validate','becf7_form_list_callback','setting_becf7','becf7-options');
	add_settings_field('error_message','Error message text','becf7_error_message_callback','setting_becf7','becf7-options');
	add_settings_field('list_block_domains','Domains list to be blacklist','becf7_list_block_domains_callback','setting_becf7','becf7-options');
	

}

//callback function of add_settings_section()
function block_email_cf7_options(){
	// For testing 
	echo '<b>Watch a demo and setting video <a href="http://rebrand.ly/cf7buepd" target="_blank">here</a> </b>';
	echo '<br><br>';
	echo 'Please click here for <a href="http://rebrand.ly/loa4750fasd" target="_blank">List of 4750+ free and spam domains</a> ';
}

function becf7_form_list_callback(){
	$list_of_email_fields=esc_attr(get_option('form_email_fields'));	
	echo '<input type="text" class="becf7-form-field" name="form_email_fields" value="'.$list_of_email_fields.'" placeholder="Email field name to be validate">
	<p class="becf-field-instructions">Please add email field names that you wish to validate, separated by a comma. E.g. your-email, company-email </p>' ;		  		
}
function becf7_error_message_callback(){
	$error_message=esc_attr(get_option('display_error_message'));		
	echo '<input type="text" class="becf7-form-field" name="display_error_message" value="'.$error_message.'" placeholder="Error message to be display">
	<p class="becf-field-instructions">Error message to be displayed on conflicts.</p>' ;		  		
}
function becf7_list_block_domains_callback(){
	$block_domain_list=esc_attr(get_option('list_of_block_domains'));
	$spit_domains=explode(",",$block_domain_list);
	echo '<textarea class="becf7-form-field" name="list_of_block_domains" placeholder="List of domains wish to blacklist">'.$block_domain_list.'</textarea>
	<p class="becf-field-instructions">Add list of domains you wish to blacklist/block, separated by a comma. E.g. gmail.com, yahoo.com, hotmial.com, etc.</p>' ;
    //echo BECFS_PATH;
	//echo BECFS_URL;
}

//sanitize functions
function sanitize_form_email_fields($input){
	$output=sanitize_text_field($input)	;
	return $output;
}

function sanitize_display_error_message($input){
	$output=sanitize_text_field($input)	;
	return $output;
}

function sanitize_list_of_block_domains($input){
	$output=sanitize_textarea_field($input);
	return $output;
}