# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack

**Astro, static output** (chosen by the owner over plain HTML/CSS), with case studies and project write-ups as Markdown content collections. Astro ships zero JavaScript by default, its templates read like plain HTML so the owner can maintain it, and built-in i18n routing makes a later Dutch version cheap. Hosting: **GitHub Pages** at `itsleloli.github.io`, built and deployed by a GitHub Actions workflow.

This replaces an existing hand-written HTML + Bootstrap 4 site (game-development portfolio, 2023–2024) in the same repository.

## Users

Primary: prospective freelance clients evaluating whether to hire Leandro for development work. Which client type comes first is deliberately undecided; the site positions him broadly as a developer and keeps three directions open:

- web apps and websites for clients;
- e-commerce integrations (Shopify, middleware, connecting systems);
- Odoo/ERP help for SMEs.

Their job on the site: understand what he can build, see proof that he has built real systems, and decide whether to get in touch.

Name on the site: Leandro Rosero Bonora, goes by Leo.

## Product Purpose

A personal portfolio site that starts a small freelance practice alongside a part-time developer job and a full-time HBO study. Success means a visitor can tell within a short read what Leandro does, sees credible evidence of production work, and has an obvious way to contact him.

## Positioning

A developer who works in a live e-commerce operation: production Laravel middleware connecting Shopify and Odoo, Odoo administration and modules, and a Shopware → Shopify migration, combined with a Business IT & Management study that bridges code and business process. Claim this only as far as the evidence below supports it.

## Operating Context

- Built and maintained by Leandro himself, in limited time (side-project budget of roughly 5–8 hours a week).
- Primary language: **English**, to support working internationally. Dutch is his native language; a Dutch version is a possible later addition, not a launch requirement.
- Version 1 should ship rough and early rather than wait for completeness.

## Capabilities and Constraints

- Confirmed content types: case studies / project write-ups, an about section, and a contact route.
- Boerschappen work may only be shown **anonymised**: no employer name, internal system names, data, screenshots of internal tools, or client details. His employment contract's clause on side work (nevenwerkzaamheden) and competition is still unchecked; until it is, nothing on the site may present Boerschappen work as a freelance offering competing with the employer.
- Undecided: which client segment to lead with, pricing, availability/hours offered, business registration (KvK/btw), domain and hosting.

## Brand Commitments

- Tone: professional, with a few human touches. Work leads; a short about section may mention cooking, strength training and languages (Dutch native, English fluent, Spanish beginner), with his photo (`images/prof-me-v*.png`).

## Evidence on Hand

- Day-job work, employer described only as **"a Dutch meal-kit company"**. Built or led by Leandro (may be claimed as "I built"):
  - **Order-sync middleware** (Laravel): webhooks in, queued idempotent workflows, retries/backoff, an admin panel for failed syncs; connects webshop, ERP (Odoo), carriers and payment.
  - **Shopware → Shopify migration**, including the rewrite of the middleware from the old flow to the new one.
  - **Customer self-service portal** (Laravel + Filament): deliveries, subscriptions, recipes, pause/cancel; piloted with a whitelist of customers, then rolled out to all.
  - Odoo module work (Python) is part of his job but was **not** confirmed as his to claim; describe it at most as "contributed to" until he says otherwise.
- Personal and school (BIM) projects he can show; specific projects not yet listed.
- **Earlier work (game development, Grafisch Lyceum Utrecht, 2022–2024):** existing project pages, GIFs, videos and two game design documents in this repo (`images/`, `gifs/`, `videos/`, `pdf/`). Chef Line's Journey, Starline, Six Bullets, Sea Monkey, Christmas Fight, a Donkey Kong remake, Blender/3D-printing. The new site keeps the strongest 2–3 as an "Earlier work" section, as proof of C#/Unity skill and shipped projects; the rest leave the site.
- Contact: email, LinkedIn and GitHub (`itsleloli`) as already published on the old site. The old PHP contact form never worked on GitHub Pages and must not be carried over as-is.
- The CV PDF (`pdf/Website CV Leandro Bonora 1-2024 English.pdf`) is outdated (January 2024, game-dev era).
- **Absent, must not be fabricated:** testimonials, client logos, named freelance clients, paid freelance projects, metrics or results figures, certifications, pricing.

## Product Principles

1. **Proof over adjectives.** Every capability claim points at something he actually built; where no proof exists, the site says less.
2. **Anonymised but concrete.** Describe systems, problems and trade-offs in specific technical terms without exposing the employer.
3. **Keep the direction open, not vague.** Show the three possible offers as clear, distinct things he can do, without pretending one is an established practice.
4. **Maintainable by its owner.** The site stays simple enough that Leandro can update it himself, quickly, without tooling he doesn't understand.
5. **Ship, then improve.** A small honest v1 beats a polished site that never launches.
