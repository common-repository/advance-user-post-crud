<?php
/*
 * Plugin Name: Advance user post CRUD
 * Plugin URI: https://wordpress.org/plugins/advance-user-post-crud/
 * Description: Advance user post CRUD lets you easily manage post.
 * Version: 1.2
 * Author: KrishaWeb
 * Author URI: https://www.krishaweb.com
 * License: GPL2
 * Text Domain:     advance-user-post-crud
 * Domain Path:     /languages
*/

if ( ! defined( 'ABSPATH' ) ) exit;
// Require plugin core file.
require_once 'adv_user_widget.php';
require_once 'functions.php';

define( 'ADVANCE_USER_POST_CRUD', '1.2' );

/**
 * Activation
 */
function adv_user_crud_active() {
	// Code here
}
register_activation_hook(__FILE__,'adv_user_crud_active');

/**
 * Deactivation
 */
function adv_user_crud_deactivates() {
	// Code here
}
register_deactivation_hook( __FILE__,'adv_user_crud_deactivates');

/**
 * Plugin textdomain.
 */
function acf_cf7_textdomain() {
	load_plugin_textdomain( 'advance-user-post-crud', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'acf_cf7_textdomain' );
