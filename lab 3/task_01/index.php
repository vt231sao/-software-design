<?php

require_once 'Logger.php';
require_once 'FileWriter.php';
require_once 'FileLoggerAdapter.php';

echo "=== Console Logger ===\n";
$logger = new Logger();
$logger->log("Everything is OK");
$logger->warn("This might be a problem");
$logger->error("Something went wrong");

echo "\n=== File Logger (adapter) ===\n";
$fileWriter = new FileWriter("log.txt");
$fileLogger = new FileLoggerAdapter($fileWriter);

$fileLogger->log("File log - OK");
$fileLogger->warn("File log - warning");
$fileLogger->error("File log - error");

echo "Check 'log.txt' for output.\n";
