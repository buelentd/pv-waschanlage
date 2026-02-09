# 📦 HS-Straubing Theme - Installationsanleitung

## Schnellstart in 5 Schritten

### 1️⃣ Theme-Ordner vorbereiten

```bash
# Benenne den Ordner um:
wordpress-theme/ → hs-straubing/

# Ordnerstruktur:
hs-straubing/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
└── assets/
    ├── css/
    │   └── components.css
    └── js/
        └── main.js
```

### 2️⃣ Theme hochladen

**Option A: Via WordPress Admin**
1. Theme-Ordner als ZIP komprimieren: `hs-straubing.zip`
2. WordPress Admin → Design → Themes → Neu hinzufügen
3. "Theme hochladen" → ZIP auswählen
4. "Jetzt installieren" → "Aktivieren"

**Option B: Via FTP/SSH**
```bash
# Upload nach:
wp-content/themes/hs-straubing/

# Rechte setzen:
chmod 755 hs-straubing/
chmod 644 hs-straubing/*.php
chmod 644 hs-straubing/style.css
```

### 3️⃣ Plugins installieren

**Erforderlich:**
- ✅ Advanced Custom Fields Pro (ACF Pro)

**Empfohlen:**
- Contact Form 7 (Kontaktformulare)
- Yoast SEO (Suchmaschinenoptimierung)
- WP Rocket (Performance & Caching)

```bash
# Via WordPress Admin:
Plugins → Installieren → Suchen → Aktivieren
```

### 4️⃣ Theme-Einstellungen konfigurieren

#### A) Logo hochladen
```
Design → Customizer → Website-Identität → Logo auswählen
```

#### B) Menüs erstellen
```
Design → Menüs → Neues Menü erstellen

1. Primary Menu (Hauptnavigation)
   - Startseite
   - Heizungsbau
   - Kaminöfen
   - Badsanierung
   - Lüftung & Wasser
   - Klimaanlage
   - Über uns
   - Kontakt
   
   Position: "Primary Menu"

2. Footer Menu (Rechtliches)
   - Impressum
   - Datenschutz
   - AGB
   
   Position: "Footer Menu"
```

#### C) ACF Fields konfigurieren

**Nach ACF Pro Installation:**

1. **Custom Fields → Feldgruppen → Neu hinzufügen**

**Feldgruppe 1: Homepage Hero**
- Titel: "Homepage Hero"
- Felder:
  - `hero_image` (Image) - Heldenbild
  - `hero_overlay` (True/False) - Dunkles Overlay
  - `hero_content` (WYSIWYG) - Hero-Inhalt
- Standort: Seite ist gleich "Startseite"

**Feldgruppe 2: About Section**
- Titel: "About Section"
- Felder:
  - `about_image` (Image) - Über uns Bild
- Standort: Seite ist gleich "Startseite"

**Feldgruppe 3: Header Settings (Options Page)**
- Titel: "Header Settings"
- Felder:
  - `header_cta_text` (Text) - CTA Button Text
  - `header_cta_link` (URL) - CTA Button Link
- Standort: Optionsseite ist gleich "Header"

**Feldgruppe 4: Footer Settings (Options Page)**
- Titel: "Footer Settings"
- Felder:
  - `footer_logo` (Image) - Footer Logo
  - `social_media_links` (Repeater)
    - `name` (Text) - Name
    - `icon` (Image) - Icon
    - `url` (URL) - Link
  - `copyright_text` (Textarea) - Copyright-Text
- Standort: Optionsseite ist gleich "Footer"

**Feldgruppe 5: Team Member**
- Titel: "Team Member Details"
- Felder:
  - `position` (Text) - Position/Rolle
- Standort: Beitragstyp ist gleich "Team"

**Feldgruppe 6: Testimonial**
- Titel: "Testimonial Details"
- Felder:
  - `company` (Text) - Firma (optional)
- Standort: Beitragstyp ist gleich "Testimonial"

### 5️⃣ Seiten & Inhalte erstellen

#### A) Seiten anlegen
```
Seiten → Neu hinzufügen

✅ Startseite (Template: Homepage)
✅ Über uns
✅ Kontakt
✅ Impressum
✅ Datenschutz
```

#### B) Leistungen/Services anlegen
```
Services → Neu hinzufügen

1. Heizungsbau
   - Beitragsbild hochladen
   - Beschreibung hinzufügen
   - Auszug (Excerpt) schreiben

2. Kaminöfen
3. Badsanierung
4. Lüftung & Wasser
5. Klimaanlage
6. ... weitere
```

#### C) Team-Mitglieder anlegen
```
Team → Neu hinzufügen

Beispiel:
- Titel: Karl Geiger
- Beitragsbild: Profilfoto
- Position: Meister Heizung/Lüftung/Sanitär
```

#### D) Testimonials anlegen
```
Testimonials → Neu hinzufügen

Beispiel:
- Titel: Jan Rademacher
- Inhalt: "Die Firma HS-Straubing hat bei mir..."
- Firma: (Optional)
```

---

## ⚙️ Weitere Einstellungen

### Permalinks einstellen
```
Einstellungen → Permalinks
Wähle: "Beitragsname"
Speichern
```

### Lesbarkeit
```
Einstellungen → Lesen
Deine Homepage zeigt: "Eine statische Seite"
Homepage: "Startseite" auswählen
```

### Widgets konfigurieren
```
Design → Widgets

Footer Column 1:
- Custom HTML (Logo + Text)

Footer Column 2:
- Navigation Menu (Footer Menu)

Footer Column 3:
- Text (Kontaktdaten)
```

---

## 🎨 Theme Customizer

```
Design → Customizer

1. Website-Identität
   - Logo hochladen
   - Site Icon (Favicon)
   
2. Farben (falls aktiviert)
   - Primärfarbe: #ee7f00
   - Sekundärfarbe: #192430

3. Menüs
   - Primary Menu zuweisen
   - Footer Menu zuweisen
```

---

## 🧪 Testing Checklist

Nach Installation testen:

- [ ] Homepage lädt korrekt
- [ ] Navigation funktioniert (Desktop + Mobile)
- [ ] Mobile Menu öffnet/schließt
- [ ] Hero-Bild wird angezeigt
- [ ] Services werden angezeigt
- [ ] Footer wird angezeigt
- [ ] Social Media Links funktionieren
- [ ] Kontaktformular funktioniert
- [ ] Responsive Design (Mobile, Tablet, Desktop)
- [ ] Browser-Test (Chrome, Firefox, Safari)

---

## 🐛 Troubleshooting

### Problem: Theme sieht kaputt aus
```
Lösung:
1. Cache leeren (Browser + WordPress)
2. Permalinks neu speichern
3. Theme neu aktivieren
```

### Problem: ACF Felder werden nicht angezeigt
```
Lösung:
1. ACF Pro aktiviert?
2. Feldgruppen erstellt?
3. Standort richtig zugewiesen?
```

### Problem: Mobile Menu funktioniert nicht
```
Lösung:
1. Browser Console öffnen (F12)
2. Auf JavaScript-Fehler prüfen
3. jQuery geladen?
4. main.js geladen?
```

### Problem: Swiper Slider funktioniert nicht
```
Lösung:
1. Swiper CDN erreichbar?
2. JavaScript Console checken
3. Swiper-Klassen richtig?
```

---

## 📞 Support

Bei Problemen oder Fragen:

1. **Design-System prüfen:** `design-system.md`
2. **README lesen:** `README.md`
3. **Browser Console prüfen:** F12 → Console
4. **WordPress Debug aktivieren:**
   ```php
   // wp-config.php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   define('WP_DEBUG_DISPLAY', false);
   ```

---

## ✅ Installation abgeschlossen!

Nach erfolgreicher Installation solltest du:

✅ Ein funktionierendes Theme haben  
✅ Menüs konfiguriert haben  
✅ ACF Felder eingerichtet haben  
✅ Erste Inhalte erstellt haben  

**Nächste Schritte:**
1. Inhalte erstellen (Texte, Bilder)
2. SEO optimieren (Yoast SEO)
3. Performance testen (PageSpeed Insights)
4. Live gehen! 🚀

---

**Viel Erfolg! 🎉**
