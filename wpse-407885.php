<?php
/**
 * Plugin Name: WPSE 407885
 * Plugin URI: https://github.com/5ally/wpse-407885
 * Description: See https://wordpress.stackexchange.com/a/407885/137402 for details.
 * Version: 1.0.0
 * Author: Sally CJ
 *
 * @package wpse-407885
 */

defined( 'ABSPATH' ) || exit;


define( 'WPSE_407885_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPSE_407885_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

foreach ( array(
	'select-price-in-editor-content',
	'select-price-in-settings-sidebar',
) as $block ) {
	require WPSE_407885_PLUGIN_DIR . "build/blocks-jsx/$block/index.php";
//	require WPSE_407885_PLUGIN_DIR . "blocks-non-jsx/$block/index.php";
}
