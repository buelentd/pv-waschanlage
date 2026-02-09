# Design-System: HS-Straubing WordPress (ClimaCONNECT-Komponenten + HS-Straubing Branding)

**Erstellt:** 2026-02-09  
**Strategie:** ClimaCONNECT.de Komponenten & Layout + HS-Straubing.de Farben & Logo

---

## 🎨 Farb-System

### Primärfarben (von hs-straubing.de)
```css
--color-primary: #E30613;        /* Rot (Hauptfarbe) */
--color-secondary: #FFD500;      /* Gelb (Akzent) */
--color-accent: #FF8C00;         /* Orange (zusätzlicher Akzent) */
```

### Neutrale Farben
```css
--color-dark: #1A1A1A;           /* Dunkelgrau (Text, Footer) */
--color-text: #333333;           /* Standard-Text */
--color-background: #FFFFFF;     /* Weiß (Hintergrund) */
--color-background-light: #F5F5F5; /* Hellgrau (Sections) */
--color-border: #F0F0F0;         /* Rahmen */
```

### Schatten & Overlays
```css
--shadow-small: 0 2px 5px rgba(0,0,0,0.1);
--shadow-medium: 0 5px 15px rgba(0,0,0,0.2);
--shadow-large: 0 5px 20px rgba(227, 6, 19, 0.2); /* Rot-Glow */
```

---

## 🔤 Typografie

### Font-Stack
```css
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, 
             "Helvetica Neue", Arial, sans-serif;
```

### Font-Sizes
```css
--font-size-h1: 48px;     /* Hero Headlines */
--font-size-h2: 36px;     /* Section Titles */
--font-size-h3: 24px;     /* Subsections */
--font-size-body: 16px;   /* Standard Text */
--font-size-small: 14px;  /* Footer, Meta */
```

### Font-Weights
```css
--font-weight-regular: 400;
--font-weight-medium: 500;
--font-weight-bold: 700;
```

---

## 📐 Spacing & Layout (von ClimaCONNECT)

### Container
```css
max-width: 1200px;
padding: 0 20px;
margin: 0 auto;
```

### Spacing-Scale
```css
--space-xs: 8px;
--space-sm: 16px;
--space-md: 32px;
--space-lg: 64px;
--space-xl: 96px;
```

### Section-Padding
```css
padding-top: 80px;
padding-bottom: 80px;
```

---

## 🧩 Komponenten (von ClimaCONNECT)

### 1. Hero-Section
**Layout:**
- Full-width background (#F5F5F5 oder Bild)
- Zentrierter Content
- H1 + Subline + CTA-Button

**Komponente:**
```html
<section class="hero" style="background: #F5F5F5; padding: 100px 20px; text-align: center;">
  <div class="container">
    <h1 style="font-size: 48px; color: #1A1A1A; margin-bottom: 20px;">
      Wir schaffen Wärme, die bleibt
    </h1>
    <p style="font-size: 20px; color: #333; margin-bottom: 30px;">
      Ihr zuverlässiger Partner für Heizung, Sanitär und Klimatechnik in Straubing
    </p>
    <a href="/kontakt/" class="btn-primary">Jetzt Beratung vereinbaren</a>
  </div>
</section>
```

**Button Primary:**
```css
.btn-primary {
  background: #E30613;
  color: white;
  padding: 16px 32px;
  border-radius: 4px;
  font-weight: 700;
  text-decoration: none;
  display: inline-block;
  transition: background 0.3s, box-shadow 0.3s;
}

.btn-primary:hover {
  background: #B50510;
  box-shadow: 0 5px 20px rgba(227, 6, 19, 0.3);
}
```

---

### 2. Leistungen-Grid (Icons + Beschreibung)

**Layout:** 3-spaltig, responsive (1 Spalte auf Mobile)

**Komponente:**
```html
<section class="services" style="background: white; padding: 80px 20px;">
  <div class="container">
    <h2 style="text-align: center; color: #1A1A1A; margin-bottom: 50px;">
      Unsere Leistungen
    </h2>
    
    <div class="services-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
      
      <div class="service-card" style="text-align: center;">
        <div class="icon" style="font-size: 48px; color: #E30613; margin-bottom: 20px;">
          🔥
        </div>
        <h3 style="color: #1A1A1A; margin-bottom: 10px;">Heizungsbau</h3>
        <p style="color: #333;">Moderne Heizsysteme für Ihr Zuhause</p>
      </div>
      
      <!-- Weitere Karten... -->
      
    </div>
  </div>
</section>
```

---

### 3. USP-Section (4-6 Argumente)

**Layout:** 2-spaltig Grid, Icon + Text

**Komponente:**
```html
<section class="usps" style="background: #F5F5F5; padding: 80px 20px;">
  <div class="container">
    <h2 style="text-align: center; color: #1A1A1A; margin-bottom: 50px;">
      Was uns besonders macht
    </h2>
    
    <div class="usp-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">
      
      <div class="usp-item">
        <div class="usp-icon" style="color: #FFD500; font-size: 32px; margin-bottom: 15px;">✓</div>
        <h3 style="color: #1A1A1A; margin-bottom: 10px;">Meisterbetrieb</h3>
        <p style="color: #333;">Zwei erfahrene Meister mit qualifiziertem Team</p>
      </div>
      
      <!-- Weitere USPs... -->
      
    </div>
  </div>
</section>
```

---

### 4. Zahlen & Fakten

**Layout:** 4 Spalten, große Zahlen + Beschreibung

**Komponente:**
```html
<section class="stats" style="background: #1A1A1A; color: white; padding: 80px 20px;">
  <div class="container">
    <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; text-align: center;">
      
      <div class="stat">
        <div class="stat-number" style="font-size: 48px; color: #FFD500; font-weight: 700; margin-bottom: 10px;">
          15+
        </div>
        <div class="stat-label" style="font-size: 16px; color: white;">
          Jahre Erfahrung
        </div>
      </div>
      
      <!-- Weitere Stats... -->
      
    </div>
  </div>
</section>
```

---

### 5. Testimonials (Kundenstimmen)

**Layout:** Slider oder 3-spaltig

**Komponente:**
```html
<section class="testimonials" style="background: white; padding: 80px 20px;">
  <div class="container">
    <h2 style="text-align: center; color: #1A1A1A; margin-bottom: 50px;">
      Das sagen unsere Kunden
    </h2>
    
    <div class="testimonial-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
      
      <div class="testimonial" style="background: #F5F5F5; padding: 30px; border-radius: 8px;">
        <p style="color: #333; font-style: italic; margin-bottom: 20px;">
          "Sehr professionelle Arbeit, sauber und termingerecht. Absolut empfehlenswert!"
        </p>
        <div class="author" style="color: #E30613; font-weight: 700;">
          — Max Mustermann
        </div>
      </div>
      
      <!-- Weitere Testimonials... -->
      
    </div>
  </div>
</section>
```

---

### 6. CTA-Section (Call-to-Action)

**Layout:** Zentriert, farbiger Hintergrund

**Komponente:**
```html
<section class="cta" style="background: #E30613; color: white; padding: 80px 20px; text-align: center;">
  <div class="container">
    <h2 style="color: white; margin-bottom: 20px;">
      Bereit für Ihr neues Heizsystem?
    </h2>
    <p style="font-size: 18px; margin-bottom: 30px;">
      Vereinbaren Sie jetzt eine kostenlose Beratung
    </p>
    <a href="/kontakt/" class="btn-secondary" style="background: white; color: #E30613; padding: 16px 32px; border-radius: 4px; font-weight: 700; text-decoration: none; display: inline-block;">
      Jetzt Kontakt aufnehmen
    </a>
  </div>
</section>
```

---

### 7. Footer

**Layout:** Dunkel (#1A1A1A), mehrspaltig

**Komponente:**
```html
<footer style="background: #1A1A1A; color: white; padding: 60px 20px 20px;">
  <div class="container">
    <div class="footer-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-bottom: 40px;">
      
      <div class="footer-col">
        <h3 style="color: #FFD500; margin-bottom: 20px;">Kontakt</h3>
        <p>Geiger & Cizek<br>
        Telefon: 09421 / 861 05 88<br>
        E-Mail: info@hs-straubing.de</p>
      </div>
      
      <div class="footer-col">
        <h3 style="color: #FFD500; margin-bottom: 20px;">Leistungen</h3>
        <ul style="list-style: none; padding: 0;">
          <li><a href="/heizungsbau/" style="color: white; text-decoration: none;">Heizungsbau</a></li>
          <!-- Weitere Links... -->
        </ul>
      </div>
      
      <div class="footer-col">
        <h3 style="color: #FFD500; margin-bottom: 20px;">Rechtliches</h3>
        <ul style="list-style: none; padding: 0;">
          <li><a href="/impressum/" style="color: white; text-decoration: none;">Impressum</a></li>
          <li><a href="/datenschutz/" style="color: white; text-decoration: none;">Datenschutz</a></li>
        </ul>
      </div>
      
    </div>
    
    <div class="footer-bottom" style="text-align: center; padding-top: 20px; border-top: 1px solid #333;">
      <p style="color: #999; font-size: 14px;">© 2026 Geiger & Cizek – Alle Rechte vorbehalten</p>
    </div>
  </div>
</footer>
```

---

## 📱 Responsive Breakpoints

```css
/* Mobile */
@media (max-width: 767px) {
  .services-grid,
  .usp-grid,
  .stats-grid,
  .testimonial-grid,
  .footer-grid {
    grid-template-columns: 1fr !important;
  }
  
  h1 { font-size: 32px !important; }
  h2 { font-size: 28px !important; }
}

/* Tablet */
@media (min-width: 768px) and (max-width: 1023px) {
  .services-grid,
  .testimonial-grid {
    grid-template-columns: repeat(2, 1fr) !important;
  }
}
```

---

## 🎯 Page Builder Empfehlung

### **Bricks Builder** (Beste Wahl)
✅ Volle Design-Kontrolle  
✅ Kein Vendor-Lock-in (reines HTML/CSS)  
✅ Schnellste Performance  
✅ Code-Export möglich  

**Alternative:** Elementor Pro (wenn visuelle Drag&Drop-Erfahrung wichtiger als Performance)

---

## 📦 WordPress-Plugins

**Pflicht:**
- Bricks Builder (oder Elementor)
- WP Rocket (Caching & Performance)
- Yoast SEO
- Contact Form 7 (Kontaktformular)

**Optional:**
- Slider Revolution (für Hero-Slider)
- WP Smush (Bild-Optimierung)

---

## 🚀 Nächste Schritte

1. ✅ Sitemap definiert (22 Seiten)
2. ✅ Design-System definiert
3. ⏳ WordPress-Installation + Bricks/Elementor Setup
4. ⏳ Content von hs-straubing.de extrahieren
5. ⏳ Content im ClimaCONNECT-Stil umschreiben
6. ⏳ Seiten in WordPress anlegen
7. ⏳ Bilder von ClimaCONNECT als Platzhalter einfügen
8. ⏳ Navigation (hierarchisch) einrichten
9. ⏳ SEO-Optimierung
10. ⏳ Go-Live
