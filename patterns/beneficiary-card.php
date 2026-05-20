<?php
/**
 * Title: Beneficiary Card
 * Slug: giving-day/beneficiary-card
 * Categories: giving-day-card
 * Description: Single beneficiary card. Designed for use inside a query loop on the giving_beneficiary post type.
 * Keywords: beneficiary, card, fund
 * Block Types: core/post-template
 * Viewport Width: 360
 */
?>
<!-- wp:group {"className":"is-style-card-outline beneficiary-card","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card-outline beneficiary-card">
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"8px"}}} /-->

	<!-- wp:post-terms {"term":"giving_cause","fontSize":"small","textColor":"tertiary"} /-->

	<!-- wp:post-title {"isLink":true,"level":3} /-->

	<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":24} /-->

	<?php
	$gd_donate_attrs = wp_json_encode(
		array(
			'targetType' => 'auto',
			'label'      => __( 'Give to this fund', 'giving-day' ),
			'className'  => 'wp-block-button is-style-ghost has-custom-font-size has-small-font-size',
		)
	);
	?>
	<!-- wp:giving-day/donate-button <?php echo $gd_donate_attrs; ?> /-->
</div>
<!-- /wp:group -->
