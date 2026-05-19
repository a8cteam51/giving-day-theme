<?php
/**
 * Title: FAQ Accordion
 * Slug: giving-day/faq-accordion
 * Categories: giving-day-page
 * Description: Stack of expandable FAQ items using core/details. Edit each entry per campaign.
 * Keywords: faq, accordion, questions, help
 * Viewport Width: 880
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'When does giving open and close?', 'giving-day' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Giving runs for 24 hours, beginning at midnight on the campaign day. The exact open and close times appear in the countdown above.', 'giving-day' ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'Is my gift tax-deductible?', 'giving-day' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Yes — to the fullest extent allowed by law. You will receive an emailed receipt with our tax ID right after your donation.', 'giving-day' ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'Can I designate my gift to a specific fund or team?', 'giving-day' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Absolutely. The donation form lets you direct your gift to any fund or team participating in the campaign.', 'giving-day' ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'What payment methods do you accept?', 'giving-day' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'We accept all major credit cards, Apple Pay, Google Pay, and ACH transfers. Recurring monthly gifts are available, too.', 'giving-day' ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'How do matching gifts work?', 'giving-day' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'During the campaign, sponsors match gifts up to specific caps. Your gift may be multiplied if a match is active — watch the match banners on the page.', 'giving-day' ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

	<!-- wp:details -->
	<details class="wp-block-details"><summary><?php esc_html_e( 'Can I give anonymously?', 'giving-day' ); ?></summary>
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Yes — there is an "Anonymous" option on the donation form. Your gift counts toward every total but your name will not appear on the donor wall or leaderboard.', 'giving-day' ); ?></p>
		<!-- /wp:paragraph -->
	</details>
	<!-- /wp:details -->

</div>
<!-- /wp:group -->
