<?php

require_once 'Shape.php';
class Circle extends Shape {
    public function draw(): void {
        $this->renderer->render("Circle");
    }
}
