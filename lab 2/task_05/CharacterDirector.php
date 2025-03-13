<?php
require_once "HeroBuilder.php";
require_once "EnemyBuilder.php";

class CharacterDirector {
    public static function createHero(): Character {
        return (new HeroBuilder("Лицар Світла"))
            ->setHeight(1.85)
            ->setBodyType("Мускулистий")
            ->setHairColor("Білий")
            ->setEyeColor("Синій")
            ->setClothes("Латний обладунок")
            ->setInventory(["Меч", "Щит", "Зілля"])
            ->build();
    }

    public static function createEnemy(): Character {
        return (new EnemyBuilder("Темний Лорд"))
            ->setHeight(2.1)
            ->setBodyType("Величезний")
            ->setHairColor("Чорний")
            ->setEyeColor("Червоний")
            ->setClothes("Темна мантія")
            ->setInventory(["Магічний посох", "Чорний кристал"])
            ->addEvilDeed("Захоплення королівства")
            ->addEvilDeed("Викрадення принцеси")
            ->build();
    }
}
