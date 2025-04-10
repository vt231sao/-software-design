<?php

require_once 'EquipmentDecorator.php';

class Armor extends EquipmentDecorator {
    public function getDescription(): string {
        return $this->hero->getDescription() . ", wearing Armor";
    }

    public function getPower(): int {
        return $this->hero->getPower() + 3;
    }
}
