<?php
require_once "Device.php";

class Netbook implements Device {
    private string $brand;

    public function __construct(string $brand) {
        $this->brand = $brand;
    }

    public function getName(): string {
        return "{$this->brand} Netbook";
    }
}
