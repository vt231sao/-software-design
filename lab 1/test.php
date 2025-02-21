<?php
require_once 'src/Money.php';
require_once 'src/Product.php';
require_once 'src/Warehouse.php';
require_once 'src/Reporting.php';
$money = new Money(10, 99);
$product = new Product("Годинник", $money);
$warehouse = new Warehouse();
$warehouse->addProduct($product);
Reporting::generateInventoryReport($warehouse);