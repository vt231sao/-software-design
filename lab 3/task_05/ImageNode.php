<?php

require_once 'LightNode.php';
require_once 'LoadStrategy.php';

class ImageNode implements LightNode {
    private string $src;
    private LoadStrategy $strategy;

    public function __construct(string $src, LoadStrategy $strategy) {
        $this->src = $src;
        $this->strategy = $strategy;
    }

    public function getInnerHTML(): string {
        return '';
    }

    public function getOuterHTML(): string {
        return "<img src=\"" . htmlspecialchars($this->src) . "\"/>";
    }

    public function load(): void {
        echo $this->strategy->load($this->src) . "\n";
    }
}
