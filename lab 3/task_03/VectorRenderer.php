<?php

require_once 'Renderer.php';
class VectorRenderer implements Renderer {
    public function render(string $shapeName): void {
        echo "Drawing $shapeName as lines\n";
    }
}