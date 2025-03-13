<?php

interface DeviceFactory {
    public function createLaptop(): Laptop;
    public function createNetbook(): Netbook;
    public function createEBook(): EBook;
    public function createSmartphone(): Smartphone;
}
