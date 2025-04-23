<?php

require_once 'LoadStrategy.php';

class FileLoadStrategy implements LoadStrategy {
    public function load(string $src): string {
        return "Завантажено з файлової системи: $src";
    }
}
