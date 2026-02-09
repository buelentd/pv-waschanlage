# HS-Straubing Design System
## Basierend auf ClimaCONNECT.de

---

## 🎨 Farbpalette

### Primärfarben
- **Orange (Primary)**: `#ee7f00`
- **Dunkelblau (Dark)**: `#192430`
- **Weiß**: `#ffffff`
- **Hellgrau (Background)**: `#f5f5f5`

### Sekundärfarben
- **Grau**: `#d3d3d3`
- **Blau-Grau**: `#8a9bb4`
- **Helles Grau**: `#e9ecf0`

### Buttons & Akzente
- **Hover/Active**: `#192430` (Dark)
- **CTA Background**: `#ee7f00` (Orange)

---

## 📝 Typografie

### Font Family
**Montserrat** (Google Fonts)
- Weight: 400 (Regular)
- Weight: 500 (Medium)
- Weight: 600 (Semi-Bold)
- Weight: 700 (Bold)
- Weight: 800 (Extra-Bold)

### Font Sizes (Desktop → Mobile responsive)
- **6xl**: 5rem → 2.6rem (Hero Headlines, uppercase)
- **5xl**: 3.75rem → 2rem
- **4xl**: 2.625rem → 1.8rem (Section Headlines, bold, uppercase)
- **3xl**: 2rem → 1.25rem
- **2xl**: 1.5rem → 1.18rem
- **xl**: 1.25rem → 1rem
- **lg**: 1.125rem (600 weight, uppercase)
- **base**: 1rem → 0.9rem
- **sm**: 0.875rem
- **xs**: 0.75rem

### Text Styles
- **Headlines**: Uppercase, Bold (700-800)
- **Body**: Regular (400)
- **Links**: Unterstrichen
- **CTAs**: Uppercase, Semi-Bold (600)

---

## 🔲 Spacing & Layout

### Container
- Max-width: `1400px`
- Padding: `50px` (Desktop) → `30px` (Tablet) → `20px` (Mobile)

### Border Radius
- **Standard**: `40px` (große, sehr abgerundete Ecken)
- **Buttons**: `33px`
- **Small Elements**: `12px`

### Padding (Sections)
- Desktop: `100px 0`
- Tablet (< 1200px): `50px 0`
- Mobile (< 1000px): `30px 0`

---

## 🔘 Buttons & CTAs

### Button-Varianten

#### 1. **CTA Full (Orange)**
```css
background: #ee7f00;
border: 2px solid #ee7f00;
border-radius: 33px;
color: #192430;
padding: 20px;
min-width: 250px;
font-weight: 600;
text-transform: uppercase;

/* Hover */
background: #192430;
border-color: #192430;
color: #ee7f00;
```

#### 2. **CTA Transparent**
```css
background: transparent;
border: 2px solid #ee7f00;
border-radius: 33px;
color: #192430;
padding: 20px;
min-width: 250px;
font-weight: 600;

/* Hover */
background: #192430;
border-color: #192430;
color: #ee7f00;
```

#### 3. **CTA Dark with Arrow**
```css
background: #192430;
border-radius: 33px;
color: #fff;
padding: 20px 80px 20px 40px;
font-weight: 600;
position: relative;

/* Arrow (SVG background) */
/* Hover */
background: #fff;
color: #192430;
```

---

## 🧩 Komponenten

### Header/Navigation
- Sticky Navigation
- Backdrop-blur: `blur(49px)`
- Background: `#fff` (opacity 0.9)
- Border-radius: `30px` (bottom corners)
- Logo height: `80px`
- Nav-links: Uppercase, bold (600), `1.1rem`

### Hero Image
- Height: `60vh` (min 500px)
- Border-radius: `40px`
- Position: Top 120px from viewport
- Overlay: Optional dark overlay (opacity 0.35)

### Image-Text Sections
- Layout: 50/50 (Desktop), 100% (Mobile)
- Images: Border-radius `40px`
- Background-colored shapes: Border-radius `40px`, positioned absolutely
- Text padding: `50px` → `30px` → `20px`

### Cards/Boxes
- Border-radius: `40px`
- Border: `1px solid #d3d3d3`
- Padding: `20px` - `50px`
- Hover: Box-shadow `0 0 30px -5px #ee7f00`

### Footer
- Background: Colored with border-top-left-radius `12px`
- Multi-column layout
- Social icons: Circle `55px`, border `1px solid #192430`

---

## 🎭 Animationen & Transitions

### Standard Transition
```css
transition: 0.3s ease;
```

### Hover Effects
- **Buttons**: Background & color swap
- **Images**: `transform: scale(1.05)`
- **Cards**: Box-shadow appearance
- **Links**: Color change

### Blur Effects
- Backdrop-filter: `blur(49px)` (für glassmorphism)
- Image backgrounds: `filter: blur(4px)` bei overlays

---

## 📐 Grid & Flexbox Patterns

### Two-Column Layout
```css
display: flex;
flex-wrap: wrap;
justify-content: space-between;
```
- Desktop: 48% / 48%
- Mobile: 100% stacked

### Three-Column
- Desktop: 31% each
- Tablet: 48%
- Mobile: 100%

### Icon Grid
- Desktop: 48% (2 columns)
- Mobile: 100%

---

## 🖼️ Bilder

### Standard
- Border-radius: `40px`
- Object-fit: `cover`
- Responsive sizes

### Circle Images
- Border-radius: `50%`
- Used for: Team, Testimonials, Slider

### Image Overlays
- White opacity: `0.6` - `0.8`
- Dark overlay: `rgba(0,0,0,0.35)`

---

## 📱 Breakpoints

```css
/* Desktop First */
@media (max-width: 1800px) { /* Large Desktop */ }
@media (max-width: 1600px) { /* Desktop */ }
@media (max-width: 1400px) { /* Small Desktop */ }
@media (max-width: 1200px) { /* Tablet Large */ }
@media (max-width: 1000px) { /* Tablet */ }
@media (max-width: 800px)  { /* Mobile Large */ }
@media (max-width: 600px)  { /* Mobile */ }
@media (max-width: 450px)  { /* Mobile Small */ }
```

---

## ✨ Besondere Features

### Scroll-Effekte
- Smooth scroll behavior
- Scroll-down indicator (Hero)
- Sticky header on scroll

### Forms
- Input border-radius: `10px`
- Border: `1px solid #d3d3d3`
- Padding: `10px`
- Custom styled checkboxes/radios

### Icons
- Orange check marks für Listen
- SVG-basiert
- Size: `24px`

### Swiper/Slider
- Custom navigation arrows
- Scrollbar styling
- Pagination bullets: Orange

---

## 🔧 WordPress Theme Requirements

### Must-Have Features
1. **Block Editor (Gutenberg) Support**
   - Custom blocks für Content-Sections
   - Reusable components
   
2. **Custom Post Types**
   - Services/Leistungen
   - Team Members
   - Testimonials/Referenzen
   - Portfolio/Projekte

3. **ACF (Advanced Custom Fields)**
   - Hero Image Settings
   - Section Builder
   - Color Variations per Section

4. **Navigation**
   - Mega Menu Support
   - Sticky Header
   - Mobile Burger Menu

5. **Page Builder Kompatibilität**
   - Elementor ODER
   - Bricks Builder ODER
   - Custom Gutenberg Blocks

---

## 📋 Checkliste für Theme-Entwicklung

- [ ] Font: Montserrat einbinden
- [ ] CSS Custom Properties für Farben
- [ ] Responsive Breakpoints definieren
- [ ] Button-Komponenten erstellen
- [ ] Header/Navigation programmieren
- [ ] Footer erstellen
- [ ] Hero-Section Template
- [ ] Image-Text Section Template
- [ ] Card/Box Komponenten
- [ ] Form Styling
- [ ] Icon System
- [ ] Slider/Swiper Integration
- [ ] Mobile Menu
- [ ] Accessibility (ARIA)
- [ ] Performance Optimization

---

**Erstellt**: 2026-02-09  
**Basierend auf**: climaconnect.de  
**Für Projekt**: hs-straubing.de
