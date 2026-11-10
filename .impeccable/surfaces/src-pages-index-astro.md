---
version: 1
slug: "src-pages-index-astro"
primary_target: "src/pages/index.astro"
related_targets: ["src/pages/work/[slug].astro"]
---

# Portfolio site (home + case studies)

Mode: Persuade. Audience: freelance clients first (SMEs, agencies), employers/recruiters second. Action: get in touch (email, LinkedIn). Proof: three anonymised production systems at "a Dutch meal-kit company" (order sync, Shopware → Shopify move, customer portal), plus 2–3 earlier game projects. Constraints: see PRODUCT.md; no invented metrics, clients or testimonials.

User steers (binding): bold, bright colour; far fewer lines and tables; no numbering or part codes; less text; more personal; whimsy stays, in short human lines, never in claims about the work. Replaces the earlier Datasheet world, which the user found too busy, industrial and dull.

## Direction contract

THESIS: Leandro at the workshop wall: a business's work mapped in a few big, bright sticky notes, then built. The page is the wall. Refuses the dark-hero-plus-project-card-grid portfolio and the busy spec sheet.

OWN-WORLD: cool whiteboard-white wall, marker-black ink, and four sticky-note colours with fixed roles: yellow = people, orange = what happens, blue = what the system does, pink = the problem, and the call to action. Notes are big flat squares with a real soft shadow and a slight tilt, joined by round marker arrows. Bricolage Grotesque throughout, heavy for display. No tables, no part codes, no section numbers; at most about five notes on screen at once; lots of empty wall.

STORY: the first screen says who he is and what he does for a client as a three-note flow (yellow "I find out what a business really needs," → blue "design how its systems fit together," → orange "and build the parts people use."; Leandro rejected a client-facing "You: …" version as too narrow), with a pink "Let's talk" note and a "freelance from 2027" line; the separate services section was removed so Work follows right away (Leandro: "u still have to scroll a lot before u get to any sustanance"). Work follows immediately: one featured case, the Shopware → Shopify + Odoo migration (in progress; the order sync folded into it, Leandro: "isn't impressive at all"; the portal case removed, "not that interesting"), then a compact strip of four earlier games, Starline featured with a "Play this one!" sticker (Leandro: "push people towards starline"). Then one combined About section (Leandro: they "are connect but feel so disconnected"): pinned photo, story and "Off the clock" hobby notes (kitchen work, cooking at home, lifting), then "The short version" continuing inside it as a sub-part (path notes ending in a ghost note "Next: still figuring that out.", a pinned CV card, "I'm always open to work, and to a good conversation.") → a big pink contact note. Case pages: the four-note flow, a system map of the architecture (Leandro chose to add diagrams), short paragraphs.

FIRST VIEWPORT: slim header (name; Work / About / CV / Contact; pink "Let's talk"). "Leandro Bonora" heavy at display scale with the sub line under it; below that, across the full width, three tilted notes in a flow, yellow → blue → orange (see STORY), joined by live marker arrows, then a pink "Let's talk" note that is the primary action (email). Phones: the four notes form a 2×2 grid read as a Z by the arrows. (Built stacked, name above a full-width row, rather than the name-left/notes-right first drafted; Leandro saw this layout and answered "The direction feels nice", so the stacked hero is the approved one.)

FORM: Workshop Wall, IMPECCABLE'S PICK (top of the grounded list, re-roll round 2), seed:778edead306e91ee. Raises kept: one element owns each screen; colour roles used consistently; generous empty wall.

Signature interaction: the hero notes can be picked up and dragged around the wall; on release they settle with a small tilt. Links stay plain links. Reduced motion: no settle animation.

FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, DESIGN.md, and every shipping raster carrying its provenance

## Open decisions

- New CV PDF (old one is Jan 2024); until then link LinkedIn.
- Contact: plain email link (old PHP form doesn't work on GitHub Pages).
- Resolved: the new webshop is not live yet (Leandro, Nov 2026). The migration and order sync are presented as in progress / going live with the switch-over.
- GitHub Pages source must be switched to "GitHub Actions" by Leandro when deploying.
