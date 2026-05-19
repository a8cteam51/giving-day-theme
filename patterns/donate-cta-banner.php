<?php
/**
 * Title: Donate CTA Banner
 * Slug: giving-day/donate-cta-banner
 * Categories: giving-day-page
 * Description: Full-bleed accent banner with copy and a prominent donate button.
 * Keywords: donate, cta, banner, button
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"accent","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|x-large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--x-large)"><?php esc_html_e( 'Ready to give?', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}}} -->
			<p style="font-size:var(--wp--preset--font-size--medium)"><?php esc_html_e( 'Pick a fund, pick an amount, and make your impact today.', 'giving-day' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-donate-pill"} -->
			<div class="wp-block-button is-style-donate-pill"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" href="/donate"><?php esc_html_e( 'Give now', 'giving-day' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
