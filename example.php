<?php
// Version 0.2.0
define('VERSION', '0.2.0');

// Funktion: Standardbegrüßung
function greet() {
    return "Hello, World!";
}

// Personalisierte Begrüßung mit Fehlerbehandlung
function greetUser($name) {
    if (empty($name)) {
        return "Hello, Stranger!";
    }
    return "Hello, $name!";
}

// Zeitbasierte Begrüßung
function timeBasedGreeting() {
    $hour = date("H");
    if ($hour < 12) {
        return "Good morning!";
    } elseif ($hour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}

// Kombinierte Begrüßung: Zeitbasiert + Personalisierung
function combinedGreeting($name) {
    $timeGreeting = timeBasedGreeting();
    $personalGreeting = greetUser($name);
    return "$timeGreeting $personalGreeting";
}

// Neue Funktion: Benutzeranpassung mit alter und ortsbasierter Begrüßung
function userCustomizedGreeting($name, $age, $location) {
    if ($age < 18) {
        $ageMessage = "You're still a young one!";
    } else {
        $ageMessage = "You're an adult now!";
    }

    return combinedGreeting($name) . " $ageMessage. You are in $location.";
}

// Beispielnutzung
echo greet(); // Ausgabe: Hello, World!
echo greetUser("Alice"); // Ausgabe: Hello, Alice!
echo timeBasedGreeting(); // Ausgabe: Good morning! (abhängig von der Uhrzeit)
echo combinedGreeting("Alice"); // Ausgabe: Good morning! Hello, Alice! (abhängig von der Uhrzeit)
echo userCustomizedGreeting("Alice", 25, "Berlin"); // Ausgabe: Good morning! Hello, Alice! You're an adult now! You are in Berlin.
?>
