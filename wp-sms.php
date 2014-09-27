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


/**
 * Enqueue plugin styles
 */
function WP_SMS_include_styles() {
	// Respects SSL, Style.css is relative to the current file
	wp_register_style( 'WP-SMS-option-styles', plugins_url('WP-SMS-styles.css', __FILE__) );
	wp_enqueue_style( 'WP-SMS-option-styles' );
}

add_action( 'admin_enqueue_scripts', 'WP_SMS_include_styles' );
