<?php
/**
 * Title: Leaderboard Section
 * Slug: giving-day/leaderboard-section
 * Categories: giving-day-page
 * Description: Heading + the tabbed leaderboard block (teams, beneficiaries, donors).
 * Keywords: leaderboard, tabs, ranking, teams, donors
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
			<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Live now', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Leaderboard', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="/leaderboard"><?php esc_html_e( 'See the full leaderboard →', 'giving-day' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:giving-day/leaderboard-tabs /-->

</div>
<!-- /wp:group -->
