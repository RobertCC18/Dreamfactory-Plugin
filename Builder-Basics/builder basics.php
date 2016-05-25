<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.robertcrawford.co.nf
 * @since             1.0.0
 * @package           Builder_Basics
 *
 * @wordpress-plugin
 * Plugin Name:       Builder-Basics
 * Plugin URI:        www.robertcrawford97.co.nf
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Robert Crawford
 * Author URI:        www.robertcrawford.co.nf
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       builder basics
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-builder basics-activator.php
 */
function activate_builder basics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-builder basics-activator.php';
	Builder_Basics_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-builder basics-deactivator.php
 */
function deactivate_builder basics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-builder basics-deactivator.php';
	Builder_Basics_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_builder basics' );
register_deactivation_hook( __FILE__, 'deactivate_builder basics' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-builder basics.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_builder basics() {

	$plugin = new Builder_Basics();
	$plugin->run();

}
run_builder basics();
