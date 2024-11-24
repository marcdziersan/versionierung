<?php
// Version 1.0.0 RC
define('VERSION', '1.0.0-RC');

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

// Benutzeranpassung
function userCustomizedGreeting($name, $age, $location) {
    if ($age < 18) {
        $ageMessage = "You're still a young one!";
    } else {
        $ageMessage = "You're an adult now!";
    }

    return combinedGreeting($name) . " $ageMessage. You are in $location.";
}

// Kalenderwoche
function getCurrentWeek() {
    $currentDate = new DateTime();
    return $currentDate->format("W");
}

// Fehlerbehebung: Zeitformatierung verbessern
function getTimeOfDay() {
    $hour = date("H");
    if ($hour < 12) {
        return "morning";
    } elseif ($hour < 18) {
        return "afternoon";
    } else {
        return "evening";
    }
}

// Benutzerumfrage (Feedback sammeln)
function collectUserFeedback($feedback) {
    // Diese Funktion simuliert das Speichern von Feedback, z.B. in einer Datenbank oder Datei
    echo "Feedback received: $feedback\n";
}

// Sprachunterstützung: Begrüßung in mehreren Sprachen
function greetInLanguage($name, $language = 'en') {
    if ($language == 'de') {
        return "Hallo, $name!";
    } elseif ($language == 'fr') {
        return "Bonjour, $name!";
    } else {
        return "Hello, $name!";
    }
}

// Verbesserte Fehlerbehandlung: Fehlernachricht und Logging
function handleError($errorMessage) {
    // Hier könnten wir Fehler protokollieren und eine benutzerfreundliche Nachricht ausgeben
    echo "Error: $errorMessage\n";
    // Optionale Fehlerprotokollierung in eine Datei oder Datenbank
    // file_put_contents('error_log.txt', $errorMessage . "\n", FILE_APPEND);
}

// Beispielnutzung
echo greet(); // Ausgabe: Hello, World!
echo greetUser("Alice"); // Ausgabe: Hello, Alice!
echo timeBasedGreeting(); // Ausgabe: Good morning! (abhängig von der Uhrzeit)
echo combinedGreeting("Alice"); // Ausgabe: Good morning! Hello, Alice! (abhängig von der Uhrzeit)
echo userCustomizedGreeting("Alice", 25, "Berlin"); // Ausgabe: Good morning! Hello, Alice! You're an adult now! You are in Berlin.
echo "Current Week: " . getCurrentWeek(); // Ausgabe: Current Week: 48 (abhängig vom aktuellen Datum)
echo "Time of Day: " . getTimeOfDay(); // Ausgabe: Time of Day: morning/afternoon/evening
collectUserFeedback("This feature works great!"); // Ausgabe: Feedback received: This feature works great!
echo greetInLanguage("Alice", 'de'); // Ausgabe: Hallo, Alice!
echo greetInLanguage("Alice", 'fr'); // Ausgabe: Bonjour, Alice!
handleError("This is a test error message."); // Ausgabe: Error: This is a test error message.
?>
