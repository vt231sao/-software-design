<?php

require_once 'Renderer.php';
abstract class Shape {
    protected Renderer $renderer;

    public function __construct(Renderer $renderer) {
        $this->renderer = $renderer;
    }

    abstract public function draw(): void;
}