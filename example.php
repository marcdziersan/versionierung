<?php
// Version 0.0.3
define('VERSION', '0.0.3');

// Funktion: Standardbegrüßung
function greet() {
    return "Hello, World!";
}

// Verbesserte Funktion: Personalisierte Begrüßung mit Fehlerbehandlung
function greetUser($name) {
    if (empty($name)) {
        return "Hello, Stranger!";
    }
    return "Hello, $name!";
}

// Beispielnutzung
echo greet(); // Ausgabe: Hello, World!
echo greetUser(""); // Ausgabe: Hello, Stranger!
echo greetUser("Alice"); // Ausgabe: Hello, Alice!
?>
