<?php

require_once 'LoadStrategy.php';

class NetworkLoadStrategy implements LoadStrategy {
    public function load(string $src): string {
        return "Завантажено з мережі: $src";
    }
}
