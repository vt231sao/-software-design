<?php

require_once 'IReportable.php';
class Product implements IReportable {
    private string $name;
    private Money $price;

    public function __construct(string $name, Money $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): Money {
        return $this->price;
    }

    public function decreasePrice(int $whole, int $cents): void {
        $this->price = $this->price->decrease($whole, $cents);
    }

    public function getDescription(): string {
        return "Назва: $this->name, Ціна: " . $this->price->getAmount() . "$";
    }
}