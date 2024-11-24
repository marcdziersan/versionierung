
Version 1.0.0: Erste stabile Veröffentlichung mit vollständiger Funktionalität.
Alpha (a): Für Entwickler – experimentelle Funktionen.
Beta (b): Für Tester – fast fertig, Feedback willkommen.
RC: Kurz vor Veröffentlichung, finalisierte Funktionen.
Versionierungssystem (SemVer):

    MAJOR: Große Änderungen (kompatibilitätsbrechend).
    MINOR: Neue Funktionen (kompatibel).
    PATCH: Fehlerbehebungen.

Um zu zeigen wie dies im Code aussehen könnte wie die Versionierung funktioniert.

Version 0.0.1 bis 0.1.0 hoch:

0.0.1 -> 0.0.2 -> 0.0.3 -> 0.0.4 -> 0.0.5 -> 0.0.6 -> 0.0.7 -> 0.0.8 -> 0.0.9 -> 0.1.0

Version 1.0.0 (Alpha):

define('VERSION', '1.0.0-alpha');
function greet() { return "Hello, World!"; }
// Weitere Funktionen für Benutzeranpassungen, Zeitbegrüßungen usw.

Version 1.0.0 (Beta):

define('VERSION', '1.0.0-beta');
function greet() { return "Hello, World!"; }
// Weitere Funktionen mit Benutzeranpassungen und Feedback-Mechanismen

Version 1.0.0 RC (Release Candidate):

define('VERSION', '1.0.0-RC');
function greet() { return "Hello, World!"; }
// Weitere Funktionen mit Fehlerbehandlung und Benutzerfeedback

Version 1.0.0 Release:

define('VERSION', '1.0.0');
function greet() { return "Hello, World!"; }
// Alle Funktionen für Benutzeranpassungen, Zeitbegrüßungen, Feedback usw. vollständig implementiert
