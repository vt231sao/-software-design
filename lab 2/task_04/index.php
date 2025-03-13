<?php
require_once "Virus.php";

// Створюємо "родоначальника" вірусів
$parentVirus = new Virus("COVID-19", "Коронавірус", 4, 0.03);

// Створюємо його "дітей"
$childVirus1 = new Virus("Delta", "Коронавірус", 2, 0.025);
$childVirus2 = new Virus("Omicron", "Коронавірус", 1, 0.02);

// Додаємо дітей до батька
$parentVirus->addChild($childVirus1);
$parentVirus->addChild($childVirus2);

// Додаємо "внуків" (ще одне покоління вірусів)
$grandChildVirus = new Virus("BA.5", "Коронавірус", 1, 0.015);
$childVirus2->addChild($grandChildVirus);

// Виводимо початкову структуру вірусів
echo "=== Оригінальне сімейство вірусів ===\n";
$parentVirus->printVirusInfo();

// Клонуємо батьківський вірус (усе його сімейство)
$clonedVirus = clone $parentVirus;

// Виводимо клоновану структуру
echo "\n=== Клоноване сімейство вірусів ===\n";
$clonedVirus->printVirusInfo();
