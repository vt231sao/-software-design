<?php

class Character {
    public string $name;
    public float $height;
    public string $bodyType;
    public string $hairColor;
    public string $eyeColor;
    public string $clothes;
    public array $inventory;

    public function __construct(string $name) {
        $this->name = $name;
        $this->inventory = [];
    }

    public function displayInfo(): void {
        echo "=== {$this->name} ===\n";
        echo "Зріст: {$this->height} м\n";
        echo "Статура: {$this->bodyType}\n";
        echo "Колір волосся: {$this->hairColor}\n";
        echo "Колір очей: {$this->eyeColor}\n";
        echo "Одяг: {$this->clothes}\n";
        echo "Інвентар: " . implode(", ", $this->inventory) . "\n\n";
    }
}
