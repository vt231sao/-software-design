<?php

require_once 'EquipmentDecorator.php';

class Amulet extends EquipmentDecorator {
    public function getDescription(): string {
        return $this->hero->getDescription() . ", with Magic Amulet";
    }

    public function getPower(): int {
        return $this->hero->getPower() + 4;
    }
}
