<?php

require_once 'Command.php';

class CommandInvoker {
    private array $history = [];

    public function execute(Command $command): void {
        $command->execute();
        $this->history[] = $command;
    }

    public function undo(): void {
        $lastCommand = array_pop($this->history);
        if ($lastCommand) {
            $lastCommand->undo();
        }
    }
}
