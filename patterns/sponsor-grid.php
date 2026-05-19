<?php
/**
 * Title: Sponsor Grid
 * Slug: giving-day/sponsor-grid
 * Categories: giving-day-page
 * Description: Logo wall for sponsors. Replace placeholder images with sponsor logos. Grayscale-to-color on hover via the sponsor-grid CSS class.
 * Keywords: sponsors, logos, partners
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","className":"sponsor-grid","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sponsor-grid has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","className":"is-style-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading has-text-align-center is-style-eyebrow" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'With thanks to', 'giving-day' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Our sponsors', 'giving-day' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"medium","align":"center"} -->
			<figure class="wp-block-image aligncenter size-medium"><img alt="Sponsor logo placeholder"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"color":{"text":"var:preset|color|tertiary"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--tertiary);margin-top:var(--wp--preset--spacing--50)"><a href="/sponsors"><?php esc_html_e( 'Become a sponsor →', 'giving-day' ); ?></a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
