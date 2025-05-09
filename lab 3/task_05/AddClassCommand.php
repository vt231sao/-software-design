<?php

require_once 'Command.php';
require_once 'LightElementNode.php';

class AddClassCommand implements Command {
    private LightElementNode $element;
    private string $class;

    public function __construct(LightElementNode $element, string $class) {
        $this->element = $element;
        $this->class = $class;
    }

    public function execute(): void {
        $this->element->addClass($this->class);
    }

    public function undo(): void {
        $this->element->removeClass($this->class);
    }
}
