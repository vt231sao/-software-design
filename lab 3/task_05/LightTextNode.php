<?php

require_once 'LightNode.php';

class LightTextNode implements LightNode {
    private string $text;

    public function __construct(string $text) {
        $this->text = htmlspecialchars($text);
    }

    public function getInnerHTML(): string {
        return $this->text;
    }

    public function getOuterHTML(): string {
        return $this->text;
    }
}
