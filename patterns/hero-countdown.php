<?php
/**
 * Title: Hero — Countdown
 * Slug: giving-day/hero-countdown
 * Categories: giving-day-hero
 * Description: Full-width hero with the state-aware Giving Day countdown block, headline, and donate CTA.
 * Keywords: hero, countdown, donate, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"background","gradient":"primary-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-color has-text-color has-background has-primary-secondary-gradient-background has-background-gradient" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":2,"className":"is-style-eyebrow","style":{"color":{"text":"var:preset|color|accent"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color is-style-eyebrow" style="color:var(--wp--preset--color--accent)"><?php esc_html_e( 'One day. Every gift.', 'giving-day' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-display-serif","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h1 class="wp-block-heading has-text-align-center is-style-display-serif" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Together, we make today count.', 'giving-day' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:giving-day/countdown {"showDonorCount":true} /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"className":"is-style-donate-pill"} -->
		<div class="wp-block-button is-style-donate-pill"><a class="wp-block-button__link wp-element-button" href="/donate"><?php esc_html_e( 'Give now', 'giving-day' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-ghost","style":{"color":{"text":"var:preset|color|background"},"border":{"color":"var:preset|color|background"}}} -->
		<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link has-text-color wp-element-button" href="/leaderboard" style="border-color:var(--wp--preset--color--background);color:var(--wp--preset--color--background)"><?php esc_html_e( 'See the leaderboard', 'giving-day' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
