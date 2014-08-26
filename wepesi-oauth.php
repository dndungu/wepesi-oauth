<?php

/*
Plugin Name: Wepesi Ouath
Description: Oauth
*/

add_action('init', 'wepesi_oauth_init');
function wepesi_oauth_init($vars = ''){
	add_rewrite_endpoint( 'oauth', EP_ROOT );
	return $vars;
}

add_filter('request', 'wepesi_oauth_request');
function wepesi_oauth_request($vars = ''){
	print json_encode($vars);
	return $vars;
}
