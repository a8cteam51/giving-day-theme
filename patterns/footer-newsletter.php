<?php
/**
 * Title: Footer Newsletter
 * Slug: giving-day/footer-newsletter
 * Categories: giving-day-footer
 * Description: Two-column footer with a newsletter call-to-action and quick links.
 * Keywords: footer, newsletter, signup
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:heading {"level":2,"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
			<h2 class="wp-block-heading has-text-color is-style-eyebrow" style="color:var(--wp--preset--color--accent)"><?php esc_html_e( 'Stay close', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Get year-round updates and a heads-up before our next Giving Day.', 'giving-day' ); ?></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"var:preset|color|tertiary"}}} -->
			<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--tertiary)"><?php esc_html_e( 'Drop a newsletter signup block here (Mailchimp, Jetpack, etc.) — your provider of choice will plug in.', 'giving-day' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"primary","className":"is-style-donate-pill"} -->
				<div class="wp-block-button is-style-donate-pill"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Sign me up', 'giving-day' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
