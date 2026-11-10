# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack

**Astro, static output** (chosen by the owner over plain HTML/CSS), with case studies and project write-ups as Markdown content collections. Astro ships zero JavaScript by default, its templates read like plain HTML so the owner can maintain it, and built-in i18n routing makes a later Dutch version cheap. Hosting: **GitHub Pages** at `itsleloli.github.io`, built and deployed by a GitHub Actions workflow.

This replaces an existing hand-written HTML + Bootstrap 4 site (game-development portfolio, 2023–2024) in the same repository.

## Users

1. **Primary: prospective freelance clients** (SMEs, agencies) deciding whether to hire Leandro for a project. Which client type comes first is deliberately undecided.
2. **Secondary: employers and recruiters** for a developer role, in the Netherlands or abroad. The site must also work as his CV.

Their job on the site: understand what he can do, see proof that he has built real systems that run a business, and decide whether to get in touch.

The concrete offers stay open and are shown side by side, not ranked:

- e-commerce integrations (Shopify, middleware, connecting systems);
- Odoo/ERP work for SMEs;
- web apps and portals.

Name on the site: Leandro (Leandro Bonora; full name Leandro Rosero Bonora). Not "Leo".

## Product Purpose

**Goal: go ZZP (freelance) in 2027.** The site is the thing he hands out at networking events and sends to potential leads, so it must work instantly on a phone (scanned from a QR code or typed from a card) and make the offer and the contact obvious. Until 2027 he's employed; the site says freelance work starts in 2027 and invites conversations before then.


A personal portfolio site that starts a small freelance practice alongside a part-time developer job and a full-time HBO study, and doubles as his CV for job applications. Success means a visitor can tell within a short read what Leandro does, sees credible evidence of production work, and has an obvious way to contact him.

## Positioning

Title on the site: **Software developer** (Leandro, Nov 2026: he did not want to be boxed into one niche, and "business systems developer" leaned too far into business). The sub line carries the specifics: e-commerce, Odoo, integrations, web apps. The business-IT bridge is shown through the content, not named in the title.

**The business-IT bridge.** A versatile developer who understands the business side and can also build it: he works out what a business actually needs, designs how the systems fit together, and builds the parts people use. The proof is a live e-commerce operation (production Laravel middleware connecting Shopify and Odoo, a Shopware → Shopify migration, a customer portal), and the business side comes from his Business IT & Management study and from working directly with the people who use his systems.

What gives him energy, and what the site should foreground: designing systems (architecture, data flows), working with people (finding out what users need, explaining, writing manuals), and building what people see (portals, interfaces). Long-term direction is genuinely open (Leandro, Nov 2026: "idk what I want to do next"); software architecture is one possibility, never presented as a title or a fixed plan. The site shows "Next: a BIM internship, then freelance." (Leandro, Nov 2026). Claim only what the evidence below supports.

The one thing a visitor should remember: he gets the business side *and* can code it.

## Operating Context

- Built and maintained by Leandro himself, in limited time (side-project budget of roughly 5–8 hours a week).
- Primary language: **English**, to support working internationally. Dutch is his native language; a Dutch version is a possible later addition, not a launch requirement.
- Version 1 should ship rough and early rather than wait for completeness.

## Capabilities and Constraints

- Confirmed content types: case studies / project write-ups, an about section, and a contact route.
- Boerschappen work may only be shown **anonymised**: no employer name, internal system names, data, screenshots of internal tools, or client details. His employment contract's clause on side work (nevenwerkzaamheden) and competition is still unchecked; until it is, nothing on the site may present Boerschappen work as a freelance offering competing with the employer.
- Undecided: which client segment to lead with, pricing, availability/hours offered, business registration (KvK/btw), domain and hosting.

## Brand Commitments

- Voice (Leandro, Nov 2026): personal and direct, first person, no buzzwords like "passionate developer".

- Tone: professional, with a few human touches. Work leads; a short about section may mention cooking, strength training and languages (Dutch native, English fluent, Spanish beginner), with his photo (`images/prof-me-v*.png`).

## Evidence on Hand

- Day-job work, employer described only as **"a Dutch meal-kit company"**. Built or led by Leandro (may be claimed as "I built"):
  - **Order-sync middleware** (Laravel; on the site only as part of the migration story, not as its own case: Leandro, "isn't impressive at all"): webhooks in, queued idempotent workflows, retries/backoff, an admin panel for failed syncs; connects webshop, ERP (Odoo), carriers and payment.
  - **Shopware → Shopify migration**, together with the back office moving to Odoo, including the rewrite of the middleware from the old flow to the new one. **In progress: the new webshop is not live yet** (confirmed by Leandro, Nov 2026); never present it or the order sync as live in production.
  - **Customer self-service portal** (Laravel + Filament): deliveries, subscriptions, recipes, pause/cancel; piloted with a whitelist of customers, then rolled out to all. Real work, but deliberately **not shown** on the site (Leandro finds it the least interesting).
  - Odoo module work (Python) is part of his job but was **not** confirmed as his to claim; describe it at most as "contributed to" until he says otherwise.
- Career path: joined as a trainee and had a junior developer contract within 7 months; the role grew into integrations, Odoo (QWeb, ORM, Studio) and IT admin (Google Workspace), well beyond the title. 24 h/week of development next to a full-time HBO.
- Got into programming through gaming. Off the clock: cooking (nasi, roti; Asian and Latin food; still cooks in a Korean kitchen sometimes), sewing and designing his own clothes, travel (Shanghai, Seoul, Tokyo, Okinawa), the gym.
- Personal and school (BIM) projects he can show; specific projects not yet listed.
- **Earlier work (game development, Grafisch Lyceum Utrecht, 2022–2024):** existing project pages, GIFs, videos and two game design documents in this repo (`images/`, `gifs/`, `videos/`, `pdf/`). Chef Line's Journey, Starline, Six Bullets, Sea Monkey, Christmas Fight, a Donkey Kong remake, Blender/3D-printing. The new site keeps the strongest 2–3 as an "Earlier work" section, as proof of C#/Unity skill and shipped projects; the rest leave the site.
- Contact: email and LinkedIn. GitHub is deliberately not linked (Leandro, Nov 2026): his real work is in private repos, so the public profile would undersell him. The old PHP contact form never worked on GitHub Pages and must not be carried over as-is.
- The CV PDF (`pdf/Website CV Leandro Bonora 1-2024 English.pdf`) is outdated (January 2024, game-dev era).
- **Absent, must not be fabricated:** testimonials, client logos, named freelance clients, paid freelance projects, metrics or results figures, certifications, pricing.

## Product Principles

1. **Proof over adjectives.** Every capability claim points at something he actually built; where no proof exists, the site says less.
2. **Anonymised but concrete.** Describe systems, problems and trade-offs in specific technical terms without exposing the employer.
3. **Business first, then the build.** Every case study opens with the business problem and who it affected, then the system design, then the code. That order is the positioning.
4. **Keep the direction open, not vague.** Show the possible offers as clear, distinct things he can do, without pretending one is an established practice.
5. **Maintainable by its owner.** The site stays simple enough that Leandro can update it himself, quickly, without tooling he doesn't understand.
6. **Ship, then improve.** A small honest v1 beats a polished site that never launches.
