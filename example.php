<?php
// Version 2.0.0-Release
define('VERSION', '2.0.0');

// Neue Benutzerklasse zur Verwaltung von Benutzerinformationen
class User {
    private $name;
    private $language;
    
    // Konstruktor
    public function __construct($name, $language = 'en') {
        $this->name = $name;
        $this->language = $language;
    }

    // Methode: Begrüßung des Benutzers
    public function greet() {
        if ($this->language == 'de') {
            return "Hallo, " . $this->name . "!";
        } elseif ($this->language == 'fr') {
            return "Bonjour, " . $this->name . "!";
        } else {
            return "Hello, " . $this->name . "!";
        }
    }

    // Methode: Zeitabhängige Begrüßung
    public function timeBasedGreeting() {
        $hour = date("H");
        if ($hour < 12) {
            return "Good morning, " . $this->name . "!";
        } elseif ($hour < 18) {
            return "Good afternoon, " . $this->name . "!";
        } else {
            return "Good evening, " . $this->name . "!";
        }
    }
}

// Funktion zur Version anzeigen
function displayVersion() {
    echo "Current version: " . VERSION . "\n";
}

// Beispielnutzung
$user = new User("Alice", "de");
echo $user->greet(); // Ausgabe: Hallo, Alice!
echo $user->timeBasedGreeting(); // Ausgabe: Good morning/afternoon/evening Alice!
displayVersion(); // Ausgabe: Current version: 2.0.0
?>
