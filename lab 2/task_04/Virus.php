<?php

class Virus {
    private string $name;
    private string $species;
    private int $age;
    private float $weight;
    private array $children = [];

    public function __construct(string $name, string $species, int $age, float $weight) {
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->weight = $weight;
    }

    public function addChild(Virus $child): void {
        $this->children[] = $child;
    }

    public function __clone() {
        $clonedChildren = [];
        foreach ($this->children as $child) {
            $clonedChildren[] = clone $child;
        }
        $this->children = $clonedChildren;
    }

    public function printVirusInfo(int $level = 0): void {
        echo str_repeat("  ", $level) . "- {$this->name} (Вид: {$this->species}, Вік: {$this->age}, Вага: {$this->weight} г)\n";
        foreach ($this->children as $child) {
            $child->printVirusInfo($level + 1);
        }
    }
}
