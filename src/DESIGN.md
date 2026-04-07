# Design System Specification: The Architectural Intelligence

## 1. Overview & Creative North Star
**Creative North Star: "The Digital Obsidian"**

This design system moves away from the "boxy" nature of traditional fintech to embrace a high-end, editorial approach to data density. The "Digital Obsidian" concept focuses on depth through darkness, where information isn't just displayed—it is curated. We break the "template" look by utilizing **Tonal Architecture**: using varying depths of deep teals and charcoal blues to create a sense of infinite space. 

By prioritizing intentional asymmetry and "breathing" data clusters, we move beyond the rigid grid. The interface should feel like a precision instrument—authoritative, silent, and incredibly sharp.

---

## 2. Colors & Surface Architecture

### The Palette
We utilize a spectrum of deep teals (`primary`) and muted slate blues (`secondary`) to establish trust. Data visualization relies on `tertiary` (Emerald) for growth and `error` (Coral) for critical indicators.

- **Primary (The Pulse):** `#2ddbde` (Primary) / `#004c4d` (Container). Use for high-action focal points.
- **Surface (The Void):** `#0e1416` (Background). A deep, non-black base that prevents eye strain in high-density environments.

### The "No-Line" Rule
**Explicit Instruction:** Designers are prohibited from using 1px solid borders for sectioning. 
Structure must be defined through:
1.  **Value Shifts:** Placing a `surface_container_high` card against a `surface_dim` background.
2.  **Negative Space:** Using the spacing scale to group related data points.
3.  **Tonal Transitions:** Subtle shifts in background color to denote a change in context.

### The "Glass & Gradient" Rule
To elevate the "high-tech" feel, floating elements (modals, dropdowns) must use **Glassmorphism**. 
- **Recipe:** `surface_container_highest` at 80% opacity + `backdrop-blur: 20px`.
- **Gradients:** Use a linear gradient from `primary` to `primary_container` for hero CTAs to add "soul" and dimension.

---

## 3. Typography: Editorial Precision

The system uses a dual-font strategy to balance character with legibility.

*   **Display & Headlines (Manrope):** A geometric sans-serif that feels engineered. Use `display-lg` through `headline-sm` for portfolio totals and section headers. High-contrast sizing creates an editorial rhythm.
*   **Body & Data (Inter):** The workhorse. Use `body-md` for data tables and `label-sm` for micro-copy. Inter’s tall x-height ensures that complex financial figures remain legible even at small scales.

**Typography as Brand:** Numbers are never "just text." Use `title-lg` for primary balances to give them an authoritative weight, ensuring the user's eye is immediately drawn to the most critical "Truth" on the screen.

---

## 4. Elevation & Depth: Tonal Layering

Traditional shadows feel "dirty" on deep dark themes. We achieve hierarchy through **Tonal Stacking**.

*   **The Layering Principle:** 
    *   Base Level: `surface` (#0e1416)
    *   Secondary Layout Area: `surface_container_low`
    *   Interactive Cards: `surface_container_high`
*   **Ambient Glow:** For floating elements, use a "shadow" that is actually a glow. Use the `on_surface` color at 4% opacity with a 32px blur. It should look like light catching the edge of a lens, not a shadow cast on a wall.
*   **The Ghost Border:** If a boundary is strictly required for accessibility (e.g., in a complex data table), use `outline_variant` at **15% opacity**. It should be felt, not seen.

---

## 5. Components: The Precision Set

### Buttons
- **Primary:** Gradient fill (`primary` to `primary_container`) with `on_primary_fixed` text. Radius: `md` (0.375rem).
- **Secondary:** Surface-only with a "Ghost Border." High-polish, low-distraction.

### Input Fields
- **State:** Avoid box-enclosed inputs where possible. Use a `surface_container_lowest` background with a `primary` 2px bottom-accent on focus. 
- **Typography:** Placeholder text uses `on_surface_variant` for a muted, sophisticated feel.

### Cards & Data Lists
- **Rule:** **No Divider Lines.** Separate list items using 8px of vertical padding and a hover state shift to `surface_container_highest`. 
- **Roundedness:** All cards use `lg` (0.5rem) to soften the "tech" edge, making the platform feel modern yet professional.

### Additional Fintech Components
- **Trend Micro-Sparklines:** Use `tertiary` (Emerald) for 24h gainers. Lines should be 1.5px thick with a subtle glow (blur: 4px).
- **Glass-Ticker:** A scrolling asset ticker at the bottom of the viewport using the Glassmorphism recipe to appear "above" the architecture.

---

## 6. Do’s and Don’ts

### Do
*   **Do** use `primary_fixed_dim` for icons to give them a "lit from within" look.
*   **Do** prioritize whitespace over lines. If the data feels cluttered, increase the spacing, don't add a border.
*   **Do** use `tertiary` (Emerald) and `error` (Coral) sparingly. They are indicators, not decorative elements.

### Don’t
*   **Don’t** use pure white (#FFFFFF) for text. Use `on_surface` (#dee3e6) to maintain the sophisticated tonal balance.
*   **Don’t** use "Drop Shadows" from standard UI kits. They break the Obsidian aesthetic.
*   **Don’t** use sharp 0px corners. Financial data is "hard"; the UI must be "approachable" through our defined `md` and `lg` corner scales.