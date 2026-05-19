<?php
/**
 * Title: Impact Stat Trio
 * Slug: giving-day/impact-stat-trio
 * Categories: giving-day-page
 * Description: Three large impact stats side by side. Edit the numbers and labels per campaign.
 * Keywords: stats, impact, numbers, kpis
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card-outline","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card-outline">
				<!-- wp:heading {"textAlign":"center","level":2,"className":"is-style-display-serif","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<h2 class="wp-block-heading has-text-align-center has-text-color is-style-display-serif" style="color:var(--wp--preset--color--accent)">$1M+</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"color":{"text":"var:preset|color|tertiary"}}} -->
				<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--tertiary)"><?php esc_html_e( 'Raised across our community since 2020', 'giving-day' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card-outline","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card-outline">
				<!-- wp:heading {"textAlign":"center","level":2,"className":"is-style-display-serif","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<h2 class="wp-block-heading has-text-align-center has-text-color is-style-display-serif" style="color:var(--wp--preset--color--accent)">12K+</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"color":{"text":"var:preset|color|tertiary"}}} -->
				<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--tertiary)"><?php esc_html_e( 'Donors from 50 countries', 'giving-day' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card-outline","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card-outline">
				<!-- wp:heading {"textAlign":"center","level":2,"className":"is-style-display-serif","style":{"color":{"text":"var:preset|color|accent"}}} -->
				<h2 class="wp-block-heading has-text-align-center has-text-color is-style-display-serif" style="color:var(--wp--preset--color--accent)">100%</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"color":{"text":"var:preset|color|tertiary"}}} -->
				<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--tertiary)"><?php esc_html_e( 'Of every dollar funds programs', 'giving-day' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
