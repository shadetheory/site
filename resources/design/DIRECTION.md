# Ash Is Still Paper

## The Vibe

Something that was fire once. Now it's quiet. Not dead — transformed. The residue of heat on a page that survived. There's beauty in what remains when the burning stops.

This site should feel like opening a field notebook that's been left on a windowsill through a full summer. Faded but not forgotten. Warm edges. Slight imperfection as a feature, not a bug.

## Visual Language

### Color Palette

- **Paper** `#F5F0E8` — warm, slightly yellowed white. Not clinical. The color of a page that's been read.
- **Charcoal** `#2C2C2C` — not pure black. Soft, like graphite on textured stock.
- **Ash** `#8B8680` — warm gray with brown undertones. For secondary text, borders, subtle structure.
- **Ember** `#C4704B` — muted terracotta. Used sparingly — a link hover, a highlighted date, the one thing you want noticed.
- **Smoke** `#D6CFC4` — the lightest warm gray. Backgrounds of cards, blockquotes, sections that need gentle separation.
- **Burnt** `#1A1613` — near-black with warmth. For large type on light backgrounds.

### Typography

- **Headlines**: A serif with weight. Something that looks like it was set by hand. Consider DM Serif Display, Playfair Display, or Literata.
- **Body**: A clean, warm sans-serif. Inter, Söhne, or the system stack with `-apple-system` warmth.
- **Code/Labels**: Monospace that feels editorial. JetBrains Mono, IBM Plex Mono.
- **Scale**: 1.25 ratio. Generous line-height (1.6+ for body). Let the text breathe like it has room on the page.

### Texture & Surface

- Subtle paper grain overlay on hero sections — barely perceptible, felt more than seen.
- No hard drop shadows. Box shadows only as warm, diffused glows at low opacity.
- Borders in Ash, not charcoal. Hairline rules should feel like they were drawn with a dull pencil.
- Cards float gently. A 1px border and a whisper of shadow. Nothing that screams "container."

### Motion

- Transitions ease out at 300ms. Nothing bounces. Nothing springs.
- Page transitions feel like turning a page — not sliding, not fading. A gentle fold or opacity shift.
- Scroll animations are minimal. Content reveals itself like ink drying — slow enough to notice, fast enough not to wait.

### Photography & Imagery

- Desaturated 20-30%. Warm tone overlay if needed.
- Heavy vignetting is welcome. Corners darkening like the edges of an old photograph.
- Avoid stock that feels "curated." Choose images that feel found — like they were taken because the light was right, not because the brief said so.

## The Rules

1. **Everything ages gracefully.** If a design decision has a choice between "crisp and new" and "warm and lived-in," choose the latter.
2. **White space is not empty space.** It's the margin on a well-set page. It's intentional.
3. **If it looks designed, it's too much.** The best version of this site is one where someone says "that's nice" and can't tell you why.
4. **Ash is not gray.** Ash has memory of fire. Every neutral in this palette carries warmth.

## Implementation Notes

- Tailwind config should extend with the palette above. Default grays are too cold.
- Custom utilities for paper grain texture (CSS noise or SVG filter).
- Filament admin panel should feel like a different room — cleaner, more structured, but still warm. The same house, just the office.
- Dark mode (if added later) is not inversion. It's the same page under candlelight.

---

*This document is the aesthetic contract. When in doubt, refer back.*
