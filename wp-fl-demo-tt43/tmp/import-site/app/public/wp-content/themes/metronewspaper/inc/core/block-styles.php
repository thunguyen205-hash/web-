<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function metronewspaper_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'metronewspaper-border',
				'label' => esc_html__( 'Borders', 'metronewspaper' ),
			)
		);
	}
	add_action( 'init', 'metronewspaper_register_block_styles' );
}
