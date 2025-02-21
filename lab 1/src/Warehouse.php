<?php

require_once 'IInventory.php';
class Warehouse implements IInventory {
    private array $products = [];

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function getInventory(): array {
        return $this->products;
    }
}