<?php
require_once "CharacterBuilderInterface.php";
require_once "Character.php";

class EnemyBuilder implements CharacterBuilderInterface {
    private Character $character;
    private array $evilDeeds = [];

    public function __construct(string $name) {
        $this->character = new Character($name);
    }

    public function setHeight(float $height): self {
        $this->character->height = $height;
        return $this;
    }

    public function setBodyType(string $bodyType): self {
        $this->character->bodyType = $bodyType;
        return $this;
    }

    public function setHairColor(string $hairColor): self {
        $this->character->hairColor = $hairColor;
        return $this;
    }

    public function setEyeColor(string $eyeColor): self {
        $this->character->eyeColor = $eyeColor;
        return $this;
    }

    public function setClothes(string $clothes): self {
        $this->character->clothes = $clothes;
        return $this;
    }

    public function setInventory(array $inventory): self {
        $this->character->inventory = $inventory;
        return $this;
    }

    public function addEvilDeed(string $deed): self {
        $this->evilDeeds[] = $deed;
        return $this;
    }

    public function build(): Character {
        return $this->character;
    }
}
