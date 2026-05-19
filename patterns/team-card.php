<?php
/**
 * Title: Team Card
 * Slug: giving-day/team-card
 * Categories: giving-day-card
 * Description: Single team card. Designed for use inside a query loop on the giving_team post type.
 * Keywords: team, card
 * Block Types: core/post-template
 * Viewport Width: 360
 */
?>
<!-- wp:group {"className":"is-style-card-outline team-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card-outline team-card">
	<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
	<div class="wp-block-group">
		<!-- wp:post-featured-image {"isLink":true,"width":"64px","height":"64px","style":{"border":{"radius":"9999px"}}} /-->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-terms {"term":"giving_team_group","fontSize":"small","textColor":"tertiary"} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20} /-->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-ghost","fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size is-style-ghost"><a class="wp-block-button__link wp-element-button" href="/donate"><?php esc_html_e( 'Give for this team', 'giving-day' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
