<?php

require_once 'TextReader.php';
class SmartTextReaderLocker implements TextReader {
    private TextReader $reader;
    private string $pattern;

    public function __construct(TextReader $reader, string $pattern) {
        $this->reader = $reader;
        $this->pattern = $pattern;
    }

    public function read(string $filename): array {
        if (preg_match($this->pattern, $filename)) {
            echo "Access denied!\n";
            return [];
        }

        return $this->reader->read($filename);
    }
}