# HS-Straubing WordPress Theme

WordPress-Theme für **Geiger & Cizek - Energie-, Klima- & Haustechnik** (hs-straubing.de)  
Basierend auf dem Design von **ClimaCONNECT.de**

---

## 📁 Projektstruktur

```
hs-straubing-design/
├── design-system.md              # Komplette Design-Dokumentation
├── README.md                      # Diese Datei
└── wordpress-theme/               # WordPress Theme-Dateien
    ├── style.css                  # Haupt-Stylesheet + Theme-Header
    ├── functions.php              # Theme Functions & Features
    ├── header.php                 # Header Template
    ├── footer.php                 # Footer Template (TODO)
    ├── index.php                  # Haupt-Template (TODO)
    ├── front-page.php             # Homepage Template (TODO)
    ├── single.php                 # Single Post Template (TODO)
    ├── page.php                   # Page Template (TODO)
    ├── archive.php                # Archive Template (TODO)
    ├── screenshot.png             # Theme Screenshot (TODO)
    └── assets/
        ├── css/
        │   ├── components.css     # Component Styles (Header, Footer, etc.)
        │   └── editor-style.css   # Gutenberg Editor Styles (TODO)
        ├── js/
        │   └── main.js            # JavaScript (TODO)
        └── images/                # Theme Images (TODO)
```

---

## 🎨 Design-System

Alle Design-Specs findest du in **`design-system.md`**:

- ✅ Farbpalette (Orange #ee7f00, Dunkelblau #192430)
- ✅ Typografie (Montserrat mit verschiedenen Weights)
- ✅ Button-Varianten (Full, Transparent, Dark with Arrow)
- ✅ Spacing & Layout (Container, Sections, Breakpoints)
- ✅ Komponenten (Header, Hero, Image-Text, Cards, Footer)
- ✅ Animationen & Transitions

---

## 🚀 Installation

### 1. WordPress vorbereiten

```bash
# Lokal (XAMPP, MAMP, LocalWP) oder auf Server installieren
# WordPress 6.0+ erforderlich
# PHP 8.0+ erforderlich
```

### 2. Theme hochladen

```bash
# Option A: Via WordPress Admin
1. Gehe zu Design → Themes → Add New → Upload Theme
2. Wähle das Theme-ZIP aus
3. Klicke auf "Install Now"
4. Aktiviere das Theme

# Option B: Via FTP/Server
1. Kopiere den Ordner "wordpress-theme" nach:
   wp-content/themes/hs-straubing/
2. Gehe zu Design → Themes
3. Aktiviere "HS-Straubing"
```

### 3. Erforderliche Plugins

#### Must-Have:
- **Advanced Custom Fields Pro** (für Options Pages & Custom Fields)
- **Contact Form 7** oder **WPForms** (für Kontaktformulare)

#### Empfohlen:
- **Yoast SEO** oder **Rank Math** (für SEO)
- **Swiper** (bereits via CDN eingebunden, alternativ lokal)
- **WP Rocket** oder **W3 Total Cache** (für Performance)

```bash
# ACF Pro Installation
1. Kaufe ACF Pro Lizenz
2. Lade das Plugin herunter
3. Installiere via Plugins → Add New → Upload Plugin
```

---

## ⚙️ Theme-Features

### ✅ Bereits implementiert:

- [x] Custom Logo Support
- [x] Navigation Menus (Primary + Footer)
- [x] Custom Image Sizes (Hero, Card, Team, Thumbnail)
- [x] Custom Post Types (Services, Team, Testimonials, Projects)
- [x] Widget Areas (3x Footer Columns)
- [x] Google Fonts (Montserrat)
- [x] Swiper Slider Integration
- [x] Responsive Design (Mobile First)
- [x] ACF Options Pages (Theme Settings, Header, Footer)
- [x] Performance-Optimierungen (Emoji disabled, etc.)

### 🔨 To-Do (noch zu erstellen):

- [ ] Footer Template (footer.php)
- [ ] Homepage Template (front-page.php)
- [ ] Page Templates (page.php, single.php, archive.php)
- [ ] JavaScript (Mobile Menu, Sticky Header, Slider Init)
- [ ] ACF Field Groups (Hero Settings, Section Builder)
- [ ] Gutenberg Custom Blocks
- [ ] Editor Styles (editor-style.css)
- [ ] Theme Screenshot (screenshot.png - 1200x900px)

---

## 📋 Nächste Schritte

### 1. Templates erstellen

**Priorität: HOCH**

```bash
# Fehlende Templates:
- footer.php      # Footer mit 3 Spalten, Social Media, Navigation
- index.php       # Standard Template
- front-page.php  # Homepage mit Hero, Services, Team, Testimonials
- page.php        # Standard-Seitentemplate
- single.php      # Einzelbeiträge
- archive.php     # Archiv-Übersicht
```

### 2. JavaScript hinzufügen

**Datei:** `assets/js/main.js`

```javascript
// Zu implementieren:
- Mobile Menu Toggle
- Sticky Header on Scroll
- Smooth Scroll
- Swiper Slider Initialization
- Form Validation (optional)
```

### 3. ACF Fields konfigurieren

**In WordPress Admin:**

1. **Options Page → Header Settings:**
   - CTA Button Text (Text)
   - CTA Button Link (URL)
   - Logo Upload (Image)

2. **Options Page → Footer Settings:**
   - Footer Logo (Image)
   - Social Media Links (Repeater: Icon + URL)
   - Copyright Text (Textarea)

3. **Page/Post Settings:**
   - Hero Image (Image)
   - Hero Overlay (True/False)
   - Hero Content (WYSIWYG)
   - Section Builder (Flexible Content)

### 4. Content-Sections als ACF Flexible Content

**Flexible Content Layouts:**

- Image-Text Section
- Service Cards
- Team Grid
- Testimonials Slider
- FAQ Accordion
- Contact Form Section
- CTA Banner

### 5. Screenshot erstellen

```bash
# Erstelle einen Screenshot der Homepage:
- Größe: 1200 x 900 px
- Format: PNG
- Dateiname: screenshot.png
- Speicherort: /wordpress-theme/screenshot.png
```

---

## 🎯 Seitenstruktur (Empfehlung)

### Haupt-Navigation (Primary Menu):

1. **Startseite** (/)
2. **Heizungsbau** (/projekt-art/heizungsbau/)
3. **Kaminöfen** (/kaminoefen/)
4. **Badsanierung** (/badsanierung/)
5. **Lüftung & Wasser** (/lueftung-wasser/)
6. **Klimaanlage** (/klimaanlage/)
7. **Über uns** (/ueber-uns/)
8. **Kontakt** (/kontakt/)

### Footer-Navigation (Footer Menu):

- Impressum
- Datenschutz
- AGB
- Karriere

---

## 🔧 Customization

### Farben anpassen

**Datei:** `style.css`

```css
:root {
    --color-primary: #ee7f00;      /* Orange */
    --color-dark: #192430;          /* Dunkelblau */
    --color-background: #f5f5f5;    /* Hellgrau */
    /* ... weitere Farben */
}
```

### Schriftart ändern

**Datei:** `functions.php`

```php
// Zeile ~65: Google Fonts URL anpassen
wp_enqueue_style(
    'hs-straubing-fonts',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap',
    array(),
    null
);
```

### Container-Breite ändern

**Datei:** `style.css`

```css
:root {
    --container-max-width: 1400px;  /* Standard */
}
```

---

## 📱 Responsive Breakpoints

```css
/* Desktop First Approach */
@media (max-width: 1800px) { }  /* Large Desktop */
@media (max-width: 1600px) { }  /* Desktop */
@media (max-width: 1400px) { }  /* Small Desktop */
@media (max-width: 1200px) { }  /* Tablet Large */
@media (max-width: 1000px) { }  /* Tablet */
@media (max-width: 800px)  { }  /* Mobile Large */
@media (max-width: 600px)  { }  /* Mobile */
@media (max-width: 450px)  { }  /* Mobile Small */
```

---

## 🧪 Testing

### Browser-Kompatibilität:
- ✅ Chrome/Edge (Latest)
- ✅ Firefox (Latest)
- ✅ Safari (Latest)
- ✅ Mobile Safari (iOS)
- ✅ Chrome Mobile (Android)

### Geräte-Tests:
- Desktop (1920px+)
- Laptop (1366px - 1600px)
- Tablet (768px - 1024px)
- Mobile (320px - 480px)

### Performance-Ziele:
- PageSpeed Score: 90+
- Ladezeit: < 2s
- First Contentful Paint: < 1s

---

## 📞 Support & Kontakt

**Theme Entwickler:** OpenClaw  
**Projekt:** HS-Straubing  
**Basierend auf:** ClimaCONNECT.de Design  

**Wichtige Hinweise:**

1. **Backup vor Updates!** Mache immer ein Backup bevor du Updates installierst.
2. **Child Theme:** Für größere Anpassungen empfiehlt sich ein Child Theme.
3. **ACF Pro:** Ohne ACF Pro funktionieren die Options Pages nicht.
4. **Cache:** Leere den Cache nach Theme-Änderungen.

---

## 📚 Weitere Ressourcen

- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [ACF Documentation](https://www.advancedcustomfields.com/resources/)
- [Swiper Documentation](https://swiperjs.com/get-started)
- [ClimaCONNECT.de](https://www.climaconnect.de) (Design-Referenz)

---

**Version:** 1.0.0  
**Erstellt:** 2026-02-09  
**Letzte Aktualisierung:** 2026-02-09
