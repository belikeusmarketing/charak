# MEMORY.md

## Project Overview
- **Brand:** JEEV ANKUR by CHARAK HAIR CARE
- **Type:** Premium Ayurvedic hair-care brand, WooCommerce website
- **Build stack:** Astro (src/pages/index.astro, src/layouts/Base.astro), WooCommerce backend
- **Target feel:** Premium, modern, trustworthy, high-converting, Ayurvedic aesthetic

## Design Direction
- **Visual inspiration:** Uploaded reference image — use as primary inspiration for structure, hierarchy, palette, typography, product presentation, spacing
- **Rule:** Do NOT copy the reference exactly; create an original site inspired by its design language
- **Aesthetic:** Premium Ayurvedic, botanical, trustworthy
- **Color palette:** Botanical green (confirmed palette in use for homepage)
- **Typography:** Premium serif/sans pairing to match Ayurvedic premium feel

## Contrast & Accessibility Rules (IMPORTANT)
- Never reuse a section's own background color for text/buttons sitting on it — causes near-invisible text
- Rule: dark text on light sections, light text on dark sections
- Apply especially to: CTA buttons ("Book Free Checkup"), announcement bar, hero eyebrow text, section eyebrow text (e.g., "Real People • Real Stories")
- Build tool flags contrast ratios below ~3:1 — fix immediately

## Layout & Sections
- Homepage built with these sections (in order):
  1. Hero
  2. Trust strip
  3. Problem/benefit narrative
  4. Product showcase
  5. Ritual/ingredients
  6. Story/about
  7. Testimonials (9:16 video carousel)
  8. FAQ
  9. Final CTA
- **Testimonial carousel:** 9:16 aspect ratio video-style testimonials with name, city, caption, duration, thumbnail (Pexels imagery)
- **Trust strip:** chips must not visually overlap — ensure proper spacing/wrapping between items like "Trusted by Thousands" and "Suitable for All Hair Types"

## Image Sourcing
- Use Pexels for product/lifestyle photography via searchPexelsPhoto
- Reel-style testimonial thumbnails sourced from Pexels (e.g., pexels.com/photos/28994388)

## File Conventions
- Homepage entry: `src/pages/index.astro`
- Shared layout: `src/layouts/Base.astro`
- Uses `kleap-write` / `kleap-command` / `kleap-edit` / `kleap-codebase-context` tool tags for file ops, edits, and Pexels search

## Content Tone
- Hinglish captions acceptable in testimonials (e.g., "Hair fall kam hua aur improvement notice hua.")
- Customer cities include Indore, Ujjain (MP region)
- Ayurvedic terminology: scalp, hair fall, ritual, ingredients