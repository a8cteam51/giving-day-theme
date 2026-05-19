<?php
/**
 * Title: Donor Wall Grid
 * Slug: giving-day/donor-wall-grid
 * Categories: giving-day-page
 * Description: Recent donors recognized in a grid, using the giving-day leaderboard block with the top_donors dimension.
 * Keywords: donors, wall, recognition, recent
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","className":"is-style-eyebrow"} -->
	<h2 class="wp-block-heading has-text-align-center is-style-eyebrow"><?php esc_html_e( 'With gratitude', 'giving-day' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Recent donors', 'giving-day' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:giving-day/leaderboard {"dimension":"top_donors","limit":24,"showAvatar":true,"showAmount":false,"anonymize":true} /-->

</div>
<!-- /wp:group -->
