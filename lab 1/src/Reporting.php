<?php

class Reporting {
    public static function generateInventoryReport(Warehouse $warehouse): void {
        echo "Інвентаризація складу:\n";
        foreach ($warehouse->getProducts() as $product) {
            echo "- назва " . $product->getName() . "\n";
            echo "- ціна " . $product->getPrice()->getAmount() . "$\n";
        }
    }
}
