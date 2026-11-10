---
name: Leandro Bonora
description: A workshop wall where a business's work is mapped in a few big sticky notes, then built.
colors:
  wall: "#f6f7f9"
  ink: "#16171a"
  ink-soft: "#4b4f58"
  link-blue: "#1f4fd6"
  note-yellow: "#ffe14d"
  note-orange: "#ff8a1f"
  note-blue: "#5b8cff"
  note-pink: "#ff5fa2"
  print-white: "#ffffff"
typography:
  display:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "clamp(3.2rem, 9.5vw, 6rem)"
    fontWeight: 800
    lineHeight: 0.92
    letterSpacing: "-0.04em"
  headline:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "clamp(2.3rem, 5vw, 3.4rem)"
    fontWeight: 800
    lineHeight: 1
    letterSpacing: "-0.025em"
  title:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "clamp(1.8rem, 3.6vw, 2.8rem)"
    fontWeight: 800
    lineHeight: 1.05
    letterSpacing: "-0.025em"
  subtitle:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "clamp(1.3rem, 2.2vw, 1.75rem)"
    fontWeight: 700
    lineHeight: 1.15
    letterSpacing: "-0.015em"
  note:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "clamp(1.15rem, 1.9vw, 1.55rem)"
    fontWeight: 700
    lineHeight: 1.12
    letterSpacing: "-0.01em"
  lede:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "clamp(1.2rem, 1.8vw, 1.45rem)"
    fontWeight: 400
    lineHeight: 1.4
  body:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "1.125rem"
    fontWeight: 400
    lineHeight: 1.6
  small:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "0.95rem"
    fontWeight: 400
    lineHeight: 1.45
  label:
    fontFamily: "'Bricolage Grotesque Variable', 'Bricolage Grotesque', system-ui, sans-serif"
    fontSize: "0.82rem"
    fontWeight: 650
    lineHeight: 1.2
rounded:
  none: "0px"
spacing:
  gutter: "clamp(16px, 4vw, 48px)"
  section: "clamp(72px, 9vw, 128px)"
  container: "1240px"
  note-gap: "clamp(40px, 4.5vw, 64px)"
  phone-grid: "16px"
components:
  note-yellow:
    backgroundColor: "{colors.note-yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.note}"
    rounded: "{rounded.none}"
    padding: "18px 18px 16px"
    width: "clamp(168px, 19vw, 232px)"
  note-orange:
    backgroundColor: "{colors.note-orange}"
    textColor: "{colors.ink}"
    typography: "{typography.note}"
    rounded: "{rounded.none}"
    padding: "18px 18px 16px"
    width: "clamp(168px, 19vw, 232px)"
  note-blue:
    backgroundColor: "{colors.note-blue}"
    textColor: "{colors.ink}"
    typography: "{typography.note}"
    rounded: "{rounded.none}"
    padding: "18px 18px 16px"
    width: "clamp(168px, 19vw, 232px)"
  note-pink:
    backgroundColor: "{colors.note-pink}"
    textColor: "{colors.ink}"
    typography: "{typography.note}"
    rounded: "{rounded.none}"
    padding: "18px 18px 16px"
    width: "clamp(168px, 19vw, 232px)"
  note-ghost:
    textColor: "{colors.ink}"
    typography: "{typography.note}"
    rounded: "{rounded.none}"
    padding: "18px 18px 16px"
  button-cta:
    backgroundColor: "{colors.note-pink}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: "12px 20px"
    height: "48px"
  print:
    backgroundColor: "{colors.print-white}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: "12px 12px 0"
---

# Design System: Leandro Bonora

## Overview

**Creative North Star: "The Workshop Wall"**

The site is the whiteboard wall of a requirements workshop: a cool, nearly white surface where a business's work is mapped in a handful of big, bright sticky notes, joined by thick marker arrows, and then built. Every page is that wall. Notes carry the story, colour carries the meaning, and the empty wall around them is part of the composition. Nothing is a card grid, a table, or a spec sheet.

Density is low on purpose. One element owns each screen; at most about five notes are visible at once; sections are separated by generous stretches of bare wall rather than rules or panels. Material is literal but restrained: flat paper squares with a real, soft shadow and a small tilt, photos pinned as white-bordered prints under translucent tape, one authored arrow shape. The single typeface, Bricolage Grotesque, does all the work, heavy for display and quieter in prose.

The interaction is the wall's own: on desktop the hero notes can be picked up and dragged, and the marker arrows redraw live to follow them; dropped notes settle at a fresh small tilt. On phones the same notes lock into a two-column grid that the arrows read as a Z.

**Key Characteristics:**
- Cool whiteboard wall, marker-black ink, four sticky-note colours with fixed meanings.
- Flat square notes, no corner radius, soft two-layer shadow, tilt between about -3 and +3 degrees.
- Live SVG marker arrows drawn note edge to note edge.
- One typeface (Bricolage Grotesque Variable), weight 800 for every heading.
- One pink call to action, repeated in the same form wherever it appears.
- Lots of empty wall; no tables, section numbers, part codes, or kicker labels.

## Colors

A cool, nearly colourless wall and ink, with four saturated sticky-note colours that each mean one thing.

### Primary
- **Problem Pink** (note-pink): the problem a case starts from, and the call to action. Featured and compact case notes, the hero's "Let's talk" note, the header CTA, the large contact note. Its double role is deliberate: the problem and the way to bring him one.

### Secondary
- **People Yellow** (note-yellow): people and personal voice. The first hero note ("I find out what a business really needs"), the "Off the clock" hobby notes, the "always open to work" statement, the name mark in the header, text selection, and the tint of print tape.
- **Systems Blue** (note-blue): what the system does. The three offer notes and the design step in case flows.
- **Happening Orange** (note-orange): what happens, events and steps in time. The build step in the hero, the path notes in "The short version", event steps in case flows. Orange also serves as the marker underline under headline links (case titles, game captions, "Next" links, nav hover).

### Neutral
- **Whiteboard Wall** (wall): the page background, the sticky header, and the browser theme colour.
- **Marker Ink** (ink): all text on notes and wall, marker arrows, ghost-note dashes, focus outline.
- **Faded Ink** (ink-soft): sub lines, ledes, meta lines, footer, game descriptions.
- **Link Blue** (link-blue): inline body links, underlined at 35% opacity and full on hover. Distinct from Systems Blue; never used as a note fill.
- **Print White** (print-white): pinned photo prints and the CV card, the only surfaces lighter than the wall.

### Named Rules
**The Fixed Roles Rule.** A note's colour is its meaning: yellow people, orange what happens, blue what the system does, pink the problem or the call to action. Never pick a note colour for variety or balance.

**The One Pink Action Rule.** The call to action is always a pink note-shaped element that leads to email. There is no second button style.

## Typography

**Display Font:** Bricolage Grotesque Variable (self-hosted via @fontsource-variable, with system-ui fallback)
**Body Font:** the same family, optical sizing on

**Character:** One expressive grotesque used at every size. At 800 with tight tracking it reads like a confident marker headline; in prose it relaxes into a warm, readable sans.

### Hierarchy
Every font-size in the code is one of nine tokens in `src/styles/global.css` (`--fs-display` … `--fs-label`); there are no one-off sizes.

- **Display** `--fs-display` (800, clamp 3.2 to 6rem, line-height 0.92, tracking -0.04em): the name in the hero, and the title of a case page.
- **Headline** `--fs-headline` (800, clamp 2.3 to 3.4rem, line-height 1): section titles on the wall.
- **Title** `--fs-title` (800, clamp 1.8 to 2.8rem, line-height 1.05): featured case titles, "Next" links, the large contact note.
- **Subtitle** `--fs-subtitle` (700–800, clamp 1.3 to 1.75rem): compact case titles, the games heading, the about lead, prose h2 on case pages.
- **Note** `--fs-note` (700, clamp 1.15 to 1.55rem, line-height 1.12): text written on a medium note. Small notes and phone notes use `--fs-small`.
- **Lede** `--fs-lede` (400, clamp 1.2 to 1.45rem, line-height 1.4, max 40ch, faded ink): one sentence under a section title; the hero sub line; case summaries.
- **Body** `--fs-body` (400, 1.125rem, line-height 1.6; case prose at max 64ch).
- **Small** `--fs-small` (0.95rem): meta lines, nav, footer, small notes, CV card lists.
- **Label** `--fs-label` (650, 0.82rem): the foot line at the bottom of a note ("Email me", "Integrations", dates). Sentence case, never uppercase, never above a title.

### Named Rules
**The Single Family Rule.** Bricolage Grotesque is the only typeface. Hierarchy comes from weight (400 to 800) and size, not from a second family.

**The Foot Label Rule.** Any small label on a note sits at its foot, after the content. Nothing small and tracked-out sits above a heading.

## Layout

A single centred container (max 1240px) with fluid side gutters (16 to 48px). Sections stack vertically with a large fluid step (72 to 128px) between them; that empty wall is the main separator, with no rules or background bands.

Notes travel in horizontal flows: flex rows with wide column gaps (40 to 64px) so the marker arrows have room to land. Content pairs (a case note and its text, the photo and the about text, the contact note and its links) sit side by side in two-column grids with the note or print on the left.

At 700px and below, every note flow becomes a two-column grid with 16px gaps (36px when it carries arrows), so four notes form a 2x2 block read as a Z. Note widths go fluid, text drops to about 1rem, and dragging is turned off so swipes scroll the page. The main nav hides at 640px, leaving the name and the pink CTA. Two-column grids collapse to one column between 700 and 1000px depending on content.

**The Empty Wall Rule.** No more than about five notes are visible at once, and each screen has one element that owns it.

## Elevation & Depth

Depth is physical and shallow: things stuck on a wall. Notes, prints, the CV card, the CTA and the header name mark all share one soft two-layer shadow, a tight contact shadow plus a longer blurred drop. Lifting (hover on a linked note, holding a dragged note) swaps to a slightly deeper version of the same shadow. The wall itself is flat. The ghost note has no shadow because it is not stuck on yet.

### Shadow Vocabulary
- **Stuck** (`box-shadow: 0 1px 1px rgb(22 23 26 / 0.08), 0 14px 22px -12px rgb(22 23 26 / 0.35)`): resting state for every note, print, card and CTA.
- **Lifted** (`box-shadow: 0 2px 2px rgb(22 23 26 / 0.08), 0 26px 36px -14px rgb(22 23 26 / 0.4)`): hover on a linked note or print, a held note, the CTA on hover.
- **Tape** (`box-shadow: 0 1px 2px rgb(22 23 26 / 0.12)`): the translucent tape strip only.

### Named Rules
**The Paper Shadow Rule.** Shadows are soft and fall downward, like paper on a wall. No hard offset shadows, no glows, no coloured shadows.

## Shapes

Everything is a square-cornered rectangle. Notes are true squares (aspect ratio 1); prints and the CV card are rectangles with no radius. The only curves are the marker arrows (a slight upward bow, round caps and joins) and the 2px radius on the focus outline. Rotation is the shape language: notes tilt between about -3 and +3 degrees, prints about -2, the CV card -0.6, tape +3, the header name mark -6. Tilts alternate direction within a flow so a row never leans one way.

## Components

### Sticky Note
Flat, square, bright, and slightly crooked.
- **Shape:** square, no radius, soft "Stuck" shadow, rotated by its own tilt.
- **Sizes:** small (clamp 140 to 176px), medium (clamp 168 to 232px), large (clamp 220 to 340px, used once for contact).
- **Content:** text at the top in Note type, optional foot label pushed to the bottom.
- **Colour:** by role only (see Colors).
- **Linked note:** straightens to 0 degrees and lifts to the "Lifted" shadow on hover (360ms, ease-out-expo).
- **Draggable (hero, desktop only):** grab cursor, lifts while held, settles at a random tilt within plus or minus 3 degrees on release.

### Ghost Note
A note not stuck on the wall yet, used for what comes next (the "Next: still figuring that out." path step). Transparent, 2.5px dashed ink border, no shadow, same square and tilt as a note.

### Marker Arrows
Drawn live in one SVG layer behind each note flow, from the edge of one note to the edge of the next, never centre to centre. Ink, 4px stroke (3px on phones), round caps, a slight upward bow and an open chevron head. They redraw on resize, font load and while a note is dragged. A note can opt out (the pink CTA in the hero is not part of the flow).

### Call to Action
The pink note turned into a button: pink fill, ink text at weight 750, 12px by 20px padding, min height 48px (42px in the header), no radius, "Stuck" shadow, tilted -1.5 degrees. Hover straightens it, nudges it up 2px and lifts the shadow.

### Pinned Print
Photos and game covers as prints pinned to the wall: white border (12px, 8px for game covers) with the caption written on the print below the image at weight 650, the "Stuck" shadow, a small tilt, and a strip of translucent yellow tape across the top edge (yellow mixed with white at roughly half opacity). Hover straightens and lifts it.

### CV Card
A sheet of white paper taped to the wall: print white, "Stuck" shadow, -0.6 degree tilt, tape on top, three columns of short lists under weight-800 subheads (two columns under 1000px, one under 640px).

### System Map
A case study's architecture drawn on the wall (`MigrationMap.astro`), portrait so it reads on a phone: external systems as white cards with the "Stuck" shadow, the middleware as one blue card holding white sub-cards, ink marker arrows (3px, round caps) with small label-size captions, a dashed ink divider between "today" and "after the switch", and one tilted pink note for the hard part. Text uses the type tokens, so it scales with the drawing. On a case page it sits in the right column above "Built with" (first on phones).

### Offer Note
"What I can do for you" uses small blue notes (max 230px) that are filled, not empty: the offer at the top in note type (800), the proof written at the foot in small type (600). Four across on desktop, a 2×2 grid on phones.

### Hint Sticker
A small orange note (62px, 56px on phones) stuck over the corner of the featured game print, tilted 8 degrees, label-size bold text ("Play this one!"). The same sticker in yellow marks "8.3 cum laude" on the MBO note, on its top-right corner. One per section at most.

### Navigation
A slim sticky header on the wall colour: the name at weight 800 beside a tiny tilted yellow note mark, three plain ink links at weight 600 (Work, About, CV) whose hover is a 3px orange underline, and the pink CTA at the right. On phones only the name and the CTA remain.

### Inline Arrow
One authored SVG arrow (1.6px stroke, 0.85em) for "Email me", "All work" and "Next" links, rotated for direction. Never a Unicode arrow glyph.

## Do's and Don'ts

### Do:
- **Do** colour every note by its role: yellow people, orange what happens, blue what the system does, pink the problem or the call to action.
- **Do** join notes in a flow with the live marker arrows, edge to edge, and leave 40 to 64px between notes so the arrows have room.
- **Do** tilt notes and prints a few degrees, alternating direction within a row.
- **Do** use the dashed ghost note for anything that has not happened yet.
- **Do** show photos as white-bordered prints with tape and a caption on the print.
- **Do** put any small label at the foot of a note, in sentence case.
- **Do** turn every note flow into a two-column grid on phones, read as a Z.
- **Do** keep reduced motion respected: no transitions on notes, no smooth scroll.

### Don't:
- **Don't** use tables, section numbers, part codes, or kicker/eyebrow labels above titles.
- **Don't** add a second button style; the pink note CTA is the only one.
- **Don't** round the corners of notes, prints, or the CTA.
- **Don't** use hard offset shadows, glows, or coloured shadows.
- **Don't** pick a note colour for decoration or variety.
- **Don't** put more than about five notes on one screen or fill the empty wall with panels or bands.
- **Don't** introduce a second typeface or use Unicode arrow glyphs.
