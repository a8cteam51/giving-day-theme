# Giving Day

A block-based WordPress theme for university, college, nonprofit, and community Giving Day events. Designed to pair with the [`giving-day-blocks`](../../plugins/giving-day-blocks/) and [`team51-donations`](../../plugins/team51-donations/) plugins so a campaign site can be up in minutes.

## Install

1. Activate the two companion plugins (and WooCommerce).
2. Activate **Giving Day** from *Appearance → Themes*.
3. Switch palette in *Site Editor → Styles → Browse styles* (Gray default, Crimson, Forest, or Ocean).

## What's included

### Custom page templates (8)

Selectable from the Page Attributes panel when editing any Page.

| Template | Use it for |
|---|---|
| **Donate Page** | The main donation flow. Uses the minimal header so users don't bail mid-checkout. |
| **Leaderboard** | Standings: top donors, teams, beneficiaries. |
| **Thank You** | Post-donation confirmation + social share + recent donors. |
| **Donor Wall** | Public recognition of recent givers. |
| **Sponsors** | Match partners + sponsor logo wall. |
| **FAQ** | Help / common questions, accordion layout. |
| **Contact** | Email, phone, address, social. |
| **No Title** | Page with the title hidden — for hero-only landing pages. |

### CPT and taxonomy templates

Auto-matched by filename — no setup required:

- `archive-giving_beneficiary.html` + `single-giving_beneficiary.html`
- `archive-giving_team.html` + `single-giving_team.html`
- `taxonomy-giving_cause.html`

Plus standard FSE templates: `front-page`, `home`, `page`, `single`, `archive`, `search`, `404`, `index`.

### Template parts (5)

- `header` — logo + nav + Donate pill button
- `header-minimal` — logo only (used by Donate / Thank You flows)
- `footer` — four-column footer with social
- `footer-tagline` — slim event-tagline footer
- `sidebar-campaign` — countdown + goal progress + give-now button

### Patterns (17)

Available from the block inserter under four categories.

**Giving Day — Hero**
- `hero-countdown` — full-width hero with the state-aware countdown block
- `hero-progress` — hero centered on the goal-progress block
- `hero-story` — image-left, copy-right storytelling hero

**Giving Day — Page sections**
- `donate-cta-banner` — accent banner with a pill donate button
- `impact-stat-trio` — three large impact stats
- `leaderboard-section` — heading + tabbed leaderboard
- `beneficiary-grid` — featured-beneficiary query grid
- `team-grid` — featured-team query grid
- `sponsor-grid` — sponsor logo wall
- `donor-wall-grid` — recent donor recognition
- `faq-accordion` — six pre-written collapsible Q&As
- `story-quote` — large serif pullquote

**Giving Day — Cards & lists**
- `beneficiary-card` — single beneficiary card (used inside query loops)
- `team-card` — single team card (used inside query loops)

**Giving Day — Footer**
- `header-with-donate` — composable header bar
- `footer-columns` — four-column footer
- `footer-newsletter` — newsletter call-to-action footer

### Style variations (3)

Switch from *Site Editor → Styles → Browse styles*. Each variation redefines the same five color slugs so plugin blocks recolor automatically.

| Variation | Primary | Accent | Background |
|---|---|---|---|
| Crimson | `#8B0000` | `#D4A017` | `#FFFDF7` |
| Forest  | `#1B4332` | `#F77F00` | `#FBFAF7` |
| Ocean   | `#0B4A6F` | `#06B6D4` | `#F8FAFC` |

### Block style variations (8)

| Block | Variations |
|---|---|
| `core/button` | `donate-pill`, `ghost` |
| `core/group` | `card-elevated`, `card-outline` |
| `core/heading` | `display-serif`, `eyebrow` |
| `core/pullquote` | `impact` |
| `core/separator` | `accent-rule` |

## Theming notes

### Color contract with the plugins

The plugin blocks read these five `theme.json` color slugs via CSS custom properties:

```
primary, secondary, tertiary, accent, background
```

Don't rename them. They're how `giving-day-blocks` picks up the theme palette. See `plugins/giving-day-blocks/blocks/src/_shared/tokens.scss` for the mapping.

### Per-campaign color overrides

`giving-day-blocks` lets each `giving_campaign` post override its own primary / secondary / tertiary / accent / background. Those overrides cascade as inline styles on each block wrapper and **must** win over the theme palette. The theme avoids `!important` on `--wp--preset--color--*` for that reason.

### Donor Wall = leaderboard block

There is no `donation` CPT — donations are WooCommerce orders. The Donor Wall page and the `donor-wall-grid` pattern both use `giving-day/leaderboard` with `dimension: top_donors`. Don't query orders directly from a theme template.

### Fonts

Inter + Source Serif 4 (variable WOFF2) are self-hosted under `/assets/fonts/`. If a font file is missing, the stack falls back to `system-ui` / Georgia without error. See the `readme.txt` for re-fetch URLs.

## Companion plugins (required)

| Plugin | Provides |
|---|---|
| `giving-day-blocks` | 7 blocks (countdown, totals, goal-progress, leaderboard, leaderboard-tabs, match-my-gift, causes-browser), 5 CPTs, 2 taxonomies, REST API |
| `team51-donations` | Donations Form block (basic / extended / compact), Donation Progress Bar block |
| WooCommerce | Required by `team51-donations` |

## License

GPL v2 or later — see [`LICENSE`](./LICENSE).
