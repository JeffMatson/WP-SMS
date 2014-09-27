<?php
/**
 * Plugin Name: WP SMS Notifications
 * Plugin URI: http://jeffmatson.net/wp-sms
 * Description: Send SMS notifications when things are updated.
 * Version: 2.0
 * Author: Jeff Matson
 * Author URI: http://jeffmatson.net
 * License: GPL2
 */
$directory = plugin_dir_path( __FILE__ );
require_once $directory . '/functions.php';
require_once $directory . '/wp-sms-options.php';
require_once $directory . '/carrier-list.php';
require_once $directory . '/alerts/alerts.php';


function load_wp_sms_css() {
	wp_register_style( 'wp-sms-css', plugins_url('/css/wp-sms.css', __FILE__) );
	wp_enqueue_style( 'wp-sms-css' );
}
add_action( 'admin_enqueue_scripts', 'load_wp_sms_css' );