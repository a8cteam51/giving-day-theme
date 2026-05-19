<?php
/**
 * Giving Day theme functions.
 *
 * @package giving-day
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'giving_day_setup' ) ) {
	function giving_day_setup() {
		load_theme_textdomain( 'giving-day', get_template_directory() . '/languages' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor.css' );
	}
}
add_action( 'after_setup_theme', 'giving_day_setup' );

if ( ! function_exists( 'giving_day_register_block_styles' ) ) {
	function giving_day_register_block_styles() {
		$styles = array(
			array( 'core/button',    'donate-pill',    __( 'Donate pill', 'giving-day' ) ),
			array( 'core/button',    'ghost',          __( 'Ghost', 'giving-day' ) ),
			array( 'core/group',     'card-elevated',  __( 'Card (elevated)', 'giving-day' ) ),
			array( 'core/group',     'card-outline',   __( 'Card (outline)', 'giving-day' ) ),
			array( 'core/heading',   'display-serif',  __( 'Display serif', 'giving-day' ) ),
			array( 'core/heading',   'eyebrow',        __( 'Eyebrow', 'giving-day' ) ),
			array( 'core/pullquote', 'impact',         __( 'Impact', 'giving-day' ) ),
			array( 'core/separator', 'accent-rule',    __( 'Accent rule', 'giving-day' ) ),
		);

		foreach ( $styles as $style ) {
			register_block_style(
				$style[0],
				array(
					'name'  => $style[1],
					'label' => $style[2],
				)
			);
		}
	}
}
add_action( 'init', 'giving_day_register_block_styles' );

if ( ! function_exists( 'giving_day_resolve_campaign_id' ) ) {
	/**
	 * Resolves the most-relevant giving_campaign for blocks that don't have
	 * an explicit campaignId set. Preference order: LIVE → next SCHEDULED →
	 * most-recently-ENDED. Returns 0 if no campaign exists.
	 *
	 * Cached briefly in a transient so a busy page doesn't repeat the query.
	 */
	function giving_day_resolve_campaign_id() {
		$cached = get_transient( 'giving_day_theme_resolved_campaign' );
		if ( false !== $cached ) {
			return (int) $cached;
		}

		$now = current_datetime()->format( 'Y-m-d\TH:i:s' );

		$live = get_posts(
			array(
				'post_type'      => 'giving_campaign',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
				'fields'         => 'ids',
				'no_found_rows'  => true,
				'meta_query'     => array(
					'relation' => 'AND',
					array(
						'key'     => '_giving_start_datetime',
						'value'   => $now,
						'compare' => '<=',
					),
					array(
						'key'     => '_giving_end_datetime',
						'value'   => $now,
						'compare' => '>=',
					),
				),
				'meta_key'       => '_giving_start_datetime',
				'orderby'        => 'meta_value',
				'order'          => 'DESC',
			)
		);

		if ( ! empty( $live ) ) {
			$id = (int) $live[0];
			set_transient( 'giving_day_theme_resolved_campaign', $id, MINUTE_IN_SECONDS );
			return $id;
		}

		$upcoming = get_posts(
			array(
				'post_type'      => 'giving_campaign',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
				'fields'         => 'ids',
				'no_found_rows'  => true,
				'meta_query'     => array(
					array(
						'key'     => '_giving_start_datetime',
						'value'   => $now,
						'compare' => '>',
					),
				),
				'meta_key'       => '_giving_start_datetime',
				'orderby'        => 'meta_value',
				'order'          => 'ASC',
			)
		);

		if ( ! empty( $upcoming ) ) {
			$id = (int) $upcoming[0];
			set_transient( 'giving_day_theme_resolved_campaign', $id, MINUTE_IN_SECONDS );
			return $id;
		}

		$recent = get_posts(
			array(
				'post_type'      => 'giving_campaign',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
				'fields'         => 'ids',
				'no_found_rows'  => true,
				'meta_key'       => '_giving_end_datetime',
				'orderby'        => 'meta_value',
				'order'          => 'DESC',
			)
		);

		$id = ! empty( $recent ) ? (int) $recent[0] : 0;
		set_transient( 'giving_day_theme_resolved_campaign', $id, MINUTE_IN_SECONDS );
		return $id;
	}
}

if ( ! function_exists( 'giving_day_fill_block_campaign_id' ) ) {
	function giving_day_fill_block_campaign_id( $parsed_block ) {
		$name = isset( $parsed_block['blockName'] ) ? (string) $parsed_block['blockName'] : '';
		if ( 0 !== strpos( $name, 'giving-day/' ) ) {
			return $parsed_block;
		}
		if ( ! empty( $parsed_block['attrs']['campaignId'] ) ) {
			return $parsed_block;
		}
		$id = giving_day_resolve_campaign_id();
		if ( $id > 0 ) {
			if ( ! isset( $parsed_block['attrs'] ) || ! is_array( $parsed_block['attrs'] ) ) {
				$parsed_block['attrs'] = array();
			}
			$parsed_block['attrs']['campaignId'] = $id;
		}
		return $parsed_block;
	}
}
add_filter( 'render_block_data', 'giving_day_fill_block_campaign_id', 10, 1 );

if ( ! function_exists( 'giving_day_register_pattern_categories' ) ) {
	function giving_day_register_pattern_categories() {
		$categories = array(
			'giving-day-hero'   => _x( 'Giving Day — Hero', 'Block pattern category', 'giving-day' ),
			'giving-day-page'   => _x( 'Giving Day — Page sections', 'Block pattern category', 'giving-day' ),
			'giving-day-card'   => _x( 'Giving Day — Cards & lists', 'Block pattern category', 'giving-day' ),
			'giving-day-footer' => _x( 'Giving Day — Footer', 'Block pattern category', 'giving-day' ),
		);

		foreach ( $categories as $slug => $label ) {
			register_block_pattern_category( $slug, array( 'label' => $label ) );
		}
	}
}
add_action( 'init', 'giving_day_register_pattern_categories' );
