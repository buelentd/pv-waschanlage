# WordPress-Setup Plan: HS-Straubing

**Erstellt:** 2026-02-09  
**Page Builder:** Bricks Builder (oder Elementor als Alternative)  
**Theme:** Hello Theme (minimal, für Bricks) oder Astra (für Elementor)

---

## 1️⃣ WordPress-Installation

### Hosting-Anforderungen
- **PHP:** 8.1+
- **MySQL:** 5.7+
- **SSL:** Ja (HTTPS)
- **Speicher:** 256 MB+ PHP Memory Limit
- **Performance:** SSD, HTTP/2, Caching

### Empfohlene Hosting-Provider
1. **Kinsta** (Premium, bestes WordPress-Hosting)
2. **SiteGround** (Gutes Preis/Leistung)
3. **Hostinger** (Budget-freundlich)

### Installation
```bash
# Via WordPress.org Download
1. WordPress herunterladen
2. Datenbank erstellen
3. wp-config.php konfigurieren
4. WordPress-Installer durchlaufen
```

---

## 2️⃣ Theme & Page Builder Installation

### Theme: Hello Theme (für Bricks)
```
Dashboard → Design → Themes → Add New → "Hello Elementor"
(Funktioniert auch mit Bricks, minimales Starter-Theme)
```

### Page Builder: Bricks Builder
```
1. Bricks Builder Lizenz kaufen ($99 Lifetime)
2. Plugin hochladen: Plugins → Add New → Upload Plugin
3. Aktivieren
4. Lizenz eingeben: Bricks → Settings → License
```

**Alternative:** Elementor
```
Plugins → Add New → "Elementor" → Install + Activate
Elementor Pro Lizenz aktivieren (für volle Features)
```

---

## 3️⃣ Wichtige Plugins installieren

### Pflicht-Plugins
```
✅ Bricks Builder (Page Builder)
✅ WP Rocket (Caching & Performance)
✅ Yoast SEO (SEO-Optimierung)
✅ Contact Form 7 (Kontaktformular)
✅ WP Smush (Bild-Kompression)
```

### Optional (je nach Bedarf)
```
⚪ Slider Revolution (Hero-Slider mit Animationen)
⚪ WPForms (besseres Formular-Plugin als CF7)
⚪ Redirection (301-Redirects von alter Struktur)
⚪ UpdraftPlus (Backups)
```

---

## 4️⃣ Grundeinstellungen

### Permalinks
```
Einstellungen → Permalinks → "Beitragsname"
```
✅ Ergebnis: `/heizungsbau/`, `/kontakt/` (statt `?p=123`)

### Allgemein
```
Einstellungen → Allgemein
- Site Title: "Geiger & Cizek - Energie-, Klima- & Haustechnik"
- Tagline: (leer lassen oder kurzen USP)
- Timezone: Europe/Berlin
- Date Format: DD.MM.YYYY
```

### Lesbarkeit
```
Einstellungen → Lesen
- Startseite: "Eine statische Seite" → Home
- Beitragsseite: (keine, falls kein Blog)
```

---

## 5️⃣ Seiten anlegen (22 Seiten)

### Hauptseiten (9)
```
1. Home (/)
2. Heizungsbau (/heizungsbau/)
3. Kaminöfen (/kaminoefen/)
4. Badsanierung (/badsanierung/)
5. Lüftung & Wasser (/lueftung-wasser/)
6. Klimaanlage (/klimaanlage/)
7. Über uns (/ueber-uns/)
8. Jobs (/jobs/)
9. Kontakt (/kontakt/)
```

### Unterseiten Heizungsbau (4)
```
10. Luftwärmepumpe (/waermepumpe/luftwaermepumpe/)
    → Parent: KEINE (behält URL-Struktur)
11. Hydraulischer Abgleich (/heizungsbau/hydraulischer-abgleich/)
    → Parent: Heizungsbau
12. 10 Jahre Garantie (/10-jahre-garantie/)
    → Parent: Heizungsbau
13. Heizungswartung & Notdienst (/heizungswartung/)
    → Parent: Heizungsbau
```

### Unterseiten Kaminöfen (1)
```
14. Heizungsausstellung (/kaminoefen/heizungsausstellung/)
    → Parent: Kaminöfen
```

### Unterseiten Badsanierung (1)
```
15. Komplettbadsanierung (/badsanierung/komplettbadsanierung/)
    → Parent: Badsanierung
```

### Unterseiten Klimaanlage (2)
```
16. Split-Klimaanlage (/klimaanlage/split-klimaanlage/)
    → Parent: Klimaanlage
17. Multisplit-Klimaanlage (/klimaanlage/multisplit-klimaanlage/)
    → Parent: Klimaanlage
```

### Footer-Seiten (3)
```
18. Impressum (/impressum/)
19. Datenschutz (/datenschutz/)
20. Cookie-Richtlinie (/cookie-richtlinie-eu/)
```

---

## 6️⃣ Navigation einrichten

### Hauptmenü (Header)
```
Design → Menüs → "Hauptmenü" erstellen

Struktur:
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
└── Kontakt
```

**Position:** Primary Menu / Header Navigation

### Footer-Menü
```
Design → Menüs → "Footer-Menü" erstellen

Struktur:
├── Impressum
├── Datenschutz
└── Cookie-Richtlinie
```

**Position:** Footer Navigation

---

## 7️⃣ Design-Einstellungen (Bricks)

### Global Settings
```
Bricks → Settings → General
- Container Width: 1200px
- Content Width: 800px
```

### Global Styles (CSS-Variablen)
```
Bricks → Settings → Custom Code → CSS (Body Tag)

:root {
  /* Farben */
  --color-primary: #E30613;
  --color-secondary: #FFD500;
  --color-accent: #FF8C00;
  --color-dark: #1A1A1A;
  --color-text: #333333;
  --color-background: #FFFFFF;
  --color-background-light: #F5F5F5;
  
  /* Typography */
  --font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  --font-size-h1: 48px;
  --font-size-h2: 36px;
  --font-size-h3: 24px;
  --font-size-body: 16px;
  
  /* Spacing */
  --space-xs: 8px;
  --space-sm: 16px;
  --space-md: 32px;
  --space-lg: 64px;
  --space-xl: 96px;
}

body {
  font-family: var(--font-family);
  color: var(--color-text);
  font-size: var(--font-size-body);
  line-height: 1.6;
}

h1, h2, h3, h4, h5, h6 {
  color: var(--color-dark);
  font-weight: 700;
}

h1 { font-size: var(--font-size-h1); }
h2 { font-size: var(--font-size-h2); }
h3 { font-size: var(--font-size-h3); }

.btn-primary {
  background: var(--color-primary);
  color: white;
  padding: 16px 32px;
  border-radius: 4px;
  font-weight: 700;
  text-decoration: none;
  display: inline-block;
  transition: all 0.3s;
}

.btn-primary:hover {
  background: #B50510;
  box-shadow: 0 5px 20px rgba(227, 6, 19, 0.3);
  transform: translateY(-2px);
}
```

---

## 8️⃣ Content-Workflow

### Für jede Seite:
1. **Original-Content holen** (von hs-straubing.de)
2. **Im ClimaCONNECT-Stil umschreiben** (kürzer, prägnanter)
3. **In Bricks einfügen** (mit Komponenten aus Design-System)
4. **Bilder von ClimaCONNECT** als Platzhalter einfügen
5. **SEO-Metadaten** (Yoast) ausfüllen

### Beispiel: Heizungsbau-Seite
```
1. Fetch: https://hs-straubing.de/heizungsbau/
2. Text extrahieren + umschreiben
3. Bricks-Editor öffnen:
   - Hero-Section (Bild + Headline + CTA)
   - Content-Section (Text + Icons)
   - USP-Section (Vorteile)
   - CTA-Section (Kontakt-Aufforderung)
4. Bild von ClimaCONNECT verwenden
5. Yoast SEO: Fokus-Keyword "Heizungsbau Straubing"
```

---

## 9️⃣ SEO-Optimierung

### Yoast SEO Einstellungen
```
SEO → Allgemein → Features
✅ XML-Sitemaps
✅ Erweiterte Einstellungen

SEO → Darstellung in der Suche
- Trennzeichen: "–" (En-Dash)
- Homepage: Meta-Description schreiben
```

### Für jede Seite:
```
✅ Fokus-Keyword definieren
✅ Meta-Title (60 Zeichen)
✅ Meta-Description (155 Zeichen)
✅ URL-Slug optimieren
✅ Alt-Texte für Bilder
✅ H1-H6 Hierarchie prüfen
```

---

## 🔟 Performance-Optimierung

### WP Rocket Einstellungen
```
WP Rocket → Cache
✅ Cache aktivieren

WP Rocket → Dateioptimierung
✅ CSS-Dateien minimieren
✅ CSS kombinieren
✅ JavaScript minimieren
✅ JavaScript zusammenfassen

WP Rocket → Medien
✅ Lazy Loading (Bilder)
✅ WebP-Bilder aktivieren

WP Rocket → Erweitert
✅ Google Fonts optimieren
```

### WP Smush
```
WP Smush → Bulk Smush
→ Alle Bilder komprimieren
→ WebP-Konvertierung aktivieren
```

---

## 1️⃣1️⃣ Launch-Checklist

### Vor Go-Live:
```
✅ Alle 20 Seiten angelegt + Content eingefügt
✅ Navigation funktioniert (Header + Footer)
✅ Kontaktformular getestet
✅ Responsive Design geprüft (Mobile, Tablet)
✅ Browser-Test (Chrome, Firefox, Safari, Edge)
✅ SEO: Alle Seiten haben Meta-Tags
✅ Performance: Google PageSpeed Score >90
✅ SSL-Zertifikat aktiv (HTTPS)
✅ 404-Seite erstellt
✅ Impressum + Datenschutz vollständig
✅ Cookie-Banner eingerichtet (falls DSGVO relevant)
✅ Google Analytics / Matomo eingebunden (optional)
✅ Google Search Console eingerichtet
✅ Backup erstellt (UpdraftPlus)
```

### Nach Go-Live:
```
✅ 301-Redirects von alter Struktur (falls Domain bleibt)
✅ XML-Sitemap bei Google einreichen
✅ Monitoring einrichten (Uptime Robot)
✅ 1 Woche überwachen: Fehler, Performance, SEO
```

---

## 📞 Support & Wartung

### Regelmäßige Tasks:
- **Wöchentlich:** Backups prüfen
- **Monatlich:** WordPress + Plugins updaten
- **Vierteljährlich:** SEO-Performance überprüfen
- **Jährlich:** Design-Refresh, neue Features

---

## 🎯 Nächster Schritt

**Bist du bereit, WordPress zu installieren?**

Falls ja, brauche ich:
1. Hosting-Provider (oder soll ich empfehlen?)
2. Domain (hs-straubing.de bleibt?)
3. Zugang zu Hosting-Panel (cPanel, Plesk, etc.)

Oder soll ich zunächst den **Content von hs-straubing.de extrahieren** und im ClimaCONNECT-Stil umschreiben?
