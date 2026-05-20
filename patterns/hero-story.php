<?php
/**
 * Title: Hero — Story
 * Slug: giving-day/hero-story
 * Categories: giving-day-hero
 * Description: Image-left, copy-right hero for storytelling and mission setup.
 * Keywords: hero, story, mission, intro
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image" style="border-radius:12px"><img alt="" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:heading {"className":"is-style-eyebrow"} -->
			<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Our mission', 'giving-day' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading"><?php esc_html_e( 'A single day. A lasting impact.', 'giving-day' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large","style":{"color":{"text":"var:preset|color|tertiary"}}} -->
			<p class="has-text-color has-large-font-size" style="color:var(--wp--preset--color--tertiary)"><?php esc_html_e( 'Giving Day is our annual celebration of what we can do together. Every gift, from anywhere in the world, fuels what comes next.', 'giving-day' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<?php
				$gd_donate_attrs = wp_json_encode(
					array(
						'targetType' => 'none',
						'label'      => __( 'Make your gift', 'giving-day' ),
						'className'  => 'wp-block-button is-style-donate-pill',
					)
				);
				?>
				<!-- wp:giving-day/donate-button <?php echo $gd_donate_attrs; ?> /-->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
