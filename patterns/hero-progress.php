<?php
/**
 * Title: Hero — Progress
 * Slug: giving-day/hero-progress
 * Categories: giving-day-hero
 * Description: Hero centered on the live goal-progress block with headline and CTA.
 * Keywords: hero, progress, goal, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","className":"is-style-eyebrow"} -->
	<h2 class="wp-block-heading has-text-align-center is-style-eyebrow"><?php esc_html_e( 'Live progress', 'giving-day' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'We rise together.', 'giving-day' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:giving-day/goal-progress {"orientation":"horizontal","showPercent":true,"showRaised":true,"showGoal":true,"showDonorCount":true,"animateBar":true,"animateNumbers":true} /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<?php
		$gd_donate_attrs = wp_json_encode(
			array(
				'targetType' => 'none',
				'label'      => __( 'Give now', 'giving-day' ),
				'className'  => 'wp-block-button is-style-donate-pill',
			)
		);
		?>
		<!-- wp:giving-day/donate-button <?php echo $gd_donate_attrs; ?> /-->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
