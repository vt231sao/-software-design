<?php

require_once 'SmartTextReader.php';
require_once 'SmartTextChecker.php';
require_once 'SmartTextReaderLocker.php';

function print2DArray(array $arr): void {
    foreach ($arr as $line) {
        echo implode('', $line) . "\n";
    }
}

file_put_contents("example.txt", "Hello\nWorld!");

$reader = new SmartTextReader();

$checker = new SmartTextChecker($reader);

$locker = new SmartTextReaderLocker($checker, '/secret\\.txt/');

echo "--- Reading example.txt ---\n";
$data = $locker->read("example.txt");
print2DArray($data);

echo "\n--- Reading secret.txt ---\n";
$data = $locker->read("secret.txt");
print2DArray($data);
