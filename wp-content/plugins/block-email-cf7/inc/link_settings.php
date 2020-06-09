<?php
//setting link to plugin page

function add_action_links ( $links ) {
 $mylinks = array(
 '<a href="' . admin_url( '/admin.php?page=setting_becf7' ) . '">Settings</a>',
 );
return array_merge(  $mylinks, $links);
}
