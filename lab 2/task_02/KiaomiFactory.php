<?php
require_once "DeviceFactory.php";
require_once "Laptop.php";
require_once "Netbook.php";
require_once "EBook.php";
require_once "Smartphone.php";

class KiaomiFactory implements DeviceFactory {
    public function createLaptop(): Laptop {
        return new Laptop("Kiaomi");
    }

    public function createNetbook(): Netbook {
        return new Netbook("Kiaomi");
    }

    public function createEBook(): EBook {
        return new EBook("Kiaomi");
    }

    public function createSmartphone(): Smartphone {
        return new Smartphone("Kiaomi");
    }
}
