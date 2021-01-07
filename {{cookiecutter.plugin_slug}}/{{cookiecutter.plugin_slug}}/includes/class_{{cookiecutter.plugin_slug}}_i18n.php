<?php

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @package    {{cookiecutter.plugin_slug}}
 * @subpackage {{cookiecutter.plugin_slug}}/includes
 * @author     {{cookiecutter.author_name}}
 */
class {{cookiecutter.plugin_slug.capitalize()}}_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'{{cookiecutter.plugin_slug}}',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
