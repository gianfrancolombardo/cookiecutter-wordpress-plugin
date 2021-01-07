<?php

/**
 * {{cookiecutter.plugin_name}}
 *
 *
 * @link              {{cookiecutter.plugin_url}}
 * @since             {{cookiecutter.plugin_version}}
 * @package           {{cookiecutter.plugin_slug}}
 *
 * @wordpress-plugin
 * Plugin Name:       {{cookiecutter.plugin_name}}
 * Plugin URI:        {{cookiecutter.plugin_url}}
 * Description:       {{cookiecutter.plugin_descripcion}}
 * Version:           {{cookiecutter.plugin_version}}
 * Author:            {{cookiecutter.author_name}}
 * Author URI:        http://example.com/
 * License:           {{cookiecutter.open_source_license}}
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
define( '{{cookiecutter.plugin_slug}}_VERSION', '{{cookiecutter.plugin_version}}' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class_{{cookiecutter.plugin_slug}}_activator.php
 */
function activate_{{cookiecutter.plugin_slug}}() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class_{{cookiecutter.plugin_slug}}_activator.php';
	{{cookiecutter.plugin_slug.capitalize()}}_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class_{{cookiecutter.plugin_slug}}_deactivator.php
 */
function deactivate_{{cookiecutter.plugin_slug}}() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class_{{cookiecutter.plugin_slug}}_deactivator.php';
	{{cookiecutter.plugin_slug.capitalize()}}_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_{{cookiecutter.plugin_slug}}' );
register_deactivation_hook( __FILE__, 'deactivate_{{cookiecutter.plugin_slug}}' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class_{{cookiecutter.plugin_slug}}.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_{{cookiecutter.plugin_slug}}() {

	$plugin = new {{cookiecutter.plugin_slug.capitalize()}}();
	$plugin->run();

}
run_{{cookiecutter.plugin_slug}}();
