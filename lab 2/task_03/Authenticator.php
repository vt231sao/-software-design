<?php

class Authenticator {
    private static ?Authenticator $instance = null;
    private static object $lock;

    private function __construct() {
        echo "Authenticator created\n";
    }

    private function __clone() {}

    public function __wakeup() {
        throw new \Exception("Cannot unserialize Singleton");
    }

    public static function getInstance(): Authenticator {
        if (self::$instance === null) {
            if (!isset(self::$lock)) {
                self::$lock = new \stdClass();
            }

            if (!isset(self::$instance)) {
                self::$instance = new self();
            }
        }
        return self::$instance;
    }

    public function authenticate(string $username, string $password): bool {
        return $username === "admin" && $password === "password";
    }
}
