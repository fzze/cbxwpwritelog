<?php

	/**
	 *
	 * @link              https://codeboxr.com
	 * @since             1.0.0
	 * @package           cbxwpwritelog
	 *
	 * @wordpress-plugin
	 * Plugin Name:       CBX WP Write Log
	 * Plugin URI:        https://codeboxr.com
	 * Description:       This plugin adds a helper function to write log in wordpress debug file
	 * Version:           1.0.0
	 * Author:            Codeboxr
	 * Author URI:        https://codeboxr.com
	 * License:           GPL-2.0+
	 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
	 * Text Domain:       cbxwpwritelog
	 * Domain Path:       /languages
	 */

	// If this file is called directly, abort.
	if ( ! defined( 'WPINC' ) ) {
		die;
	}


	defined( 'CBXWPWRITELOG_PLUGIN_NAME' ) or define( 'CBXWPWRITELOG_PLUGIN_NAME', 'cbxwpwritelog' );
	defined( 'CBXWPWRITELOG_PLUGIN_VERSION' ) or define( 'CBXWPWRITELOG_PLUGIN_VERSION', '1.0.0' );
	defined( 'CBXWPWRITELOG_BASE_NAME' ) or define( 'CBXWPWRITELOG_BASE_NAME', plugin_basename( __FILE__ ) );
	defined( 'CBXWPWRITELOG_ROOT_PATH' ) or define( 'CBXWPWRITELOG_ROOT_PATH', plugin_dir_path( __FILE__ ) );
	defined( 'CBXWPWRITELOG_ROOT_URL' ) or define( 'CBXWPWRITELOG_ROOT_URL', plugin_dir_url( __FILE__ ) );

	if ( ! function_exists( 'write_log' ) ) {
		function write_log( $log ) {
			if ( true === WP_DEBUG ) {
				if ( is_array( $log ) || is_object( $log ) ) {
					error_log( print_r( $log, true ) );
				} else {
					error_log( $log );
				}
			}
		}
	}