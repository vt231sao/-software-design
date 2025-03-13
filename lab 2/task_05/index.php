<?php
require_once "CharacterDirector.php";

$hero = CharacterDirector::createHero();
$enemy = CharacterDirector::createEnemy();

$hero->displayInfo();
$enemy->displayInfo();
