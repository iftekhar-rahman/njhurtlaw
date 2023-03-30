<?php
/**
 * Plugin Name: NjHurtLaw Addon
 * Description: NjHurtLaw Addon
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Iftekhar Rahman
 * Author URI:  https://developers.elementor.com/
 * Text Domain: njhurtlaw-addon
 * 
 * Elementor tested up to:     3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function njhurtlaw_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\NjHurtLaw_Sight_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'njhurtlaw_addon' );