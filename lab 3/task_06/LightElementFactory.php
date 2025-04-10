<?php

require_once '../task_05/LightElementNode.php';

class LightElementFactory {
    private array $elements = [];

    public function getElement(string $tagName, string $displayType = 'block', bool $selfClosing = false): LightElementNode {
        $key = "{$tagName}_{$displayType}_" . ($selfClosing ? '1' : '0');

        if (!isset($this->elements[$key])) {
            $this->elements[$key] = new LightElementNode($tagName, $displayType, $selfClosing);
        }

        return clone $this->elements[$key];
    }
}
