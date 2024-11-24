<?php
// Version 0.0.2
define('VERSION', '0.0.2');

// Funktion: Standardbegrüßung
function greet() {
    return "Hello, World!";
}

// Neue Funktion: Personalisierte Begrüßung
function greetUser($name) {
    return "Hello, $name!";
}

// Beispielnutzung
echo greet(); // Ausgabe: Hello, World!
echo greetUser("Alice"); // Ausgabe: Hello, Alice!
?>
