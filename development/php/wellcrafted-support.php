<?php
/**
 * Plugin Name: Wellcrafted Settings
 * Plugin URI: http://msherstobitow.com/plugins/wellcraftedcore
 * Description: The plugin allows to create settings panels for the theme and any types of posts
 * Version: 1.0
 * Author: Maksim Sherstobitow
 * Author URI: http://msherstobitow.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */ 

/**
 * Wellcrafted Support initializer
 * 
 * @package Wellcrafted\Support
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

/**
 * Initilize the plugin on Wellcrafted Core action call.
 *
 * @since  1.0.0
 */
add_action( 'wellcrafted_core_initilized', 'wellcrafted_settings_initialize' );

function wellcrafted_settings_initialize() {
    require dirname( __FILE__ ) . '/wellcrafted/settings/settings.php';
    \Wellcrafted\Settings\Settings::instance()->init();
}


