<?php
require_once "DeviceFactory.php";
require_once "Laptop.php";
require_once "Netbook.php";
require_once "EBook.php";
require_once "Smartphone.php";

class BalaxyFactory implements DeviceFactory {
    public function createLaptop(): Laptop {
        return new Laptop("Balaxy");
    }

    public function createNetbook(): Netbook {
        return new Netbook("Balaxy");
    }

    public function createEBook(): EBook {
        return new EBook("Balaxy");
    }

    public function createSmartphone(): Smartphone {
        return new Smartphone("Balaxy");
    }
}
