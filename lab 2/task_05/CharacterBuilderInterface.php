<?php

interface CharacterBuilderInterface {
    public function setHeight(float $height): self;
    public function setBodyType(string $bodyType): self;
    public function setHairColor(string $hairColor): self;
    public function setEyeColor(string $eyeColor): self;
    public function setClothes(string $clothes): self;
    public function setInventory(array $inventory): self;
    public function build(): Character;
}
