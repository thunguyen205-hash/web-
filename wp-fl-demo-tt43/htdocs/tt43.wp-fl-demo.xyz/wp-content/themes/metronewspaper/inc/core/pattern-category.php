<?php
/**
 * MetroNewspaper: Block Patterns
 *
 * @since MetroNewspaper 1.0
 */

/**
 * Registers pattern categories.
 *
 * @since MetroNewspaper 1.0
 *
 * @return void
 */
function metronewspaper_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'metronewspaper' => array( 'label' => __( 'MetroNewspaper Theme', 'metronewspaper' ) )
	);

	$block_pattern_categories = apply_filters( 'metronewspaper_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'metronewspaper_register_pattern_category', 9 );
