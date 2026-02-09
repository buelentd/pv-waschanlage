# Design System - HS Straubing

Inspiriert von climaconnect.de - Modernes, professionelles Corporate Design

---

## 🎨 Farbpalette

### Primärfarben (Haustechnik-Thema: Wärme + Vertrauen)

```css
:root {
  /* Backgrounds */
  --background: oklch(0.99 0 0);           /* Fast Weiß */
  --foreground: oklch(0.20 0 0);           /* Dunkelgrau (Text) */
  
  /* Primary - Warm Orange/Rot (Heizung, Wärme) */
  --primary: oklch(0.55 0.20 30);          /* Warmes Orange-Rot */
  --primary-foreground: oklch(1 0 0);      /* Weiß für Text auf Primary */
  --primary-hover: oklch(0.50 0.22 30);    /* Dunkler bei Hover */
  
  /* Secondary - Blau (Kühlung, Klima, Vertrauen) */
  --secondary: oklch(0.50 0.15 240);       /* Gedämpftes Blau */
  --secondary-foreground: oklch(1 0 0);
  
  /* Accent - Energetisches Grün (Nachhaltigkeit) */
  --accent: oklch(0.65 0.18 150);          /* Frisches Grün */
  
  /* Neutrals */
  --muted: oklch(0.96 0 0);                /* Heller Grau-Hintergrund */
  --muted-foreground: oklch(0.50 0 0);     /* Gedämpfter Text */
  --border: oklch(0.90 0 0);               /* Subtile Borders */
  
  /* Semantic */
  --success: oklch(0.60 0.18 145);
  --warning: oklch(0.70 0.18 80);
  --error: oklch(0.55 0.20 25);
  
  /* Shadows */
  --shadow-sm: 0 1px 2px 0 oklch(0 0 0 / 0.05);
  --shadow-md: 0 4px 6px -1px oklch(0 0 0 / 0.1), 0 2px 4px -2px oklch(0 0 0 / 0.1);
  --shadow-lg: 0 10px 15px -3px oklch(0 0 0 / 0.1), 0 4px 6px -4px oklch(0 0 0 / 0.1);
  
  /* Spacing */
  --radius: 0.75rem;
  --radius-lg: 1rem;
  --radius-sm: 0.5rem;
}
```

---

## 📝 Typografie

### Font-Stack (Google Fonts)

```css
:root {
  /* Haupt-Font: Modern, klar, professionell */
  --font-sans: 'Inter', system-ui, -apple-system, sans-serif;
  
  /* Headlines: Etwas charaktervoller */
  --font-display: 'Outfit', 'Inter', sans-serif;
  
  /* Mono (optional für technische Details) */
  --font-mono: 'JetBrains Mono', 'Courier New', monospace;
}
```

### Font-Größen

```css
/* Mobile First */
--text-xs: 0.75rem;      /* 12px */
--text-sm: 0.875rem;     /* 14px */
--text-base: 1rem;       /* 16px */
--text-lg: 1.125rem;     /* 18px */
--text-xl: 1.25rem;      /* 20px */
--text-2xl: 1.5rem;      /* 24px */
--text-3xl: 1.875rem;    /* 30px */
--text-4xl: 2.25rem;     /* 36px */
--text-5xl: 3rem;        /* 48px */

/* Desktop */
@media (min-width: 1024px) {
  --text-3xl: 2.25rem;   /* 36px */
  --text-4xl: 3rem;      /* 48px */
  --text-5xl: 3.75rem;   /* 60px */
}
```

### Font-Gewichte

```css
--font-normal: 400;
--font-medium: 500;
--font-semibold: 600;
--font-bold: 700;
```

---

## 🧩 Komponenten-Styles

### Buttons

```css
/* Primary Button */
.btn-primary {
  background: var(--primary);
  color: var(--primary-foreground);
  padding: 0.75rem 1.5rem;
  border-radius: var(--radius);
  font-weight: var(--font-semibold);
  transition: all 150ms ease-out;
  border: none;
  cursor: pointer;
}

.btn-primary:hover {
  background: var(--primary-hover);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

/* Secondary Button (Outline) */
.btn-secondary {
  background: transparent;
  color: var(--primary);
  border: 2px solid var(--primary);
  padding: 0.75rem 1.5rem;
  border-radius: var(--radius);
  font-weight: var(--font-semibold);
  transition: all 150ms ease-out;
  cursor: pointer;
}

.btn-secondary:hover {
  background: var(--primary);
  color: var(--primary-foreground);
}
```

### Cards

```css
.card {
  background: var(--background);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 2rem;
  box-shadow: var(--shadow-sm);
  transition: all 200ms ease-out;
}

.card:hover {
  box-shadow: var(--shadow-lg);
  transform: translateY(-4px);
}
```

### Icons

```css
.icon-box {
  width: 3rem;
  height: 3rem;
  background: var(--muted);
  border-radius: var(--radius);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary);
}
```

---

## 📐 Layout-System

### Container

```css
.container {
  width: 100%;
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 1rem;
}

@media (min-width: 640px) {
  .container { padding: 0 2rem; }
}

@media (min-width: 1024px) {
  .container { padding: 0 3rem; }
}
```

### Spacing-Scale

```css
--space-1: 0.25rem;   /* 4px */
--space-2: 0.5rem;    /* 8px */
--space-3: 0.75rem;   /* 12px */
--space-4: 1rem;      /* 16px */
--space-6: 1.5rem;    /* 24px */
--space-8: 2rem;      /* 32px */
--space-12: 3rem;     /* 48px */
--space-16: 4rem;     /* 64px */
--space-24: 6rem;     /* 96px */
```

---

## 🎬 Animationen

### Transitions

```css
/* Standard */
--transition-base: 200ms ease-out;
--transition-fast: 150ms ease-out;
--transition-slow: 300ms ease-out;

/* Hover Effects */
.hover-lift:hover {
  transform: translateY(-4px);
  transition: transform var(--transition-base);
}

.hover-scale:hover {
  transform: scale(1.02);
  transition: transform var(--transition-fast);
}
```

### Page Entry Animations

```css
.fade-in {
  animation: fadeIn 400ms ease-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
```

---

## 📱 Responsive Breakpoints

```css
/* Mobile: < 640px (default) */
/* Tablet: 640px - 1023px */
/* Desktop: >= 1024px */
/* Large Desktop: >= 1280px */

@media (min-width: 640px) { /* sm */ }
@media (min-width: 768px) { /* md */ }
@media (min-width: 1024px) { /* lg */ }
@media (min-width: 1280px) { /* xl */ }
```

---

## 🖼️ Bildstil

- **Fotos:** Authentisch, professionell, regional
- **Icons:** Line-style (Lucide Icons), einfarbig in Primary-Color
- **Aspect Ratios:**
  - Hero: 16:9
  - Projekt-Bilder: 4:3
  - Portraits: 1:1 oder 3:4

---

## ♿ Accessibility

- **Farbkontrast:** Minimum 4.5:1 für normalen Text
- **Focus States:** Sichtbare Outline für Keyboard-Navigation
- **Alt-Texte:** Für alle bedeutungsvollen Bilder
- **Semantic HTML:** Korrekte Heading-Hierarchie (h1→h2→h3)

---

## 📋 Checkliste für jede Seite

- [ ] Mobile-first responsive
- [ ] Klare Heading-Hierarchie (h1→h2→h3)
- [ ] Primärer CTA prominent platziert
- [ ] Konsistente Abstände (spacing-scale)
- [ ] Hover-States für interaktive Elemente
- [ ] Loading- und Error-States bei Forms
- [ ] Optimierte Bilder (WebP, lazy loading)
- [ ] Semantisches HTML
- [ ] Alt-Texte für Bilder
- [ ] Meta-Tags (title, description)

---

**Design-System Version:** 1.0  
**Letzte Aktualisierung:** 2026-02-09
