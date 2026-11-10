---
order: 1
title: Moving the webshop and the ERP, at the same time
summary: Rebuilding the integrations for a move from Shopware to Shopify while the back office moves to Odoo, without the current shop missing a single order along the way.
problem: "New webshop and new ERP. At the same time."
role: Building the new flow
period: 2026 – now
status: In progress
diagram: migration
stack: [PHP, Laravel, Redis, Filament, Shopify GraphQL API, Odoo, GitHub Actions]
flow:
  - { color: orange, text: "Webshop moves to Shopify, ERP moves to Odoo" }
  - { color: pink, text: "Every integration depends on the old setup" }
  - { color: blue, text: "One contract, old and new side by side" }
  - { color: orange, text: "New flow ready, switch-over next" }
---

## The problem

The company is moving its webshop from Shopware to Shopify, and at the same time moving its back office to Odoo. Orders, customers, delivery options and stock all depend on the old setup. The current shop has to keep running, and keep every order, until the switch-over is done.

## How I designed it

I described each system by what the business needs from it ("create an order", "find a customer") instead of by its API. The old and new setups each get their own adapter behind that same contract. That means the new flow can be built and tested next to the old one instead of rewriting it in place, with separate deploys so the two never get mixed up.

The heart of the new flow is the order sync: every webshop order is fetched fresh from Shopify, written to Odoo as a sale order with its customer, discounts, shipping and delivery date, and retried if something fails along the way. Anything that still goes wrong shows up in an admin panel with the reason and a re-run button, so colleagues don't need a developer to find out what happened.

## The tricky bits

- Two moving targets at once. When the webshop and the ERP both change, every assumption about where an order or a customer "lives" has to be checked twice.
- "An order" means two different things depending on which shop it comes from. Keeping them apart matters more than any single feature.
- One cent off: Odoo's totals sometimes differed from Shopify's by a cent, because VAT was rounded per line. Mapping the taxes the way Odoo expects made them match exactly.
- Knowing when to delete: the old flow lives on its own branch, where it keeps running untouched for the current shop.

## Where it is now

In progress. The new flow is built and tested against Shopify and Odoo, and the old one keeps the current shop running. The switch-over is still ahead, and it's the hardest and most interesting project I've worked on.
