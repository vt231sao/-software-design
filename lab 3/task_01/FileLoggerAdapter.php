<?php

require_once 'Logger.php';
require_once 'FileWriter.php';

class FileLoggerAdapter extends Logger {
    private $fileWriter;

    public function __construct(FileWriter $fileWriter) {
        $this->fileWriter = $fileWriter;
    }

    public function log($message) {
        $this->fileWriter->writeLine("[LOG]: $message");
    }

    public function error($message) {
        $this->fileWriter->writeLine("[ERROR]: $message");
    }

    public function warn($message) {
        $this->fileWriter->writeLine("[WARNING]: $message");
    }
}
