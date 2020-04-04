<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.google.com
 * @since      1.0.0
 *
 * @package    Disable_Wordpressdotcom_Toolbar
 * @subpackage Disable_Wordpressdotcom_Toolbar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Disable_Wordpressdotcom_Toolbar
 * @subpackage Disable_Wordpressdotcom_Toolbar/includes
 * @author     Damian <codebogan@gmail.com>
 */
class Disable_Wordpressdotcom_Toolbar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'disable-wordpressdotcom-toolbar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
