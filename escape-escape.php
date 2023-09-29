<?php
/**
 * Plugin Name: Escape Escape
 * Description: Press escape twice to log in or out.
 * Version: 0.01
 * Author: Sheri Bigelow
 * Author URI: http://designsimply.com/
 * License: GPLv2 or later
 */

add_action( 'wp_enqueue_scripts', 'escape_escape_enqueue_scripts' );
add_action( 'admin_enqueue_scripts', 'escape_escape_enqueue_scripts' );
function escape_escape_enqueue_scripts() {
	wp_enqueue_script( 'escape-escape', plugins_url( 'escape-escape.js', __FILE__ ), 1 );
}

add_action( 'wp_logout', 'escape_escape_go_home_after_logout' );
function escape_escape_go_home_after_logout(){
	wp_safe_redirect( home_url() );
	exit;
}
