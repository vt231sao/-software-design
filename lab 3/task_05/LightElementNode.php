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

        $this->onCreated();
    }

    public function renderWithLifecycle(): string {
        $this->onInserted();
        $this->onStylesApplied();
        $this->onClassListApplied();
        if (!empty($this->children)) {
            $this->onTextRendered();
        }

        return $this->getOuterStateHTML(); // враховує State
    }

    protected function onCreated(): void {
        echo "[Hook] {$this->tagName} created\n";
    }

    protected function onInserted(): void {
        echo "[Hook] {$this->tagName} inserted into DOM\n";
    }

    protected function onStylesApplied(): void {
        echo "[Hook] Styles applied to {$this->tagName}\n";
    }

    protected function onClassListApplied(): void {
        echo "[Hook] Class list applied to {$this->tagName}\n";
    }

    protected function onTextRendered(): void {
        echo "[Hook] Text rendered inside {$this->tagName}\n";
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


    public function removeClass(string $className): void {
        $this->cssClasses = array_filter($this->cssClasses, fn($cls) => $cls !== $className);
    }


    private ElementState $state;

    public function setState(ElementState $state): void {
        $this->state = $state;
    }

    public function getState(): string {
        return $this->state->getName();
    }

    public function defaultRender(): string {
        $classAttr = empty($this->cssClasses) ? '' : ' class="' . implode(' ', $this->cssClasses) . '"';
        if ($this->selfClosing) {
            return "<{$this->tagName}{$classAttr}/>";
        }
        return "<{$this->tagName}{$classAttr}>{$this->getInnerHTML()}</{$this->tagName}>";
    }

    public function getOuterStateHTML(): string {
        return $this->state->render($this);
    }

    public function getTagName(): string {
        return $this->tagName;
    }

    public function getCssClasses(): array {
        return $this->cssClasses;
    }

    public function setCssClasses(array $classes): void {
        $this->cssClasses = $classes;
    }

}
