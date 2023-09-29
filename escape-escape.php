<?php
/**
 * Plugin Name: Escape Escape
 * Description: Press escape twice to log in or out.
 * Version: 0.01
 * Author: Sheri Bigelow
 * Author URI: http://designsimply.com/
 * License: GPLv2 or later
 */

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'admin_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
	wp_enqueue_script( 'escape-escape', plugins_url( 'escape-escape.js', __FILE__ ), 1 );
	wp_enqueue_script( 'mousetrap', 'https://craig.global.ssl.fastly.net/js/mousetrap/mousetrap.min.js', 1 );
}
