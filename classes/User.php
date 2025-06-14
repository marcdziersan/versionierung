<?php
class User {
    private $name;
    private $language;
    public static $supportedLanguages = ['en', 'de', 'fr'];

    public function __construct($name, $language = 'en') {
        $this->name = htmlspecialchars(trim($name));
        $this->language = in_array($language, self::$supportedLanguages) ? $language : 'en';
    }

    public function greet() {
        return match($this->language) {
            'de' => "Hallo, {$this->name}!",
            'fr' => "Bonjour, {$this->name}!",
            default => "Hello, {$this->name}!",
        };
    }

    public function timeBasedGreeting() {
        $hour = (int)date("H");
        $text = match($this->language) {
            'de' => $hour < 12 ? "Guten Morgen" : ($hour < 18 ? "Guten Tag" : "Guten Abend"),
            'fr' => $hour < 12 ? "Bonjour" : ($hour < 18 ? "Bon après-midi" : "Bonsoir"),
            default => $hour < 12 ? "Good morning" : ($hour < 18 ? "Good afternoon" : "Good evening"),
        };
        return "$text, {$this->name}!";
    }

    public function getName() { return $this->name; }
    public function getLanguage() { return $this->language; }
}
