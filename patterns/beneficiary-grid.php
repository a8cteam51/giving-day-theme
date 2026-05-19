<?php
/**
 * Title: Beneficiary Grid
 * Slug: giving-day/beneficiary-grid
 * Categories: giving-day-page
 * Description: Three-column grid of featured beneficiaries with a heading and link to the full directory.
 * Keywords: beneficiary, grid, featured
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"is-style-eyebrow"} -->
			<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Featured beneficiaries', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Where the giving goes', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="/beneficiaries"><?php esc_html_e( 'See all beneficiaries →', 'giving-day' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"giving_beneficiary","order":"asc","orderBy":"menu_order","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:pattern {"slug":"giving-day/beneficiary-card"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'No beneficiaries yet — add a giving_beneficiary post to see this grid populate.', 'giving-day' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
