<?php
class Product {
    private string $name;
    private Money $price;

    public function __construct(string $name, Money $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getPrice(): Money
    {
        return $this->price;
    }

    public function decreasePrice(int $whole, int $cents): void {
        $newWhole = $this->price->getAmount() - ($whole + $cents / 100);
        $this->price = new Money((int)$newWhole, (int)(($newWhole - (int)$newWhole) * 100));
    }
}