<?php
require_once 'src/Money.php';
require_once 'src/Product.php';
require_once 'src/Warehouse.php';
require_once 'src/Reporting.php';
require_once 'src/IReportable.php';
require_once 'src/IInventory.php';
try {
    $money = new Money(10, 99);
    $product = new Product("Годинник", $money);

    $warehouse = new Warehouse();
    $warehouse->addProduct($product);

    echo "До зниження ціни:\n";
    Reporting::generateInventoryReport($warehouse);

    $product->decreasePrice(2, 50);
    echo "\nПісля зниження ціни:\n";
    Reporting::generateInventoryReport($warehouse);

    try {
        $invalidMoney = new Money(-5, 50);
    } catch (InvalidArgumentException $e) {
        echo "\nПомилка: " . $e->getMessage() . "\n";
    }

    try {
        $product->decreasePrice(20, 0);
    } catch (InvalidArgumentException $e) {
        echo "\nПомилка: " . $e->getMessage() . "\n";
    }
} catch (Exception $e) {
    echo "\nЗагальна помилка: " . $e->getMessage() . "\n";
}
;