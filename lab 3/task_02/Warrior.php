<?php

require_once 'Hero.php';

class Warrior implements Hero {
    public function getDescription(): string {
        return "Warrior";
    }

    public function getPower(): int {
        return 10;
    }
}
