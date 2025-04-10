<?php

require_once 'Shape.php';
class Triangle extends Shape {
    public function draw(): void {
        $this->renderer->render("Triangle");
    }
}
