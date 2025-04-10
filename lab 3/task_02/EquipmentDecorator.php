<?php

require_once 'Hero.php';

abstract class EquipmentDecorator implements Hero {
    protected Hero $hero;

    public function __construct(Hero $hero) {
        $this->hero = $hero;
    }

    abstract public function getDescription(): string;
    abstract public function getPower(): int;
}
