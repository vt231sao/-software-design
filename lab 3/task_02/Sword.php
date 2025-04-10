<?php

require_once 'EquipmentDecorator.php';

class Sword extends EquipmentDecorator {
    public function getDescription(): string {
        return $this->hero->getDescription() . ", with Sword";
    }

    public function getPower(): int {
        return $this->hero->getPower() + 5;
    }
}
