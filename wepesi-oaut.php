<?php
/ * Plugin Name: Wepesi Ouath
  * Description: Oauth
  */

function wepesi_oauth_endpoint($vars = ''){
	add_rewrite_endpoint( 'oauth', EP_ROOT );
	return $vars;
}

function wepesi_oauth_redirect($vars = ''){
	print json_encode($vars)
	return $vars;
}

add_action('init', 'wepesi_oauth_endpoint');
add_filter('request', 'wepesi_oauth_redirect');
