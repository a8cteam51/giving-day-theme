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

	<?php
	$gd_donate_attrs = wp_json_encode(
		array(
			'targetType' => 'auto',
			'label'      => __( 'Give for this team', 'giving-day' ),
			'className'  => 'wp-block-button is-style-ghost has-custom-font-size has-small-font-size',
		)
	);
	?>
	<!-- wp:giving-day/donate-button <?php echo $gd_donate_attrs; ?> /-->
</div>
<!-- /wp:group -->
