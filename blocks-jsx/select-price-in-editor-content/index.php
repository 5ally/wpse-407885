<?php
/**
 * Plugin Name: WPSE 407885: Price dropdown in editor content
 * Plugin URI: https://github.com/5ally/wpse-407885
 * Version: 1.0.0
 * Author: Sally CJ
 *
 * @package wpse-407885
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load all translations for our plugin from the MO file.
 */
function wpse_407885_spiec_load_textdomain() {
	load_plugin_textdomain( 'wpse-407885', false, basename( __DIR__ ) . '/languages' );
}
add_action( 'init', 'wpse_407885_spiec_load_textdomain' );

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function wpse_407885_spiec_register_block() {

	// Register the block by passing the location of block.json to register_block_type.
	register_block_type( __DIR__ );

	wp_set_script_translations( 'wpse-407885-select-price-in-editor-content-editor-script', 'wpse-407885' );

}
add_action( 'init', 'wpse_407885_spiec_register_block' );