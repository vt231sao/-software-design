<?php

require_once 'Renderer.php';
class RasterRenderer implements Renderer {
    public function render(string $shapeName): void {
        echo "Drawing $shapeName as pixels\n";
    }
}