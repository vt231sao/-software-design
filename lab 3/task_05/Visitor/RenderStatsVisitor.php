<?php

require_once 'NodeVisitor.php';
require_once __DIR__ . '/../LightElementNode.php';
require_once __DIR__ . '/../LightTextNode.php';

class RenderStatsVisitor implements NodeVisitor {
    private int $elementCount = 0;
    private int $textCount = 0;

    public function visitElement(LightElementNode $element): void {
        $this->elementCount++;
        foreach ($element->getChildren() as $child) {
            $child->accept($this);
        }
    }

    public function visitText(LightTextNode $text): void {
        $this->textCount++;
    }

    public function getElementCount(): int {
        return $this->elementCount;
    }

    public function getTextCount(): int {
        return $this->textCount;
    }
}
