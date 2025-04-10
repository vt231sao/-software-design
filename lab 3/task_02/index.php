<?php

require_once 'Warrior.php';
require_once 'Mage.php';
require_once 'Paladin.php';
require_once 'Sword.php';
require_once 'Armor.php';
require_once 'Amulet.php';

function showHeroStats(Hero $hero) {
    echo $hero->getDescription() . " | Power: " . $hero->getPower() . PHP_EOL;
}

echo "=== RPG Hero Setup ===\n";

$warrior = new Warrior();
$warrior = new Sword($warrior);
$warrior = new Armor($warrior);
showHeroStats($warrior);

$mage = new Mage();
$mage = new Amulet($mage);
$mage = new Amulet($mage);
showHeroStats($mage);

$paladin = new Paladin();
$paladin = new Sword($paladin);
$paladin = new Armor($paladin);
$paladin = new Amulet($paladin);
showHeroStats($paladin);
