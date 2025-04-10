<?php

class Logger {
    public function log($message) {
        echo "\033[32m[LOG]: $message\033[0m" . PHP_EOL;
    }

    public function error($message) {
        echo "\033[31m[ERROR]: $message\033[0m" . PHP_EOL;
    }

    public function warn($message) {
        echo "\033[33m[WARNING]: $message\033[0m" . PHP_EOL;
    }
}
