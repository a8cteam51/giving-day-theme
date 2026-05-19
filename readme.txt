=== Giving Day ===
Contributors: team51, ecairol
Requires at least: 6.4
Tested up to: 6.4
Requires PHP: 7.4
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: block-theme, full-site-editing, fundraising, nonprofit, education, donations, one-column, two-columns, custom-colors, custom-logo, editor-style, featured-images, threaded-comments, translation-ready, wide-blocks

A block-based WordPress theme for university, college, nonprofit, and community Giving Day events. Pairs with the giving-day-blocks and team51-donations plugins.

== Description ==

Giving Day is a standalone block theme (FSE) that ships templates, parts, and patterns for the pages every Giving Day site needs: home, donate, leaderboard, beneficiaries, teams, thank you, donor wall, sponsors, FAQ, contact.

It exposes the five color slugs the `giving-day-blocks` plugin expects (`primary`, `secondary`, `tertiary`, `accent`, `background`) so the plugin's countdown, totals, progress, leaderboard, match-my-gift, and causes-browser blocks pick up the active theme palette automatically.

It ships with a neutral gray default plus three pre-built style variations: Crimson, Forest, and Ocean. Switch between them with one click in Site Editor → Styles → Browse styles.

Fonts: Inter (variable) and Source Serif 4 (variable), self-hosted under `/assets/fonts/` — no Google Fonts CDN.

== Companion plugins ==

* [giving-day-blocks](https://github.com/a8cteam51/giving-day-blocks) — required. Provides CPTs (campaign, team, beneficiary, match, challenge), taxonomies (cause, team-group), and the seven Giving Day blocks the theme's templates and patterns reference.
* [team51-donations](https://github.com/a8cteam51/team51-donations) — required for the donate flow. Provides the WooCommerce-powered Donations Form block.
* WooCommerce — required by the donations plugin.

== Adding the font files ==

The theme references variable WOFF2 files that are not bundled in this repo for licensing-trace cleanliness. Drop the following files into `assets/fonts/` and they will load automatically (no theme.json edits needed):

* `assets/fonts/inter/Inter-Variable.woff2`
* `assets/fonts/inter/Inter-Variable-Italic.woff2`
* `assets/fonts/source-serif/SourceSerif4-Variable.woff2`
* `assets/fonts/source-serif/SourceSerif4-Variable-Italic.woff2`

Sources:
* Inter — https://github.com/rsms/inter/releases (SIL OFL 1.1)
* Source Serif 4 — https://github.com/adobe-fonts/source-serif/releases (SIL OFL 1.1)

If the font files are missing, the theme falls back to system fonts (`system-ui`, Georgia) gracefully — no errors.

== Changelog ==

= 1.0.0 =
* Initial release. Standalone block theme, 21 templates, 5 template parts, 17 patterns, 3 style variations, 8 block style variations.
