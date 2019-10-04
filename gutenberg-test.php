<?php
/**
 * Plugin Name: Gutenberg Test
 * Description: Gutenberg Test
 * Version: 0.0.0
 */

function gutenberg_test_register_meta() {

	register_meta( 'post', 'my_block_meta', array(
		'type'         => 'number',
		'single'       => true,
		'show_in_rest' => true,
	) );

}
add_action( 'init', 'gutenberg_test_register_meta' );

if ( ! function_exists( 'gutenberg_test_my_block_init' ) ) {

	function gutenberg_test_my_block_init() {
		register_block_type( 'gutenberg-test/block', array(
			'render_callback' => 'gutenberg_test_render_my_block'
		) );
	}
}
add_action( 'init', 'gutenberg_test_my_block_init', 20 );

if ( ! function_exists( 'gutenberg_test_render_my_block' ) ) {

	function gutenberg_test_render_my_block( $attributes, $content ) {
		return 'Gutenberg Test Block';
	}
}

function gutenberg_test_editor_assets() {
	wp_enqueue_script( 'gutenberg-test-js', plugins_url( null, __FILE__ ) . '/gutenberg-test-scripts.js', array( 'wp-blocks', 'wp-element' ), '0.0.0', true );
}
add_action( 'enqueue_block_editor_assets', 'gutenberg_test_editor_assets' );