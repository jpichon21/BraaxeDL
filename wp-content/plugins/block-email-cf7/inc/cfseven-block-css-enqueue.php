<?php 

function cfseven_block_email_css_enqueue(){

wp_enqueue_style( 'becfs-setting', plugins_url('block-email-cf7/css/style.css', 'BECFS_PATH'));

}