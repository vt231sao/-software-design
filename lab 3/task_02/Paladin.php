<?php

require_once 'Hero.php';

class Paladin implements Hero {
    public function getDescription(): string {
        return "Paladin";
    }

    public function getPower(): int {
        return 12;
    }
}
