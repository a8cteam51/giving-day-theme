<?php
/**
 * Title: Header with Donate Button
 * Slug: giving-day/header-with-donate
 * Categories: giving-day-footer
 * Description: A composable header bar with logo, primary nav, and a prominent donate button. Drop into a custom header part.
 * Keywords: header, nav, donate
 * Block Types: core/template-part/header
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":48} /-->
			<!-- wp:site-title {"level":0,"style":{"typography":{"textDecoration":"none"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"fontSize":"medium"} /-->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<?php
				$gd_donate_attrs = wp_json_encode(
					array(
						'targetType' => 'none',
						'label'      => __( 'Donate', 'giving-day' ),
						'className'  => 'wp-block-button is-style-donate-pill',
					)
				);
				?>
				<!-- wp:giving-day/donate-button <?php echo $gd_donate_attrs; ?> /-->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
