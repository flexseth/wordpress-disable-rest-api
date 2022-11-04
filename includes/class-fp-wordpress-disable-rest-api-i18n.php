<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://flexperception.com
 * @since      1.0.0
 *
 * @package    Fp_Wordpress_Disable_Rest_Api
 * @subpackage Fp_Wordpress_Disable_Rest_Api/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fp_Wordpress_Disable_Rest_Api
 * @subpackage Fp_Wordpress_Disable_Rest_Api/includes
 * @author     Seth Miller <seth@flexperception.com>
 */
class Fp_Wordpress_Disable_Rest_Api_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fp-wordpress-disable-rest-api',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
