<?php

require_once 'Hero.php';

class Mage implements Hero {
    public function getDescription(): string {
        return "Mage";
    }

    public function getPower(): int {
        return 8;
    }
}
