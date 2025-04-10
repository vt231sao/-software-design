<?php

class FileWriter {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function write($text) {
        file_put_contents($this->filePath, $text, FILE_APPEND);
    }

    public function writeLine($text) {
        $this->write($text . PHP_EOL);
    }
}
