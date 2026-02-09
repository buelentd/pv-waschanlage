# Sitemap: hs-straubing.de → WordPress

**Extrahiert:** 2026-02-09  
**Anzahl Seiten:** 22 (ohne Icons/Assets)

---

## Hierarchische Struktur

```
Home (/)
│
├── Heizungsbau (/heizungsbau/)
│   ├── Wärmepumpe → Luftwärmepumpe (/waermepumpe/luftwaermepumpe/)
│   ├── Hydraulischer Abgleich (/heizungsbau/hydraulischer-abgleich/)
│   ├── 10 Jahre Garantie (/10-jahre-garantie/)
│   └── Heizungswartung & Notdienst (/heizungswartung/)
│
├── Kaminöfen (/kaminoefen/)
│   └── Heizungsausstellung (/kaminoefen/heizungsausstellung/)
│
├── Badsanierung (/badsanierung/)
│   └── Komplettbadsanierung (/badsanierung/komplettbadsanierung/)
│
├── Lüftung & Wasser (/lueftung-wasser/)
│
├── Klimaanlage (/klimaanlage/)
│   ├── Split-Klimaanlage (/klimaanlage/split-klimaanlage/)
│   └── Multisplit-Klimaanlage (/klimaanlage/multisplit-klimaanlage/)
│
├── Über uns (/ueber-uns/)
│
├── Jobs (/jobs/)
│
├── Kontakt (/kontakt/)
│
└── Footer
    ├── Impressum (/impressum/)
    ├── Datenschutz (/datenschutz/)
    └── Cookie-Richtlinie (/cookie-richtlinie-eu/)
```

---

## WordPress-Seitenstruktur (Flat List)

**Hauptseiten:**
1. **Home** (/)
2. **Heizungsbau** (/heizungsbau/)
3. **Kaminöfen** (/kaminoefen/)
4. **Badsanierung** (/badsanierung/)
5. **Lüftung & Wasser** (/lueftung-wasser/)
6. **Klimaanlage** (/klimaanlage/)
7. **Über uns** (/ueber-uns/)
8. **Jobs** (/jobs/)
9. **Kontakt** (/kontakt/)

**Unterseiten Heizungsbau:**
10. **Luftwärmepumpe** (/waermepumpe/luftwaermepumpe/) — Parent: Heizungsbau
11. **Hydraulischer Abgleich** (/heizungsbau/hydraulischer-abgleich/) — Parent: Heizungsbau
12. **10 Jahre Garantie** (/10-jahre-garantie/) — Parent: Heizungsbau
13. **Heizungswartung & Notdienst** (/heizungswartung/) — Parent: Heizungsbau

**Unterseiten Kaminöfen:**
14. **Heizungsausstellung** (/kaminoefen/heizungsausstellung/) — Parent: Kaminöfen

**Unterseiten Badsanierung:**
15. **Komplettbadsanierung** (/badsanierung/komplettbadsanierung/) — Parent: Badsanierung

**Unterseiten Klimaanlage:**
16. **Split-Klimaanlage** (/klimaanlage/split-klimaanlage/) — Parent: Klimaanlage
17. **Multisplit-Klimaanlage** (/klimaanlage/multisplit-klimaanlage/) — Parent: Klimaanlage

**Footer/Legal:**
18. **Impressum** (/impressum/)
19. **Datenschutz** (/datenschutz/)
20. **Cookie-Richtlinie** (/cookie-richtlinie-eu/)

---

## Navigation (WordPress-Menü)

### Hauptnavigation (Header)
```
- Heizungsbau
  └── Luftwärmepumpe
  └── Hydraulischer Abgleich
  └── 10 Jahre Garantie
  └── Heizungswartung & Notdienst
  
- Kaminöfen
  └── Heizungsausstellung
  
- Badsanierung
  └── Komplettbadsanierung
  
- Lüftung & Wasser

- Klimaanlage
  └── Split-Klimaanlage
  └── Multisplit-Klimaanlage
  
- Über uns

- Jobs

- Kontakt
```

### Footer-Navigation
```
- Impressum
- Datenschutz
- Cookie-Richtlinie
```

---

## Notizen

- **Gesamt:** 20 Content-Seiten (ohne Impressum/Datenschutz/Cookies)
- **404 gefunden:** `/heizungsbau/waermepumpe/` (existiert nicht, redirect zu `/waermepumpe/luftwaermepumpe/`)
- **Doppelte URLs:** `/projekt-art/heizungsbau/` → `/heizungsbau/` (vermutlich alte Struktur)

---

## WordPress-Setup

### Eltern-Kind-Beziehungen (Parent Pages)

| **Seite** | **Parent** |
|-----------|-----------|
| Luftwärmepumpe | Heizungsbau |
| Hydraulischer Abgleich | Heizungsbau |
| 10 Jahre Garantie | Heizungsbau |
| Heizungswartung & Notdienst | Heizungsbau |
| Heizungsausstellung | Kaminöfen |
| Komplettbadsanierung | Badsanierung |
| Split-Klimaanlage | Klimaanlage |
| Multisplit-Klimaanlage | Klimaanlage |

### Permalinks
```
Settings → Permalinks → Post name
```

Damit bekommen wir:
- `/heizungsbau/` (Parent)
- `/heizungsbau/hydraulischer-abgleich/` (Child)

✅ **Passt zur bestehenden URL-Struktur!**
