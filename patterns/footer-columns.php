<?php
/**
 * Title: Footer Columns
 * Slug: giving-day/footer-columns
 * Categories: giving-day-footer
 * Description: Four-column footer with logo, link columns, and social icons. Drop into a custom footer part.
 * Keywords: footer, columns, navigation
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} /-->
			<!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"var:preset|color|tertiary"}}} -->
			<p class="has-text-color has-small-font-size" style="color:var(--wp--preset--color--tertiary)"><?php esc_html_e( 'One day. Every gift. Lasting impact.', 'giving-day' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<h4 class="wp-block-heading has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Give', 'giving-day' ); ?></h4>
			<!-- /wp:heading -->
			<?php
			$gd_donate_url = class_exists( 'Team51\\GivingDay\\Data\\DonationUrl' )
				? \Team51\GivingDay\Data\DonationUrl::build( 'none' )
				: home_url( '/donate' );
			?>
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="<?php echo esc_url( $gd_donate_url ); ?>"><?php esc_html_e( 'Make a gift', 'giving-day' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/beneficiaries"><?php esc_html_e( 'Beneficiaries', 'giving-day' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/teams"><?php esc_html_e( 'Teams', 'giving-day' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<h4 class="wp-block-heading has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Learn', 'giving-day' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/about"><?php esc_html_e( 'About', 'giving-day' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/faq"><?php esc_html_e( 'FAQ', 'giving-day' ); ?></a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/sponsors"><?php esc_html_e( 'Sponsors', 'giving-day' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<h4 class="wp-block-heading has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Connect', 'giving-day' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:social-links {"iconColor":"background","iconColorValue":"#FFFFFF","openInNewTab":true,"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
