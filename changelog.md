## 📜 **Changelog: Änderungen von Version 0.0.1 bis 2.4.0**

### Version 0.0.1 → 0.0.2

* Erste Funktionalität der `greet()` Funktion hinzugefügt (Begrüßung mit `"Hello, World!"`).
* Keine Fehlerbehandlung oder erweiterte Features.

### Version 0.0.2 → 0.0.3

* Implementierung der Funktion `greetUser($name)` zur personalisierten Begrüßung.
* Basis-Fehlerbehandlung bei leerem Namen.

### Version 0.0.3 → 0.0.4

* Einführung der `timeBasedGreeting()` Funktion für zeitabhängige Begrüßung (Morgen, Nachmittag, Abend).

### Version 0.0.4 → 0.0.5

* Hinzufügen der `combinedGreeting($name)` Funktion, die Zeit- und personalisierte Begrüßungen kombiniert.

### Version 0.0.5 → 0.0.6

* Erweiterung der Funktionalität von `userCustomizedGreeting()` um das Alter und den Standort des Benutzers zu berücksichtigen.

### Version 0.0.6 → 0.0.7

* Einführung der Funktion `getCurrentWeek()` zur Berechnung der aktuellen Kalenderwoche.

### Version 0.0.7 → 0.0.8

* Verbesserung der Fehlerbehandlung mit der Funktion `handleError($errorMessage)` zum Logging von Fehlern.

### Version 0.0.8 → 0.0.9

* Hinzufügen der Funktion `greetInLanguage($name, $language)` zur Unterstützung mehrerer Sprachen (Deutsch, Französisch, Englisch).

### Version 0.0.9 → 0.1.0

* Erweiterte Fehlerbehandlung mit Logging und benutzerdefinierten Nachrichten.
* Refactoring und Modularisierung der Codebasis.

---

### Version 0.1.0 → 1.0.0 Alpha

* Stabile Funktionen für personalisierte und zeitbasierte Begrüßungen implementiert.
* Erweiterung der Sprachunterstützung.
* Einführung von Feedback-Funktionen und robuster Fehlerbehandlung.
* Erste **Alpha-Version** veröffentlicht.

### Version 1.0.0 Alpha → 1.0.0 Beta

* Benutzerumfragen zur Qualitätssicherung eingeführt.
* Verbesserte Fehler- und Eingabebehandlung.
* Optimierte Entwicklerdokumentation.

### Version 1.0.0 Beta → 1.0.0 RC

* Letzte Tests und Bugfixes.
* Fokus auf UX und finale Stabilität.

### Version 1.0.0 RC → 1.0.0 Release

* Alle Funktionen stabil und vollständig.
* Finalversion für den produktiven Einsatz.

---

## 🚧 **Meilenstein: Umstieg auf objektorientierte Architektur**

### Version 1.0.0 → 2.0.0

* **Breaking Change**: Migration der Funktionslogik in eine neue `User`-Klasse.
* `User`-Klasse verwaltet Benutzerdaten und bietet:

  * `greet()`: Sprachbasierte Begrüßung.
  * `timeBasedGreeting()`: Tageszeitabhängige Begrüßung.
* Entfernung veralteter globaler Funktionen.
* **Nicht rückwärtskompatibel** mit 1.x-Versionen.

---

## 🔄 **Neue Versionen nach Einführung der `User`-Klasse**

### Version 2.0.0 → 2.1.0

* Einführung von **mehrsprachiger Unterstützung** per Sprachcode (`en`, `de`, `fr`).
* Dynamisches Sprachlade-System (`messages.php`).
* Erweiterung des `User`-Konstruktors um Sprachvalidierung.
* Strukturierung der Sprachtexte für einfache Erweiterbarkeit.

### Version 2.1.0 → 2.2.0

* Neues **HTML-Formular** für Benutzereingaben mit POST-Handling.
* Ausgabe von Begrüßung und Tageszeit über das `User`-Objekt.
* Einführung eines simplen **Datenbank-Backends** via JSON-Datei.
* Session-basierte Speicherung des zuletzt begrüßten Benutzers.

### Version 2.2.0 → 2.3.0

* Hinzufügen einer **Benutzertabelle** zur Anzeige aller bisherigen Begrüßungen.
* Neue Features:

  * Suchfeld zum Filtern von Benutzernamen.
  * Markierung des letzten eingegebenen Benutzers.
* Separierung in Module:

  * `User.php` (Klasse)
  * `lang/messages.php` (Sprachen)
  * `data/users.json` (Datenbank)

### Version 2.3.0 → 2.4.0

* **Neue Features:**

  * `export.php`: Export der Benutzerdaten als CSV-Datei.
  * `reset.php`: Zurücksetzen der JSON-Datenbank.
* Verbesserungen:

  * UI optimiert (CSS-Design, Benutzerfreundlichkeit).
  * Eingabefelder validiert und sanitisiert.
  * Kompatibel mit gängigen Serverumgebungen (Apache, XAMPP, etc.).
* Neue Sprachlabels und konfigurierbares Sprachmenü.

---

### ✅ Nächste geplante Features für 2.5.0 (optional)

* SQLite- oder MySQL-Datenbankanbindung.
* Benutzer-Authentifizierung (Login/Passwort).
* Backend-Admin-Bereich.
* Unterstützung für Ajax-Formulareingaben.

---
