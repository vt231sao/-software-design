<?php

require_once 'Shape.php';
class Square extends Shape {
    public function draw(): void {
        $this->renderer->render("Square");
    }
}