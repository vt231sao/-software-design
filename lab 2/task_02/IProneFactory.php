<?php
require_once "DeviceFactory.php";
require_once "Laptop.php";
require_once "Netbook.php";
require_once "EBook.php";
require_once "Smartphone.php";

class IProneFactory implements DeviceFactory {
    public function createLaptop(): Laptop {
        return new Laptop("IProne");
    }

    public function createNetbook(): Netbook {
        return new Netbook("IProne");
    }

    public function createEBook(): EBook {
        return new EBook("IProne");
    }

    public function createSmartphone(): Smartphone {
        return new Smartphone("IProne");
    }
}
