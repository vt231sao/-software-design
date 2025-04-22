<?php

require_once 'Level1Support.php';
require_once 'Level2Support.php';
require_once 'Level3Support.php';
require_once 'FinalSupport.php';

function menu(): void {
    echo "\n--- Система підтримки користувачів ---\n";
    echo "Оберіть тип запиту:\n";
    echo "1 - Загальні питання\n";
    echo "2 - Технічна проблема\n";
    echo "3 - Проблема з акаунтом\n";
    echo "4 - Інше / Консультація\n";
    echo "Введіть номер: ";
}

$level1 = new Level1Support();
$level2 = new Level2Support();
$level3 = new Level3Support();
$final = new FinalSupport();

$level1->setNext($level2)->setNext($level3)->setNext($final);

do {
    menu();
    $input = trim(fgets(STDIN));
    $result = $level1->handle($input);

    if ($result) {
        echo "\n$result\n";
        break;
    } else {
        echo "\nНевірний вибір. Спробуйте ще раз.\n";
    }
} while (true);
