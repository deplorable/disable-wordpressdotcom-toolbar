<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.google.com
 * @since             1.0.0
 * @package           Disable_Wordpressdotcom_Toolbar
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Wordpress.com Toolbar
 * Plugin URI:        https://github.com/deplorable
 * Description:       Disables the Wordpress.com Toolbar provided by Jetpack.
 * Version:           1.0.0
 * Author:            deplorable
 * Author URI:        https://github.com/deplorable
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disable-wordpressdotcom-toolbar
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
define( 'DISABLE_WORDPRESSDOTCOM_TOOLBAR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-disable-wordpressdotcom-toolbar-activator.php
 */
function activate_disable_wordpressdotcom_toolbar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-disable-wordpressdotcom-toolbar-activator.php';
	Disable_Wordpressdotcom_Toolbar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-disable-wordpressdotcom-toolbar-deactivator.php
 */
function deactivate_disable_wordpressdotcom_toolbar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-disable-wordpressdotcom-toolbar-deactivator.php';
	Disable_Wordpressdotcom_Toolbar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_disable_wordpressdotcom_toolbar' );
register_deactivation_hook( __FILE__, 'deactivate_disable_wordpressdotcom_toolbar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-disable-wordpressdotcom-toolbar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_disable_wordpressdotcom_toolbar() {

	$plugin = new Disable_Wordpressdotcom_Toolbar();
	$plugin->run();

}
run_disable_wordpressdotcom_toolbar();
