# HS-Straubing WordPress Redesign

**Projekt:** WordPress-Webseite für Geiger & Cizek (hs-straubing.de)  
**Strategie:** ClimaCONNECT.de Design-Komponenten + HS-Straubing Branding  
**Erstellt:** 2026-02-09

---

## 📋 Projekt-Übersicht

### Ziel
1:1 Layout-Kopie von **ClimaCONNECT.de** mit:
- ✅ **Logo & Farben** von hs-straubing.de
- ✅ **Komponenten & Spacing** von ClimaCONNECT.de
- ✅ **Content** von hs-straubing.de (im ClimaCONNECT-Stil umgeschrieben)
- ✅ **Bilder** von ClimaCONNECT.de (als Platzhalter)

### Entscheidungen (Stand 2026-02-09)
- ✅ **22 Seiten** von hs-straubing.de übernehmen
- ✅ **Hierarchische Navigation** (Dropdowns)
- ✅ **WordPress mit Page Builder** (Bricks oder Elementor)
- ✅ **Texte:** 1:1 übernehmen, dann im ClimaCONNECT-Stil kürzen
- ✅ **Farben:** #E30613 (Rot), #FFD500 (Gelb), #FF8C00 (Orange)

---

## 📁 Projekt-Dateien

### 1. **project-brief.md**
Projekt-Beschreibung, Ziele, offene Fragen

### 2. **sitemap.md**
Vollständige Seitenstruktur (22 Seiten, hierarchisch)

### 3. **design-system-final.md**
Komplettes Design-System:
- Farben (hs-straubing.de)
- Komponenten (ClimaCONNECT.de)
- Typography, Spacing, Buttons
- HTML/CSS-Code-Snippets

### 4. **wordpress-setup-plan.md**
Step-by-Step WordPress-Setup:
- Installation, Theme, Plugins
- Seiten anlegen (mit Parent-Child-Struktur)
- Navigation einrichten
- SEO & Performance
- Launch-Checklist

---

## 🗂️ Sitemap (Überblick)

```
Home
├── Heizungsbau
│   ├── Luftwärmepumpe
│   ├── Hydraulischer Abgleich
│   ├── 10 Jahre Garantie
│   └── Heizungswartung & Notdienst
├── Kaminöfen
│   └── Heizungsausstellung
├── Badsanierung
│   └── Komplettbadsanierung
├── Lüftung & Wasser
├── Klimaanlage
│   ├── Split-Klimaanlage
│   └── Multisplit-Klimaanlage
├── Über uns
├── Jobs
├── Kontakt
└── Footer (Impressum, Datenschutz, Cookies)
```

**Gesamt:** 20 Content-Seiten + 3 Legal-Pages

---

## 🎨 Design-System (Quick Reference)

### Farben
```css
--color-primary: #E30613;        /* Rot */
--color-secondary: #FFD500;      /* Gelb */
--color-accent: #FF8C00;         /* Orange */
--color-dark: #1A1A1A;           /* Dunkel */
--color-background: #F5F5F5;     /* Hellgrau */
```

### Komponenten (von ClimaCONNECT)
1. **Hero-Section** (Fullwidth, zentriert, CTA-Button)
2. **Leistungen-Grid** (3-spaltig, Icons)
3. **USP-Section** (2-spaltig, Vorteile)
4. **Zahlen & Fakten** (4 Stats, große Zahlen)
5. **Testimonials** (3 Kundenstimmen)
6. **CTA-Section** (Farbiger Hintergrund, Button)
7. **Footer** (Dunkel, 3-spaltig)

### Typography
```css
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
H1: 48px | H2: 36px | H3: 24px | Body: 16px
```

---

## 🛠️ Tech-Stack

### WordPress
- **Version:** 6.4+
- **Theme:** Hello Theme (minimal)
- **Page Builder:** Bricks Builder (Empfehlung) oder Elementor Pro

### Plugins
```
✅ Bricks Builder (Page Builder)
✅ WP Rocket (Performance)
✅ Yoast SEO (SEO)
✅ Contact Form 7 (Formulare)
✅ WP Smush (Bilder-Optimierung)
```

### Hosting (Empfehlung)
- **Premium:** Kinsta, WP Engine
- **Mid-Tier:** SiteGround, Hostinger
- **Budget:** Ionos, ALL-INKL

---

## 📝 Workflow

### Phase 1: Setup ✅
- [x] Projekt-Brief erstellt
- [x] Sitemap extrahiert (22 Seiten)
- [x] Design-System definiert
- [x] WordPress-Setup-Plan erstellt

### Phase 2: Content (aktuell)
- [ ] Content von hs-straubing.de extrahieren (alle 22 Seiten)
- [ ] Content im ClimaCONNECT-Stil umschreiben
- [ ] Bilder von ClimaCONNECT sammeln (Platzhalter)

### Phase 3: WordPress
- [ ] WordPress installieren + Hosting einrichten
- [ ] Bricks Builder installieren + konfigurieren
- [ ] Global Styles einrichten (Farben, Fonts)
- [ ] Template-Komponenten bauen (Hero, USP, etc.)

### Phase 4: Seiten-Erstellung
- [ ] Home-Page (wichtigste Seite zuerst)
- [ ] Hauptseiten (Heizungsbau, Kaminöfen, etc.)
- [ ] Unterseiten (hierarchisch)
- [ ] Legal-Pages (Impressum, Datenschutz)

### Phase 5: Navigation & SEO
- [ ] Hauptmenü einrichten (Dropdowns)
- [ ] Footer-Menü einrichten
- [ ] Yoast SEO konfigurieren
- [ ] Meta-Tags für alle Seiten

### Phase 6: Testing & Launch
- [ ] Responsive-Test (Mobile, Tablet)
- [ ] Browser-Test (Chrome, Firefox, Safari)
- [ ] Performance-Test (PageSpeed >90)
- [ ] Kontaktformular testen
- [ ] Go-Live

---

## 🔗 Referenzen

### Original-Webseiten
- **hs-straubing.de:** https://hs-straubing.de (Content-Quelle)
- **ClimaCONNECT.de:** https://climaconnect.de (Design-Referenz)

### Tools
- **Bricks Builder:** https://bricksbuilder.io
- **Elementor:** https://elementor.com
- **WP Rocket:** https://wp-rocket.me
- **Yoast SEO:** https://yoast.com

---

## 🎯 Nächste Schritte

1. **WordPress-Hosting einrichten** (falls noch nicht vorhanden)
2. **Content-Extraktion** (alle 22 Seiten von hs-straubing.de)
3. **Content umschreiben** (ClimaCONNECT-Stil)
4. **WordPress installieren + Bricks einrichten**
5. **Template-Komponenten bauen**
6. **Seiten nacheinander erstellen**

---

**Status:** 📋 Planning → Ready for Development

Bereit für den nächsten Schritt! 🚀
