<?php
/*
Plugin Name: Contact Form 7 - Blacklist Unwanted Email
Description: This is a free add-on plugin for contact form 7, which validates the email field and restrict unwanted email submission as well as allowed only business email submission.
Tags: Blacklist email domain for contact form 7, Block email domain for contact form 7, validate email domain for contact form 7, restrict email domain submission for contact form 7, free domain block in contact form 7, contact form 7, cf7, email validation in cf7, contact form addon, cf7 addon, block competitor email domain, cf7 plugins, contact form 7 plugin, restrict spam submission in contact form 7, spam email block in cf7, allowed only business email, allowed only company email.
Version:     1.1.0
Author:      Aniket Bahalkar
Plugin URI: http://wpstudio.org/
License:     GPL2 etc
*/



// Make sure we don't expose any info if called directly, this code help to protect access plugin from hackers
	if ( !function_exists( 'add_action' ) ) {
		echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
		exit;
	}
/*all hook added here*/

	
// Some constant define
//conastant for file path
 define('BECFS_PATH',plugin_dir_path(__FILE__));
 define('BECFS_URL',__FILE__);


require_once(BECFS_PATH.'/inc/activation.php');
register_deactivation_hook(__FILE__, 'becf7_deactivation'); 
require_once(BECFS_PATH.'/inc/deactivation.php');

//below hook take two parameter file name and function name to call
//below function call only when plugin is fully activated and this plugin is call from the activation.php
//this is because if cf7 not activated and this filter call getting error hence only call when cf7 is activated

function activate_setting_shortcode(){
	add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links' );
}


