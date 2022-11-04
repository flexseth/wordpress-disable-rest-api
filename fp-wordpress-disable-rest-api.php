<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://flexperception.com
 * @since             1.0.0
 * @package           Fp_Wordpress_Disable_Rest_Api
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Disable REST API
 * Plugin URI:        https://https://github.com/flexseth/wordpress-disable-rest-api
 * Description:       Disables the built in REST API for WordPress. 
 * Version:           1.0.0
 * Author:            Seth Miller
 * Author URI:        https://flexperception.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fp-wordpress-disable-rest-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FP_WORDPRESS_DISABLE_REST_API_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fp-wordpress-disable-rest-api-activator.php
 */
function activate_fp_wordpress_disable_rest_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fp-wordpress-disable-rest-api-activator.php';
	Fp_Wordpress_Disable_Rest_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fp-wordpress-disable-rest-api-deactivator.php
 */
function deactivate_fp_wordpress_disable_rest_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fp-wordpress-disable-rest-api-deactivator.php';
	Fp_Wordpress_Disable_Rest_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fp_wordpress_disable_rest_api' );
register_deactivation_hook( __FILE__, 'deactivate_fp_wordpress_disable_rest_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fp-wordpress-disable-rest-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fp_wordpress_disable_rest_api() {

	$plugin = new Fp_Wordpress_Disable_Rest_Api();
	$plugin->run();

}
run_fp_wordpress_disable_rest_api();

function disable_rest($access) {
	return new WP_Error('access denied', 'REST API Disabled', ['status' => 403]);
}
add_filter('rest_authentication_errors', 'disable_rest');
