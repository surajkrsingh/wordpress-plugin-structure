<?php
/**
 * Test
 *
 * @package test
 * @author  Surajkumar Singh
 * @license GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: test
 * Plugin URI:  https://github.com/surajkrsingh
 * Description:  This is demo plugins created for internal assignment.
 * Version:     1.0.0
 * Author:      Surajkumar Singh
 * Author URI:  https://profiles.wordpress.org/surajkumarsingh/
 * Text Domain: wp-book
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file called directly then abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'TEST_PLUGIN_VERSION' ) ) {
	define( 'WPB_PLUGIN_VERSION', '1.0.0' );
}

if ( ! defined( 'TEST_PLUGIN_DIR' ) ) {
	define( 'TEST_PLUGIN_DIR', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'TEST_PLUGIN_PATH' ) ) {
	define( 'TEST_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'TEST_PLUGIN_DIR_NAME' ) ) {
	define( 'TEST_PLUGIN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );
}

require_once TEST_PLUGIN_PATH . '/includes/class-test.php';

/**
 * Activation of plugin.
 */
function test_activation() {
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, ' test_activation ' );

/**
 * Deactivation of plugin.
 */
function test_deactivation() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, ' test_deactivation ' );
