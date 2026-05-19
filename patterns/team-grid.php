<?php
/**
 * Title: Team Grid
 * Slug: giving-day/team-grid
 * Categories: giving-day-page
 * Description: Three-column grid of teams with a heading and link to the full team directory.
 * Keywords: team, grid, featured
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
			<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Teams', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Cheer on a team', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="/teams"><?php esc_html_e( 'See all teams →', 'giving-day' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"giving_team","order":"asc","orderBy":"title","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:pattern {"slug":"giving-day/team-card"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'No teams yet — add a giving_team post to see this grid populate.', 'giving-day' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
