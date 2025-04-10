<?php

require_once 'TextReader.php';
class SmartTextReader implements TextReader {
    public function read(string $filename): array {
        $result = [];
        $lines = file($filename, FILE_IGNORE_NEW_LINES);

        foreach ($lines as $line) {
            $result[] = preg_split('//u', $line, -1, PREG_SPLIT_NO_EMPTY);
        }

        return $result;
    }
}