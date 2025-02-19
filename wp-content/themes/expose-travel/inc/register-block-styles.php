<?php
/**
 * Block styles.
 *
 * @package expose-travel
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function expose_travel_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'expose-travel-flat-button',
			'label' => __( 'Flat button', 'expose-travel' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'expose-travel-list-underline',
			'label' => __( 'Underlined list items', 'expose-travel' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'expose-travel-box-shadow',
			'label' => __( 'Box shadow', 'expose-travel' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'expose-travel-box-shadow',
			'label' => __( 'Box shadow', 'expose-travel' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'expose-travel-box-shadow',
			'label' => __( 'Box shadow', 'expose-travel' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'expose-travel-plus',
			'label' => __( 'Plus & minus', 'expose-travel' ),
		)
	);
}
add_action( 'init', 'expose_travel_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function expose_travel_unregister_block_style() {
	wp_enqueue_script(
		'expose-travel-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		EXPOSE_TRAVEL_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'expose_travel_unregister_block_style' );
