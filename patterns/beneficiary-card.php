<?php
/**
 * Title: Beneficiary Card
 * Slug: giving-day/beneficiary-card
 * Categories: giving-day-card
 * Description: Single beneficiary card. Designed for use inside a query loop on the giving_beneficiary post type.
 * Keywords: beneficiary, card, fund
 * Block Types: core/post-template
 * Viewport Width: 360
 */
?>
<!-- wp:group {"className":"is-style-card-outline beneficiary-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card-outline beneficiary-card">
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"8px"}}} /-->

	<!-- wp:post-terms {"term":"giving_cause","fontSize":"small","textColor":"tertiary"} /-->

	<!-- wp:post-title {"isLink":true,"level":3} /-->

	<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":24} /-->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-ghost","fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size is-style-ghost"><a class="wp-block-button__link wp-element-button" href="/donate"><?php esc_html_e( 'Give to this fund', 'giving-day' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
