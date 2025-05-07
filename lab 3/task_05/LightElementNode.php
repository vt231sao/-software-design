<?php

require_once 'LightNode.php';

class LightElementNode implements LightNode {
    private string $tagName;
    private string $displayType;
    private bool $selfClosing;
    private array $cssClasses = [];
    private array $children = [];
    private array $eventListeners = [];

    public function __construct(string $tagName, string $displayType = "block", bool $selfClosing = false) {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->selfClosing = $selfClosing;
    }

    public function addClass(string $className): void {
        $this->cssClasses[] = $className;
    }

    public function addChild(LightNode $node): void {
        if (!$this->selfClosing) {
            $this->children[] = $node;
        }
    }

    public function getInnerHTML(): string {
        $html = '';
        foreach ($this->children as $child) {
            $html .= $child->getOuterHTML();
        }
        return $html;
    }

    public function getOuterHTML(): string {
        $classAttr = empty($this->cssClasses) ? '' : ' class="' . implode(' ', $this->cssClasses) . '"';

        if ($this->selfClosing) {
            return "<{$this->tagName}{$classAttr}/>";
        }

        $inner = $this->getInnerHTML();
        return "<{$this->tagName}{$classAttr}>{$inner}</{$this->tagName}>";
    }

    public function getChildCount(): int {
        return count($this->children);
    }

    public function addEventListener(string $eventName, callable $callback): void {
        $this->eventListeners[$eventName][] = $callback;
    }

    public function triggerEvent(string $eventName): void {
        if (!empty($this->eventListeners[$eventName])) {
            foreach ($this->eventListeners[$eventName] as $callback) {
                $callback($this);
            }
        }
    }

    public function getChildren(): array {
        return $this->children;
    }

}
