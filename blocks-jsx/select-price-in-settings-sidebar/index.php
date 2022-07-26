<?php
/**
 * Plugin Name: WPSE 407885: Price dropdown in settings sidebar
 * Plugin URI: https://github.com/5ally/wpse-407885
 * Version: 1.0.0
 * Author: Sally CJ
 * Text Domain: wpse-407885
 *
 * @package wpse-407885
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load all translations for our plugin from the MO file.
 */
function wpse_407885_spiss_load_textdomain() {
	load_plugin_textdomain( 'wpse-407885', false, basename( __DIR__ ) . '/languages' );
}
add_action( 'init', 'wpse_407885_spiss_load_textdomain' );

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function wpse_407885_spiss_register_block() {

	// Register the block by passing the location of block.json to register_block_type.
	register_block_type( __DIR__ );

	// If not installed as a standalone plugin, load translations from the parent plugin.
	$lang_root = defined( 'WPSE_407885_PLUGIN_DIR' ) ? WPSE_407885_PLUGIN_DIR : __DIR__;
	wp_set_script_translations( 'wpse-407885-select-price-in-settings-sidebar-editor-script',
		'wpse-407885', $lang_root . '/languages' );

}
add_action( 'init', 'wpse_407885_spiss_register_block' );
