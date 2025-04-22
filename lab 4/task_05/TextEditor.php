<?php

require_once 'TextDocument.php';
require_once 'DocumentMemento.php';

class TextEditor {
    private TextDocument $document;
    private array $history = [];

    public function __construct() {
        $this->document = new TextDocument();
    }

    public function type(string $text): void {
        $this->save();
        $this->document->write($text);
    }

    public function getText(): string {
        return $this->document->getContent();
    }

    public function save(): void {
        $this->history[] = new DocumentMemento($this->document->getContent());
    }

    public function undo(): void {
        if (empty($this->history)) {
            echo "Немає станів для відновлення!\n";
            return;
        }

        $memento = array_pop($this->history);
        $this->document->setContent($memento->getState());
    }
}
