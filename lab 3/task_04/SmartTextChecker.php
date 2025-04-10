<?php

require_once 'TextReader.php';
class SmartTextChecker implements TextReader {
    private TextReader $reader;

    public function __construct(TextReader $reader) {
        $this->reader = $reader;
    }

    public function read(string $filename): array {
        echo "Opening file: $filename\n";

        $result = $this->reader->read($filename);

        echo "Reading file: $filename\n";

        $lineCount = count($result);
        $charCount = array_reduce($result, fn($carry, $line) => $carry + count($line), 0);

        echo "Total lines: $lineCount\n";
        echo "Total characters: $charCount\n";

        echo "Closing file: $filename\n";

        return $result;
    }
}