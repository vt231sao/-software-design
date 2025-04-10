<?php

require_once '../task_05/LightTextNode.php';
require_once '../task_05/LightElementNode.php';
require_once 'LightElementFactory.php';

function memoryUsageMB(): float {
    return round(memory_get_usage() / 1024 / 1024, 2);
}

echo "Memory usage before: " . memoryUsageMB() . " MB\n";

$lines = file("book.txt", FILE_IGNORE_NEW_LINES);
$factory = new LightElementFactory();

$page = $factory->getElement('div');

foreach ($lines as $line) {
    $trimmed = trim($line);
    $length = strlen($trimmed);

    if ($line === $lines[0]) {
        $el = $factory->getElement('h1', 'block');
    } elseif ($length < 20) {
        $el = $factory->getElement('h2', 'block');
    } elseif (preg_match('/^\s/', $line)) {
        $el = $factory->getElement('blockquote', 'block');
    } else {
        $el = $factory->getElement('p', 'block');
    }

    $el->addChild(new LightTextNode($trimmed));
    $page->addChild($el);
}

echo "\nHTML верстка:\n";
echo $page->getOuterHTML() . "\n";

echo "\nMemory usage after: " . memoryUsageMB() . " MB\n";
