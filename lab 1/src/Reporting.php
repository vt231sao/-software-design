<?php

class Reporting {
    public static function generateInventoryReport(IInventory $inventory): void {
        echo "Інвентаризація складу:\n";
        foreach ($inventory->getInventory() as $item) {
            echo "- " . $item->getDescription() . "\n";
        }
    }
}
